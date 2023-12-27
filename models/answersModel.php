<?php

require_once '../config/database.php';

class answersModel
{
    private $db;
    private $id_question;

    public function __construct()
    {
        $this->db = new DatabaseConection();    
    }

    public function get()
    {
        return $this->id_question;
    }


    public function set($id_question)
    {
        $this->id_question = $id_question;
    }

    public function selectResponse()
    {
        $idQuestion = $this->get();
        $correctResponse = $this->correctResponse();
        $Responses = "SELECT answer_text FROM answers  WHERE question_id = :id_question";
        $querystmt = $this->db->prepare($Responses);
        $querystmt->bindParam(':id_question', $idQuestion);
        $querystmt->execute();
        $responses = $querystmt->fetchAll(PDO::FETCH_ASSOC);

        $formattedResponses = [];
        foreach ($responses as $response) {
            $formattedResponses[] = [
                'answer_text' => $response['answer_text'],
                'correct' => $response['answer_text'] == $correctResponse,
            ];
        }


        return $formattedResponses;
    }

    public function correctResponse()
    {
        $idQuestion = $this->get();
        $sql = "SELECT answer_text FROM questions JOIN answers ON questions.answer_id = answers.answer_id WHERE questions.question_id = :idquestion";
        $correctResponseQuery = $this->db->prepare($sql);
        $correctResponseQuery->bindParam(':idquestion', $idQuestion);
        $correctResponseQuery->execute();

        $correctResponse = $correctResponseQuery->fetch(PDO::FETCH_ASSOC);

        if ($correctResponse) {
            return $correctResponse['answer_text'];
        } else {
            return null;
        }
    }
}

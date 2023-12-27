<?php /*
include_once("../models/questionModel.php");
include_once("../models/reponseModel.php");
session_start();
$questionModel = new questionModel();
$reponseModel = new answersModel();
if (!empty($_SESSION['pseudo'])) {
    $questions = $questionModel->getAllQuestions();
    $responsesQuestions = [];
    foreach ($questions as $question) {
        $reponseByQestionId = $reponseModel->getAllReponseByIdQuestion($question->question_id);
        $responseQuestion = array(
            "question" => $question,
            "responses" => $reponseByQestionId
        );
        array_push($responsesQuestions, $responseQuestion);
    }
    include_once('../views/quiz.php');
} else {
    header('Location:./homeController.php');
}
*/

echo "ho"; 
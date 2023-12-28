<?php
require_once "./Model/question_modele.php";

class QuestionControleur
{
    public $questionText; 
    public $questionID;   
    public $themeID;    
    public $theme;  

    public function getQuestionControleur($array)
    {
        $questionModel = new Question();

        if ($questionModel->getQuestion($array)) {

            $this->questionID = $questionModel->idQ;
            $this->questionText = $questionModel->question;
            $this->themeID = $questionModel->idT;
            $this->theme = $questionModel->theme;

            require_once "./View/quizz_vue.php";
        } else {
            echo "La question avec l'ID {$questionModel->idQ} n'a pas été trouvée.";
        }
    }

}
?>
<?php
require_once "./../Controller/question_controleur.php";

if (isset($_GET['counter'])) {
    $counter = intval($_GET['counter']);
    $objetQuestion = new QuestionControleur();
    $question = $objetQuestion->getQuestionControleur();
    
    if ($counter < count($question)) {
        echo $question[$counter]['idQ'] . "- " . $question[$counter]['question'] . "<br>";
    }

}




?>
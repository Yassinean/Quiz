<?php
session_start();

if (!isset($_SESSION["array"])) {
    $_SESSION["array"] = [];
}


require_once "./Controller/question_controleur.php";
require_once "./Controller/reponse_controleur.php";
require_once "./Controller/result_controleur.php";

$i = isset($_GET['id']) ? $_GET['id'] : 1;
$selectedAnswer = isset($_GET['answer']) ? intval($_GET['answer']) : null;

$objetQuestion = new QuestionControleur();
$objetReponse = new ReponseControleur();
$objetResult = new ResultControleur();

if ($i == 1) {
    $objetResult->deleteControleur();
}


$objetQuestion->getQuestionControleur($_SESSION["array"]);
$objetReponse->getReponseContoleur($objetQuestion->questionID);

$_SESSION["array"][] += $objetQuestion->questionID;

$objetResult->insertReponseContoleur($objetQuestion->questionID, $selectedAnswer);


if ($i > 10) {
    header('location:result.php');
    session_destroy();
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Contenu/style/style_quizz.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Quiz</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-orange-500">
    <header>
        <div class="w-9/12 bg-white rounded-full h-2.5 dark:bg-white mx-1 mr-28 mt-9">
            <div class="bg-orange-500 h-2.5 rounded-full" style="width: 66%"></div>
            <div class="flex justify-end">
                <button type="button" id="next" class="mx-2">Next</button>
            </div>
        </div>
    </header>
    <section class="sec1">
        <h2 class="text-center text-xl text-white"><?php echo  'Question ' . $i; ?><h2>
            <div class="question">
                <h3 class="text-xl">Theme : <?php echo $objetQuestion->theme; ?></h3>
                <h5 class=""><?php echo $objetQuestion->questionText; ?></h5>
            </div>
    </section>
    <section class="sec2">
        <form method="GET" id="answersForm">
            <div class="div1">
                <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[0]['idR']; ?>">A- <?php echo $objetReponse->reponses[0]['reponse']; ?></button>
                <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[1]['idR']; ?>">B- <?php echo $objetReponse->reponses[1]['reponse']; ?></button>
            </div>
            <div class="div2">
                <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[2]['idR']; ?>">C- <?php echo $objetReponse->reponses[2]['reponse']; ?></button>
                <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[3]['idR']; ?>">D- <?php echo $objetReponse->reponses[3]['reponse']; ?></button>
            </div>
            <input type="hidden" name="selectedAnswer" id="selectedAnswer" value="">
        </form>

    </section>
    <!-- ajax -->

    <script>
        $(document).ready(function() {
            $(".answerButton").click(function() {
                <?php $i++; ?>
                var selectedAnswer = $(this).val();
                $("#selectedAnswer").val(selectedAnswer);


                $.ajax({
                    type: "GET",
                    url: "quizz.php",
                    data: {
                        id: <?php echo $i; ?>,
                        answer: selectedAnswer
                    },
                    success: function(response) {
                        $("body").html(response);
                    }
                });

            });

            $("#next").click(function() {


                $.ajax({
                    type: "GET",
                    url: "quizz.php",
                    data: {
                        id: <?php echo $i; ?>
                    },
                    success: function(response) {
                        $("body").html(response);
                    }
                });

            });
        });


        window.addEventListener('beforeunload', () => {
            let XHR = new XMLHttpRequest();
            XHR.onreadystatechange = function() {
                if (this.status === 200) {
                    console.log("Session deleted successfully");
                }
            }
            XHR.open('GET', './Vue/SESSION_DESTROY.php');
            XHR.send();
        });
    </script>
</body>

</html>
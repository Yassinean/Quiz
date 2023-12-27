<?php

require_once('../models/answersModel.php');
session_start();
if (empty($_SESSION['pseudo'])) {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/quiz.css">
    <title>questions</title>
</head>

<body>
    <section class="quiz">
        <div class="quiz-box">
            <h1>AWS Quiz</h1>
            <div class="quiz-header">
                <span><?php echo $_SESSION['pseudo']; ?></span>
                <span class="header-score">Score : 0 / 6</span>
            </div>
            <!-- <h2 class="question-text">Question 1</h2> -->
            <h1 class="question-text" id="question"></h1>
            <div class="option-list">
                <div class="option">
                    <div id="answer-buttons">
                        <button class="option" type="button" onclick="changeBackgroundColor(this)"></button>
                    </div>
                </div>
            </div>
            <div class="quiz-footer">
                <spant class="question-total">1 of 5 Questions</spant>
                <div class="next-btn">
                    <button id="next-btn">Next</button>
                </div>
            </div>
        </div>
        <!-- <div class="result-box">
                <h2>Your result !</h2>
                <div class="percentage-container">
                    <div class="circular-progress">
                        <span class="progress-value">0%</span>
                    </div>
                    <span class="score-text">
                        Your score 0 out of 5
                    </span>
                </div>
                <div class="buttons">
                    <button class="tryAgain-btn">Try Again</button>
                    <button class="goHome-btn">Go To Home</button>
                </div>
            </div> -->
    </section>
    </div>
    <script src="../js/question.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>
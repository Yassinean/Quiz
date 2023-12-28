<?php

require_once "./Controller/result_controleur.php";

$objetResult = new ResultControleur();
$objetResult->terminer();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./Contenu/style/style_result.css">
    <title>Quiz</title>
</head>

<body>
    <header>
        <div class="logo"></div>
        <button id="toggleCorrectionBtn">Correction</button>
        <div class="w-9/12 bg-white rounded-full h-2.5 dark:bg-white mx-1 mr-28 mt-9">
            <div class="bg-orange-500 h-2.5 rounded-full" style="width: 100%"></div>
        </div>
    </header>

    <section class="sec1">

        <?php if ($objetResult->scoreContoleur() >= 7) : ?>

            <h2 class="text-white bg-green-400 p-2 rounded">Congratulations, you have passed the quiz</h2>
        <?php else : ?>
            <div class="text-white bg-red-400 p-2 rounded">Unfortunately, you missed the quiz</div>
        <?php endif; ?>
        <h2 class="bg-white p-2 rounded-sm">Your score is : <?php echo $objetResult->scoreContoleur() * 10; ?>/100</h2>
        <?php $objetResult->Correction(); ?>
    </section>
</body>

</html>
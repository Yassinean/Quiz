<?php
require_once "./Controller/index_controleur.php";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Contenu/style/style_index.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Quiz</title>
</head>

<body class="bg-[url('../Contenu/images/bg-aws.jpg')">
    <header>
        <div class="logo"></div>
        <div class="progress">
            <div class="w-9/12 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-40">
                <div class="bg-black h-2.5 rounded-full" style="width: 33%"></div>
            </div>
    </header>

    <section class="sec1">
        <div class="p-8 rounded-md shadow-md backdrop-blur-sm">
            <h2 class="text-2xl font-bold mb-4 text-white">Boostez vos capacités</h2>
            <div class="flex justify-center items-center mb-6">
                <span class="text-gray-600 dark:text-gray-400">Powered by AWS</span>
            </div>
            <form method="POST">
                <input type="text" name="pseudo" placeholder="Entrer votre pseudo" class="w-full p-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <button type="submit" name="commencer" class="w-full bg-orange-600 hover:bg-orange-700 text-white py-2 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring focus:border-orange-300">Commencer</button>
            </form>
        </div>
    </section>

    <!-- footer -->
    <?php require_once "./Contenu/footer.php"; ?>
</body>

</html>
<?php $content = ob_get_clean(); ?>
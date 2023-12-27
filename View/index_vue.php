<?php
require_once "./Controller/index_controleur.php";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./Contenu/style/style_index.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Quiz</title>
</head>

<body>
    <header>
        <div class="progress">
            <div class="w-9/12 bg-white rounded-full h-2.5 dark:bg-white mx-40">
                <div class="bg-orange-500 h-2.5 rounded-full" style="width: 33%"></div>
            </div>
    </header>

    <section class="flex items-center justify-center h-screen">
        <div class="bg-transparent backdrop-blur-sm p-8 rounded-md shadow-md">
            <h2 class="text-2xl font-bold mb-4 text-white">Tester Vos Connaissance</h2>
            <div class="flex justify-center flex-col items-center mb-6">
                <img src="./Contenu/images/logo.jpg" alt="AWS Logo" class="w-12 h-12">
                <span class="text-gray-600 dark:text-gray-400">Powered by AWS</span>
            </div>
            <form method="POST">
                <input type="text" name="pseudo" placeholder="Entrer votre pseudo" class="w-full p-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-orange-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <button type="submit" name="commancer" class="w-full bg-orange-600 hover:bg-orange-700 text-white py-2 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring focus:border-orange-300">Commencer</button>
            </form>
        </div>
    </section>


</body>

</html>
<?php $content = ob_get_clean(); ?>
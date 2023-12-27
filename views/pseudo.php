<?php

session_start();
if (isset($_POST['submit'])) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    header('location: ./views/quiz.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <m eta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>home</title>
</head>

<body>
    <main class="main">
        <header class="header">
            <a href="" class="logo">Quiz</a>
            <nav class="navbar">
                <a href="" class="active">Home</a>
                <a href="">Quiz</a>
            </nav>
        </header>
        <div class="container">
            <section class="home">
                <div class="home-content">
                    <h1>Quiz Website</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eius at aspernatur error perferendis asperiores quod minima fugit similique nulla.</p>
                    <form class="w-full px-3 mb-5" method="post" action="">
                        <label for="" class="justify-center text-xs font-semibold px-1 mx-auto">Enter your pseudo name</label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                            <input type="text" class="w-55 mx-auto pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" name="pseudo" placeholder="Pseudo Name">
                        </div>
                        <button type="button" class="start-btn" onclick="commencerBtn()">Commencer</button>
                </div>
            </section>
        </div>

    </main>
    <div class="popup-info">
        <h2>Quiz Guide</h2>
        <span class="info">1. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
        <span class="info">2. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
        <span class="info">3. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
        <span class="info">4. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
        <span class="info">5. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
        <div class="btn-group">
            <button class="info-btn exit-btn" onclick="exitBoton()">Exit Quiz</button>
            <button type="submit" name="submit" class="info-btn continue-btn" onclick="continueBoton()">Continue</button>
            </form>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/question.js"></script>
</body>

</html>
































































































<!-- 
<!doctype html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
     <script src="https://cdn.tailwindcss.com"></script>
     <title><?= APP_NAME; ?></title>
     <style>
         @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
     </style>
 </head>

 <body>
     <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
         <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
             <div class="md:flex w-full">
                 <div class="hidden md:block w-1/2 bg-sky-300 py-10 px-10">
                     <img src="../views/layout/images/277.jpg">
                 </div>
                 <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                     <div class="text-center mb-10">
                         <img src="../views/layout/images/AWS-logo.png">
                         <h1 class="font-bold text-3xl text-gray-900">AWS QUIZ</h1>
                         <p>TEST YOUR CULTURE IN CLOUD</p>
                     </div>
                     <div>
                         <div class="flex -mx-3">
                             <form class="w-full px-3 mb-5" method="post" action="" >
                                 <label for="" class="justify-center text-xs font-semibold px-1">Enter your pseudo name</label>
                                 <div class="flex">
                                     <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                     <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" name="pseudo" placeholder="Pseudo Name">
                                 </div>
                                 <div class="flex -mx-3 my-4">
                                     <div class="w-full px-3 mb-5">
                                         <button type="submit" class="block w-full max-w-xs mx-auto bg-orange-400 hover:bg-orange-600 focus:bg-orange-600 text-white rounded-lg px-3 py-3 font-semibold">Start</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

 </body>

 </html>  -->
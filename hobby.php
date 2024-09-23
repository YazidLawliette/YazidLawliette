<?php
 require 'connect.php';

 $kdramas = getData("SELECT * FROM kdramas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby</title>
    <link rel="shortcut icon" href="./src/img/pngegg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
    </script>
    <style>
        .transform {
            transition: transform 0.3s ease-in-out;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: #F5F7F8;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #A0AEC0;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #718096;
        }

        html {
            scrollbar-width: thin;
            scrollbar-color: #A0AEC0 #F5F7F8;
        }

        .dancing-script {
            font-family: 'Dancing Script', cursive;
        }
    </style>
</head>

<body class="bg-[#F5F7F8] text-gray-900">
    <nav class="flex justify-between items-center px-8 py-4 md:px-52 fixed w-full bg-white z-10">
        <div class="text-2xl font-bold"><a href="./index.html">la.</a></div>
        <div class="md:hidden">
            <button onclick="toggleMenu()" class="focus:outline-none">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="./index.html" class="text-gray-600 hover:text-gray-900">Work</a>
            <a href="./me.php" class="text-gray-600 hover:text-gray-900">About</a>
            <a href="https://idn.sch.id/" target="_blank" class="text-gray-600 hover:text-gray-900">School</a>
            <a href="./contact.php" class="text-gray-600 hover:text-gray-900">Contact</a>
            <a href="./hobby.php" class="text-gray-600 hover:text-gray-900">Hobby</a>
        </div>
    </nav>

    <div id="mobile-menu" class="fixed inset-y-0 left-0 w-64 bg-white transform -translate-x-full md:hidden z-50 transition-transform duration-300 ease-in-out">
        <div class="flex justify-between items-center px-8 py-4">
            <div class="font-bold w-8"><a href="./me.html"><img src="./src/img/pngegg.png" alt="Logo"></a></div>
            <button onclick="toggleMenu()" class="focus:outline-none">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav class="px-8 py-4">
            <a href="./index.html" class="block text-gray-600 hover:text-gray-900 py-2">Work</a>
            <a href="./me.php" class="block text-gray-600 hover:text-gray-900 py-2">About</a>
            <a href="https://idn.sch.id/" target="_blank" class="block text-gray-600 hover:text-gray-900 py-2">School</a>
            <a href="./contact.php" class="block text-gray-600 hover:text-gray-900 py-2">Contact</a>
            <a href="./hobby.php" class="block text-gray-600 hover:text-gray-900 py-2">Hobby</a>
        </nav>
    </div>

    <div class="py-24 px-8 md:px-44 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($kdramas as $kdrama) : ?>
                <div class="bg-white rounded-lg shadow-md p-4 transition-all ease-in-out duration-500">
                    <img src="./src/img/<?= htmlspecialchars($kdrama['image']) ?>" alt="<?= htmlspecialchars($kdrama['name']) ?>" class="w-full h-60 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold text-gray-800"><?= htmlspecialchars($kdrama['name']) ?></h3>
                    <p class="mt-2 text-gray-600"><?= htmlspecialchars($kdrama['desc']) ?></p>
                    <a href="<?= htmlspecialchars($kdrama['link']) ?>" target="_blank">
                    <button class="mt-4 px-4 py-2 bg-black text-white rounded-md hover:bg-slate-200 hover:text-black transition-all ease-in-out duration-500 border border-b-4 border-black font-semibold w-full">
                        Watch
                    </button>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container flex flex-col md:flex-row mt-2 justify-between px-8 py-8 md:px-44 gap-16 shadow-xl mx-auto mb-16">   
    <img class="h-80 md:h-[500px] max-w-full transition-all -z-1 duration-700 rounded-lg blur-lg hover:blur-none" src="./src/img/han-so-he.jpg" alt="image description">
    <div class="flex flex-col gap-14">
        <h1 class="text-4xl md:text-6xl px-4 font-semibold md:font-bold">My Favorite Korean Artist</h1>
        <h3 class="text-2xl md:text-4xl px-4 font-bold dancing-script">Han So-hee</h3>
        <p class="px-4">Lee So-hee (Korean: 이소희; born November 18, 1994), better known by the stage name Han So-hee (한소희), is a South Korean actress. She began her career as a supporting character in the television series Money Flower (2017), 100 Days My Prince (2018), and Abyss (2019) before transitioning into lead roles in The World of the Married (2020), Nevertheless (2021), My Name (2021) and Gyeongseong Creature (2023–2024).</p>
    </div>
    </div>
    <div class="mb-96"></div>
</body>
</html>


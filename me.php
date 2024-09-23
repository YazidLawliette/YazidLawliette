<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>azid.</title>
    <link rel="shortcut icon" href="./src/img/pngegg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    </style>
    <script defer>
        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('-translate-x-full');
        }
    </script>
</head>
<body class="bg-[#F5F7F8] text-gray-900 font-poppins antialiased">
    <!-- Navigation Bar -->
    <nav class="flex justify-between items-center bg-white px-8 py-4 md:px-52 fixed w-full">
        <div class="text-2xl font-bold"><a href="./me.html">la.</a></div>
        <div class="md:hidden">
            <button onclick="toggleMenu()" class="focus:outline-none">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6">
            <a href="./index.html" class="text-gray-600 hover:text-gray-900">Work</a>
            <a href="./me.php" class="text-gray-600 hover:text-gray-900">About</a>
            <a href="https://idn.sch.id/" target="_blank" class="text-gray-600 hover:text-gray-900">School</a>
            <a href="./contact.php" class="text-gray-600 hover:text-gray-900">Contact</a>
            <a href="./hobby.php" class="text-gray-600 hover:text-gray-900">Hobby</a>
        </div>
    </nav>

    <!-- Mobile Menu  -->
    <div id="mobile-menu" class="fixed inset-y-0 left-0 w-64 bg-white transform -translate-x-full md:hidden z-50">
        <div class="flex justify-between items-center px-8 py-4">
            <div class="font-bold w-8"><a href="./me.html"><img src="./src/img/pngegg.png" alt=""></a></div>
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

    <div class="bg-white p-8 md:px-52 md:py-20 rounded-lg shadow-lg flex flex-col lg:flex-row items-center lg:items-start lg:space-x-8">
        <div class="lg:w-1/2">
            <h1 class="text-3xl font-bold text-gray-800 mb-4 mt-10">Hi, I'm  Yazid, Programer artist & web designer.</h1>
            <p class="text-gray-600 mb-4">
                My work is mainly focused on program, backend, and web developer. I love exploring creatures with a touch of dark surrealism to reference.
            </p>
            <p class="text-gray-600">
                I am currently an interactive media student at ///- currently freelancing and looking for internship opportunities.
            </p>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-6">
            <img src="./src/img/DSC_1120.JPG" alt="" class="rounded-lg shadow-lg">
        </div>
    </div>

    <div class="max-w-full mx-auto p-8 md:px-52">
        <!-- Main Structure -->
        <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-300 pb-8">
            
            <!-- Left Column -->
            <div class="space-y-4">
                <div>
                    <h2 class="text-lg font-semibold">Main Partner</h2>
                    <p class="text-gray-600">I studying with somepeople - 
                        <br> "Prof. Sandika Galih" <br>
                    "Dea Afrizal".</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Main Skills</h2>
                    <p class="text-gray-600">VScode,(JS, TailwindCSS, PHP, Laravel, NextJS. )
                    <br>
                    Styling, Retopology, Animation, Web Design</p>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="mt-8 md:mt-0 flex flex-col items-center md:items-end text-center md:text-right space-y-4">
                <p class="text-lg">I am thrilled to answer to your next project &darr;</p>
                <p class="text-gray-600">yzeeadddd@gmail.com</p>
                <a href="#" class="text-blue-500 underline">View Resume</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="flex justify-between items-center mt-8 text-gray-600">
            <p>Yazid — 2024</p>
            <div class="flex space-x-2 font-semibold">
                <a href="#" class="hover:text-gray-900">Artstation</a>
                <a href="https://www.linkedin.com/in/yazid-lawliet-a5a543292/" class="hover:text-gray-900">LinkedIn</a>
                <a href="#" class="hover:text-gray-900">Twitter</a>
            </div>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>azid.</title>
    <link rel="shortcut icon" href="./src/img/pngegg.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
    </style>
    <script defer>
        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('-translate-x-full');
        }
    </script>
</head>
<body class="bg-[#F5F7F8] text-gray-900 font-poppins antialiased">
    <!-- Navigation Bar -->
    <nav class="flex justify-between items-center px-8 py-4 md:px-52 fixed w-full bg-white">
        <div class="text-2xl font-bold"><a href="./index.html">la.</a></div>
        <div class="md:hidden">
            <button onclick="toggleMenu()" class="focus:outline-none">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6">
            <a href="./index.php" class="text-gray-600 hover:text-gray-900">Work</a>
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
            <a href="./index.php" class="block text-gray-600 hover:text-gray-900 py-2">Work</a>
            <a href="me.php" class="block text-gray-600 hover:text-gray-900 py-2">About</a>
            <a href="https://idn.sch.id/" target="_blank" class="block text-gray-600 hover:text-gray-900 py-2">School</a>
            <a href="./contact.php" class="block text-gray-600 hover:text-gray-900 py-2">Contact</a>
            <a href="./hobby.php" class="block text-gray-600 hover:text-gray-900 py-2">Hobby</a>
        </nav>
    </div>
<section id="contact" class="bg-gray-100 py-20">
    <div class="max-w-4xl mx-auto px-8 text-center">
        <h2 class="text-3xl font-bold mb-6">Get In Touch</h2>
        <p class="text-lg text-gray-700 mb-8">
            If you have any questions or just want to say hi, feel free to reach out. I'd love to hear from you!
        </p>
        <form action="send_email.php" method="POST" class="space-y-4">
            <div>
                <input type="text" name="name" id="name" placeholder="Your Name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <div>
                <input type="email" name="email" id="email" placeholder="Your Email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <div>
                <textarea name="message" id="message" rows="4" placeholder="Your Message"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>
            <button type="submit"
                class="w-full py-2 bg-black text-white font-semibold rounded-md hover:bg-gray-900 transition duration-300">
                Send Message
            </button>
        </form>
        
    </div>
</section>

<hr class="my-4 border-gray-500" />
<footer>
    <div class="flex justify-between items-center p-8 md:px-52 mt-8 text-gray-600">
      <p>Yazid — 2024</p>
      <div class="flex space-x-2 font-semibold">
          <a href="#" class="hover:text-gray-900">Artstation</a>
          <a href="https://www.linkedin.com/in/yazid-lawliet-a5a543292/" class="hover:text-gray-900">LinkedIn</a>
          <a href="#" class="hover:text-gray-900">Twitter</a>
      </div>
  </div>
  </footer>

</body>
</html>
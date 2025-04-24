<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-green-800 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="/ChaloSeekhein\image\EduR.png" alt="EduRural Logo" class="h-10 w-10">
        <div class="text-xl font-bold text-white">EduRural</div>
      </div>
      <div class="hidden md:flex space-x-6">
        <a href="index.php" class="text-white hover:text-blue-200 transition duration-300">Home</a>
        <a href="learning-materials.php" class="text-white hover:text-blue-200 transition duration-300">Materials</a>
        <a href="video-classes.php" class="text-white hover:text-blue-200 transition duration-300">Video Classes</a>
        <a href="teacher-signup.php" class="text-white hover:text-blue-200 transition duration-300">Volunteer</a>
       
        <a href="community.php" class="text-white hover:text-blue-200 transition duration-300">Community</a>
        <a href="contact.php" class="text-white hover:text-blue-200 transition duration-300">Contact</a>
        <a href="state-education-data.php" class="text-white hover:text-blue-200 transition duration-300">Education Stats</a>
      </div>
      <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-blue-700" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="index.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Home</a>
        <a href="learning-materials.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Materials</a>
        <a href="teacher-signup.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Volunteer</a>
        <a href="video-classes.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Video Classes</a>
        <a href="community.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Community</a>
        <a href="contact.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="bg-gradient-to-r from-blue-400 to-teal-500 text-white p-16 text-center shadow-md rounded-xl mx-4">
    <h1 class="text-4xl font-extrabold">We’d Love to Hear From You!</h1>
    <p class="mt-2 text-lg">Reach out with your feedback or questions.</p>
  </header>

  <!-- Contact Form -->
  <section class="max-w-xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Send Us a Message</h2>
    <form action="send-feedback.php" method="post" class="space-y-6">
      <div>
        <label for="name" class="block text-gray-700 mb-1">Your Name</label>
        <input name="name" id="name" placeholder="John Doe" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 outline-none transition duration-200" required>
      </div>
      <div>
        <label for="message" class="block text-gray-700 mb-1">Message</label>
        <textarea name="message" id="message" placeholder="Your message..." rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 outline-none transition duration-200" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white px-6 py-3 rounded-full font-semibold shadow hover:shadow-lg transform hover:scale-105 transition duration-300">
          Send Message
        </button>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer class="text-center text-gray-600 text-sm mt-12">
    <p>© 2025 EduRural. All rights reserved.</p>
  </footer>

</body>

</html>
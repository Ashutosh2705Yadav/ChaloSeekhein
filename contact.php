<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-white shadow mb-6">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between">
    <div class="text-xl font-semibold text-blue-700">EduRural</div>
    <div class="space-x-4">
      <a href="index.php" class="text-gray-700 hover:text-blue-600">Home</a>
      <a href="learning-materials.php" class="text-gray-700 hover:text-blue-600">Materials</a>
      <a href="teacher-signup.php" class="text-gray-700 hover:text-blue-600">Volunteer</a>
      <a href="video-classes.php" class="text-gray-700 hover:text-blue-600">Video Classes</a>
      <a href="community.php" class="text-gray-700 hover:text-blue-600">Community</a>
      <a href="contact.php" class="text-gray-700 hover:text-blue-600">Contact</a>
    </div>
  </div>
</nav>

<!-- Hero -->
<header class="bg-gradient-to-r from-blue-300 to-green-300 text-white py-12 text-center shadow-md rounded-xl mx-4">
  <h1 class="text-4xl font-bold">We’d Love to Hear From You!</h1>
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
      <button type="submit" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-3 rounded-full font-semibold shadow hover:shadow-lg transform hover:scale-105 transition duration-300">
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
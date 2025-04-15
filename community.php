<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community Support</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow mb-6">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between">
      <div class="text-xl font-semibold text-white">EduRural</div>
      <div class="space-x-4">
        <a href="index.php" class="text-white hover:text-gray-200">Home</a>
        <a href="learning-materials.php" class="text-white hover:text-gray-200">Materials</a>
        <a href="teacher-signup.php" class="text-white hover:text-gray-200">Volunteer</a>
        <a href="video-classes.php" class="text-white hover:text-gray-200">Video Classes</a>
        <a href="community.php" class="text-white hover:text-gray-200">Community</a>
        <a href="contact.php" class="text-white hover:text-gray-200">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="bg-gradient-to-r from-blue-400 to-teal-500 text-white p-16 text-center rounded-xl">
    <h1 class="text-4xl font-extrabold mb-4">Community Support for Rural Education</h1>
    <p class="text-lg">Together, we can make a lasting impact in rural education by supporting and empowering local communities.</p>
  </header>

  <!-- Supporters Section -->
  <section class="max-w-7xl mx-auto mt-12">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Valued Supporters</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
        <img src="https://via.placeholder.com/150" alt="NGO logo" class="w-24 h-24 mx-auto rounded-full mb-4">
        <h3 class="text-lg font-semibold text-gray-800">NGO Name</h3>
        <p class="text-gray-600">This NGO helps us with resources and training to improve education in remote areas.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
        <img src="https://via.placeholder.com/150" alt="Volunteer logo" class="w-24 h-24 mx-auto rounded-full mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Volunteer Name</h3>
        <p class="text-gray-600">Our volunteer teachers give their time to help students in rural areas succeed academically.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
        <img src="https://via.placeholder.com/150" alt="Educator logo" class="w-24 h-24 mx-auto rounded-full mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Educator Name</h3>
        <p class="text-gray-600">These passionate educators provide training and knowledge to students and teachers alike.</p>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="bg-gradient-to-r from-pink-500 to-indigo-600 text-white p-12 mt-12 rounded-xl text-center">
    <h2 class="text-2xl font-bold mb-4">Get Involved in Our Mission</h2>
    <p class="mb-4">Help us build a better future for rural students. Volunteer, donate, or spread the word.</p>
    <a href="teacher-signup.php" class="bg-white text-pink-500 py-3 px-8 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Join Us Now</a>
  </section>

  <footer class="bg-gray-800 text-white text-center p-4 mt-12">
    © 2025 EduRural. All rights reserved.
  </footer>

  <script>
    AOS.init(); // Initialize AOS animations
  </script>
</body>
</html>
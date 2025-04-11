<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Volunteer Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6 bg-gray-50">
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
  <h2 class="text-2xl font-bold mb-4">Volunteer as a Teacher</h2>
  <form id="signupForm" class="max-w-md bg-white p-6 rounded shadow">
    <input type="text" name="name" placeholder="Name" class="block w-full mb-2 p-2 border rounded">
    <input type="text" name="subject" placeholder="Subject" class="block w-full mb-2 p-2 border rounded">
    <input type="email" name="email" placeholder="Email" class="block w-full mb-2 p-2 border rounded">
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Submit</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('#signupForm').on('submit', function(e) {
      e.preventDefault();
      $.post('save-teacher.php', $(this).serialize(), function(data) {
        alert(data);
      });
    });
  </script>
</body>
</html>
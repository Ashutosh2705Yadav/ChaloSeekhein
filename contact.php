<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6 bg-white">
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
  <h2 class="text-2xl font-bold mb-4">Feedback / Contact</h2>
  <form action="send-feedback.php" method="post" class="max-w-md bg-gray-100 p-4 rounded shadow">
    <input name="name" placeholder="Your Name" class="block mb-2 w-full p-2 border rounded" required>
    <textarea name="message" placeholder="Message" class="block mb-2 w-full p-2 border rounded" required></textarea>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Send</button>
  </form>
</body>
</html>
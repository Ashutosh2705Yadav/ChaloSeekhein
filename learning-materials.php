<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learning Materials</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="p-6 bg-gradient-to-r from-blue-100 via-indigo-100 to-purple-100">
  <nav class="bg-white shadow-lg rounded-lg mb-8 p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <div class="text-3xl font-semibold text-indigo-600">EduRural</div>
      <div class="space-x-6 text-lg">
        <a href="index.php" class="hover:text-indigo-600">Home</a>
        <a href="learning-materials.php" class="hover:text-indigo-600">Materials</a>
        <a href="teacher-signup.php" class="hover:text-indigo-600">Volunteer</a>
        <a href="video-classes.php" class="hover:text-indigo-600">Video Classes</a>
        <a href="community.php" class="hover:text-indigo-600">Community</a>
        <a href="contact.php" class="hover:text-indigo-600">Contact</a>
      </div>
    </div>
  </nav>

  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Upload Learning Materials</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-lg mb-8">
      <input type="file" name="file" class="mb-4 p-3 border border-gray-300 rounded-lg w-full" required>
      <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-500 transition ease-in-out duration-300">Upload</button>
    </form>

    <h3 class="text-2xl font-semibold text-center mb-4">Available Materials</h3>
    <div class="bg-white rounded-lg shadow-lg p-6">
      <ul class="space-y-4">
        <?php
          $files = scandir("uploads/");
          foreach($files as $file) {
            if ($file != "." && $file != "..") {
              echo "<li><a href='uploads/$file' class='text-indigo-600 hover:underline'>$file</a></li>";
            }
          }
        ?>
      </ul>
    </div>

    <h3 class="text-2xl font-semibold text-center mt-8 mb-4">Download NCERT Textbooks</h3>
    <form action="" method="post" class="bg-white p-8 rounded-lg shadow-lg mb-8">
      <label for="class" class="block text-lg text-indigo-600 mb-2">Select Class:</label>
      <select name="class" id="class" class="mb-4 p-3 border border-gray-300 rounded-lg w-full">
        <option value="6">Class 6</option>
        <option value="7">Class 7</option>
        <option value="8">Class 8</option>
        <option value="9">Class 9</option>
        <option value="10">Class 10</option>
      </select>

      <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-500 transition ease-in-out duration-300 w-full">Show Textbooks</button>
    </form>

    <?php
    if (isset($_POST['class'])) {
        $class = $_POST['class'];
        echo "<h4 class='text-xl font-semibold text-center mb-4'>Class $class Textbooks</h4>";
        echo "<div class='bg-white p-6 rounded-lg shadow-lg'>";
        echo "<ul class='space-y-4'>";
        $ncert_books = [
            "6" => [
                "Maths" => "path/to/class6-maths.pdf",
                "Science" => "path/to/class6-science.pdf",
                "English" => "path/to/class6-english.pdf"
            ],
            "7" => [
                "Maths" => "path/to/class7-maths.pdf",
                "Science" => "path/to/class7-science.pdf",
                "English" => "path/to/class7-english.pdf"
            ],
            "8" => [
                "Maths" => "path/to/class8-maths.pdf",
                "Science" => "path/to/class8-science.pdf",
                "English" => "path/to/class8-english.pdf"
            ],
            "9" => [
                "Maths" => "path/to/class9-maths.pdf",
                "Science" => "path/to/class9-science.pdf",
                "English" => "path/to/class9-english.pdf"
            ],
            "10" => [
                "Maths" => "path/to/class10-maths.pdf",
                "Science" => "path/to/class10-science.pdf",
                "English" => "path/to/class10-english.pdf"
            ]
        ];

        foreach ($ncert_books[$class] as $subject => $link) {
            echo "<li><a href='$link' class='text-indigo-600 hover:underline' download>$subject - Class $class</a></li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
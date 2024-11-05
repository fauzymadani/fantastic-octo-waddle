<?php

function saveFeedback($name, $feedback, $rating, $anonymous)
{
  $file = 'feedback.txt';
  $date = date('Y-m-d H:i:s');

  $name = $anonymous ? 'Anonim' : $name;

  $data = "Date: $date | Name: $name | Rating: $rating | Feedback: $feedback\n";

  file_put_contents($file, $data, FILE_APPEND);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $feedback = $_POST['feedback'] ?? '';
  $rating = $_POST['rating'] ?? '';
  $anonymous = isset($_POST['anonymous']);

  if (!empty($feedback)) {
    saveFeedback($name, $feedback, $rating, $anonymous);
    $message = "Terima kasih atas feedback Anda!";
  } else {
    $message = "Mohon masukkan feedback sebelum submit.";
  }
}

function displayFeedback()
{
  $file = 'feedback.txt';
  if (file_exists($file)) {
    $content = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($content as $line) {
      $parts = explode('|', $line);
      echo '<div class="feedback-entry">';
      echo '<div class="date">' . htmlspecialchars(trim($parts[0])) . '</div>';
      echo '<h3>' . htmlspecialchars(trim($parts[1])) . '</h3>';
      echo '<p class="rating">Rating: ' . htmlspecialchars(trim($parts[2])) . '</p>';
      echo '<p>' . htmlspecialchars(trim($parts[3])) . '</p>';
      echo '</div>';
    }
  } else {
    echo "<p>Belum ada feedback yang diterima.</p>";
  }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback atau Saran</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f9fc;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0;
      padding: 20px;
    }

    h1 {
      font-size: 2rem;
      color: #5a67d8;
      margin-bottom: 20px;
    }

    form {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 100%;
      max-width: 500px;
      margin-bottom: 20px;
      transition: box-shadow 0.3s;
    }

    form:hover {
      box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
    }

    label {
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 5px;
      margin-bottom: 15px;
      font-size: 1rem;
      background-color: #f0f4f8;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    select:focus,
    textarea:focus {
      border-color: #5a67d8;
      outline: none;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #5a67d8;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
      display: block;
      width: 100%;
    }

    button:hover {
      background-color: #4c51bf;
    }

    .message {
      font-size: 1rem;
      color: #48bb78;
      font-weight: bold;
      text-align: center;
      margin-top: 10px;
    }

    .feedback-list {
      width: 100%;
      max-width: 500px;
    }

    .feedback-entry {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
      padding: 15px;
      margin-bottom: 15px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .feedback-entry:hover {
      transform: scale(1.02);
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
    }

    .feedback-entry h3 {
      margin: 0 0 8px;
      font-size: 1.1rem;
      color: #333;
    }

    .feedback-entry .rating {
      color: #e53e3e;
      font-weight: bold;
    }

    .feedback-entry .date {
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 5px;
    }

    .feedback-entry p {
      margin: 5px 0;
      color: #555;
      line-height: 1.4;
    }
  </style>
</head>

<body>

  <h1>Feedback atau Saran</h1>

  <?php if (!empty($message)) : ?>
    <p class="message"><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>
  <a href="../index.php"><button>Go back</button></a>

  <form method="POST" action="">
    <label for="name">Nama (Opsional):</label>
    <input type="text" id="name" name="name" placeholder="Nama Anda" />

    <label for="feedback">Feedback:</label>
    <textarea id="feedback" name="feedback" rows="4" placeholder="Masukkan feedback Anda..." required></textarea>

    <label for="rating">Rating:</label>
    <select id="rating" name="rating" required>
      <option value="5">5 - Sangat Puas</option>
      <option value="4">4 - Puas</option>
      <option value="3">3 - Biasa Saja</option>
      <option value="2">2 - Kurang Puas</option>
      <option value="1">1 - Tidak Puas</option>
    </select>

    <label>
      <input type="checkbox" name="anonymous"> Kirim sebagai anonim
    </label><br><br>

    <button type="submit">Kirim Feedback</button>
  </form>

  <h2>Feedback Terbaru</h2>
  <div class="feedback-list">
    <?php displayFeedback(); ?>
  </div>

</body>

</html>

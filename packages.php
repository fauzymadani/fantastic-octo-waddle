<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Packages</title>
  <style>
    /* Root colors for dark and light modes */
    :root {
      --bg-color-light: #f4f4f4;
      --text-color-light: #333;
      --bg-color-dark: #1a1a1a;
      --text-color-dark: #f4f4f4;
      --accent-color: #3498db;
      --card-bg-light: #ffffff;
      --card-bg-dark: #333;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: var(--bg-color-light);
      color: var(--text-color-light);
      margin: 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: background-color 0.5s, color 0.5s;
    }

    /* Dark Mode Styles */
    body.dark-mode {
      background-color: var(--bg-color-dark);
      color: var(--text-color-dark);
    }

    h1 {
      color: var(--accent-color);
      font-size: 2.5em;
      margin-bottom: 20px;
      opacity: 0;
      animation: fadeIn 1s forwards;
    }

    /* Button for Dark Mode Toggle */
    .toggle-btn {
      cursor: pointer;
      border-radius: 0;
    }

    .toggle-btn:hover {
      background-color: #2980b9;
    }

    ul {
      list-style-type: none;
      padding: 0;
      max-width: 600px;
      margin: 20px auto;
      opacity: 0;
      animation: fadeInUp 1.2s forwards;
      animation-delay: 0.5s;
    }

    li {
      background: var(--card-bg-light);
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 15px;
      padding: 15px;
      text-align: center;
      font-size: 1.2em;
      transition: background-color 0.3s, transform 0.3s;
    }

    body.dark-mode li {
      background: var(--card-bg-dark);
    }

    li:hover {
      background-color: #e9ecef;
      transform: translateY(-5px);
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    body.dark-mode li:hover {
      background-color: #444;
    }

    a {
      color: var(--accent-color);
      text-decoration: none;
      transition: color 0.3s;
    }

    a:hover {
      color: #1a5276;
      text-decoration: underline;
    }

    h5 {
      text-align: center;
      margin-top: 20px;
      opacity: 0;
      animation: fadeIn 1.5s forwards;
    }

    /* Keyframe Animations */
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
  <script>
    // Dark Mode Toggle Function
    function toggleDarkMode() {
      document.body.classList.toggle("dark-mode");
      const modeText = document.body.classList.contains("dark-mode") ? "Light Mode" : "Dark Mode";
      document.querySelector(".toggle-btn").innerText = modeText;
    }
  </script>
</head>

<body>
  <h1>My Packages</h1>
  <button class="toggle-btn" onclick="toggleDarkMode()">Dark Mode</button>
  <h5><a href="index.php">back</a></h5>
  <ul>
    <li><a href="https://github.com/fauzymadani/data-validator">data-validator</a></li>
    <li><a href="https://github.com/fauzymadani/mousedetector">mouse detector</a></li>
    <li><a href="https://github.com/fauzymadani/Simple-port_scanner">port scanner</a></li>
  </ul>
</body>

</html>

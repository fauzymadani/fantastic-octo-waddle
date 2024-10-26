<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - Fauzy</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    .navbar {
      background: #ECECEC;
      border-bottom: 2px solid red;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
    }

    .logo img {
      vertical-align: middle;
    }

    .nav-links {
      list-style-type: none;
      display: flex;
      gap: 20px;
    }

    .nav-links li {
      display: inline;
    }

    .nav-links a {
      font-size: 16px;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    .search-container {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .search-container input[type="text"] {
      padding: 5px;
      font-size: 14px;
    }

    .search-container button {
      padding: 5px 10px;
      background-color: #fff;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .search-container button:hover {
      background-color: #f0f0f0;
    }

    .highlight {
      background-color: yellow;
    }

    .span1 {
      text-align: center;
      justify-content: center;
      margin-top: 10px;
    }




    .item p {
      max-width: 600px;
      margin-bottom: 15px;
      line-height: 1.6;
      text-align: center;
    }

    .about-content {
      text-align: center;
      max-width: 700px;
      margin: 0 auto;
    }

    .about-content h1 {
      font-size: 2.5em;
      margin-bottom: 20px;
    }

    .about-content p {
      font-size: 1.2em;
      line-height: 1.5;
      margin-top: 0;
    }

    .main-content {
      margin: 20px;
      text-align: center;
      justify-content: center;
    }

    .main-content .item p {
      text-align: center;
    }

    .main-content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin: 20px;
    }

    .item {
      flex: 1;
    }

    .item h1 {
      text-align: left;
      font-size: 2.5em;
      margin-bottom: 20px;
    }

    .extra-content {
      flex: 1;
      display: flex;
      justify-content: flex-end;
    }

    .extra-content .box {
      width: 200px;
      padding: 15px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
      text-align: center;
    }

    .header {
      margin-left: 22px;
    }
  </style>
  <script>
    function highlightText(element, input) {
      const text = element.textContent;
      const regex = new RegExp(`(${input})`, "gi");
      const highlightedText = text.replace(regex, `<span class="highlight">$1</span>`);
      element.innerHTML = highlightedText;
    }

    function searchContent() {
      const input = document.querySelector('.search-container input').value.toLowerCase();
      const items = document.querySelectorAll('.item');

      items.forEach(item => {
        const textElements = item.querySelectorAll('p, h1');
        item.style.display = 'none';
        textElements.forEach(element => {
          element.innerHTML = element.textContent;
        });

        let found = false;
        textElements.forEach(element => {
          const text = element.textContent.toLowerCase();
          if (text.includes(input)) {
            found = true;
            highlightText(element, input);
          }
        });

        if (found) {
          item.style.display = '';
        }
      });
    }
  </script>
</head>

<body>
  <div class="navbar">
    <div class="logo">
      <img src="https://www.debian.org/logos/openlogo-nd.svg" alt="Debian Logo" width="50" height="50">
    </div>
    <ul class="nav-links">
      <li><a href="index.php">home</a></li>
      <li><a href="./blog.php">Blog</a></li>
      <li><a href="./micronews.php">Micronews</a></li>
      <li><a href="./packages.php">my Packages</a></li>
      <li><a href="https://github.com/fauzymadani">my github</a></li>
      <li><a href="https://gitlab.com/fauzymadani">my gitlab</a></li>
      <li><a href="./contactpage.php">contact me</a></li>
      <li><a href="./about.php">About Me</a></li>
    </ul>
    <div class="search-container">
      <input type="text" placeholder="Search" oninput="searchContent()">
      <button onclick="searchContent()">Search</button>
    </div>
  </div>

  <span class="span1 text">
    <p class="text">this website is inspired by <a href="https://debian.org">debian page</a></p>
  </span>

  <div class="main-content">
    <div class="item">
      <h1 class="header">about me</h1>
      <p>Hello! I'm Fauzy Madani, a passionate web developer from Indonesia. I enjoy creating and experimenting with web development projects, focusing on building unique user experiences and functionality. This website reflects my interest in simplicity, minimalism, and Debian-inspired aesthetics.</p>
    </div>
    <div class="extra-content">
      <!-- Isi kontainer kotak baru -->
      <div class="box">
        <span>📢</span>
        <p>don't forget to see my github page <a href="https://github.com/fauzymadani/">here</a></p>
      </div>
    </div>
  </div>


  <footer style="border-top: 1px solid #e1e4e8; padding: 10px 20px; font-size: 0.9em; color: #333; background-color: #f6f6f6;">
    <p>This page is also available in the following languages:</p>
    <select style="padding: 5px; margin-bottom: 10px;">
      <option>Select your language</option>
      <option value="en">English</option>
      <option value="id">Indonesian</option>
    </select>
    <p><a href="#">How to set the default document language</a></p>
    <p>
      See our <a href="./contactpage.php">contact page</a> to get in touch. Web site source code is <a href="https://github.com/fauzymadani/fantastic-octo-waddle">available</a>.
    </p>
    <hr>
    <p style="margin-top: 10px;">
      <?php
      echo "Last Modified: " . date("D, M j H:i:s T Y", filemtime(__FILE__));
      ?>
      &nbsp;&nbsp;&nbsp; Last Built: <?php echo date("D, M j H:i:s T Y"); ?>
    </p>
    <p>
      Copyright © 2024 <a href="#">SPI</a> and others; See <a href="https://opensource.org/license/mit">license terms</a><br>
      this website is a registered/licensed under the <a href="https://opensource.org/license/mit">MIT License.</a>
    </p>
    <strong>don't like this website style? see the list of my website <a href="list.php">here</a></strong>
  </footer>
</body>

</html>

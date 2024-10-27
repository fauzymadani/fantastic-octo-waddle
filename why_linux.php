<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Why Linux - Fauzy</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .highlight {
      background-color: yellow;
    }

    .main,
    contentartc {
      padding: 20px;
      margin: 20px;
    }

    footer {
      border-top: 1px solid #e1e4e8;
      padding: 20px;
      font-size: 0.9em;
      color: #333;
      background-color: #f6f6f6;
    }

    footer select {
      padding: 5px;
      margin-bottom: 10px;
    }

    .main {
      padding: 20px;
    }

    .contentartc {
      margin-bottom: 60px;

    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0px;
    }

    h1 {
      font-size: 2em;
    }

    .contact-list {
      list-style: none;
      padding: 0;
      margin: 0;
      margin-left: 20px;
    }

    .contact-list li {
      margin: 10px 0;
      padding-bottom: 5px;
      border-bottom: 1px dotted #333;
    }

    .contact-list li a {
      font-size: 14px;
    }

    .contact-list li a:hover {
      color: #007BFF;
    }

    ul {
      width: 700px;
    }

    .howto {
      font-weight: 300;
      margin-left: 20px;
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

    .highlight {
      background-color: yellow;
    }

    .main-content {
      margin-top: 50px;
      padding-top: 20px;
    }

    .content .list h1 {
      font-weight: 300;
      margin-bottom: 20px;
      font-size: 30px;
    }

    .content .list p {
      font-size: 15px;
    }

    .list {
      margin: 20px;
    }

    strong {
      font-weight: 300;
    }

    h1 {
      font-weight: 300;
    }
  </style>
  <link rel="stylesheet" href="style.css">

  <script>
    function highlightText(element, input) {
      const text = element.textContent;
      const regex = new RegExp(`(${input})`, "gi");
      const highlightedText = text.replace(regex, `<span class="highlight">$1</span>`);
      element.innerHTML = highlightedText;
    }

    function searchContent() {
      const input = document.querySelector('.search-container input').value.toLowerCase();
      const contentElements = document.querySelectorAll('.main p, .main h2'); // Update class selector here

      contentElements.forEach(element => {
        element.innerHTML = element.textContent;
        if (element.textContent.toLowerCase().includes(input)) {
          highlightText(element, input);
        }
      });
    }

    function changeLanguage(language) {
      const translations = {
        en: {
          title: "Why I Love Linux",
          description: "Linux offers freedom, security, and community-driven development that I highly appreciate.",
          benefits: "Benefits of Linux",
          security: "Strong security measures and open-source nature",
          customization: "Highly customizable, fitting all needs",
          community: "Large and active community support"
        },
        id: {
          title: "Mengapa Saya Menyukai Linux",
          description: "Linux menawarkan kebebasan, keamanan, dan pengembangan berbasis komunitas yang sangat saya hargai.",
          benefits: "Keuntungan Linux",
          security: "Tindakan keamanan yang kuat dan sifat sumber terbuka",
          customization: "Sangat dapat disesuaikan, cocok untuk semua kebutuhan",
          community: "Dukungan komunitas yang besar dan aktif"
        }
      };

      const elements = document.querySelectorAll('[data-translate]');
      elements.forEach(element => {
        const key = element.getAttribute('data-translate');
        element.textContent = translations[language][key];
      });
    }

    document.addEventListener("DOMContentLoaded", () => {
      const languageSelect = document.querySelector("select");
      languageSelect.addEventListener("change", function() {
        changeLanguage(this.value);
      });
    });
  </script>
</head>

<body>
  <!-- Navbar -->
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
    </ul>
    <div class="search-container">
      <input type="text" placeholder="Search" oninput="searchContent()">
      <button onclick="searchContent()">Search</button>
    </div>
  </div>

  <h1 class="howto text">Index of why linux</h1>
  <div class="content-container">
    <!-- Daftar Kontak -->
    <ul class="contact-list text" id="contact-list">
      <li><a href="#why" class="text">Why i love Linux?</a></li>
      <li><a href="#benefits" class="text">Benefits of Linux</a></li>
      <li><a href="#customizable" class="text">Very customizable</a></li>
      <li><a href="#unixporn" class="text">r/unixporn</a></li>
      <li><a href="#freedom" class="text">freedom, free</a></li>
      <li><a href="#stable" class="text">stable</a></li>
    </ul>

    <!-- Main Content -->
    <div class="main">
      <div class="contentartc">
        <h1 data-translate="title" id="why">Why I Love Linux</h1>
        <p data-translate="description">Linux offers freedom, security, and community-driven development that I highly appreciate.. Linux is well-known for its compatibility and integration with various hardware and software platforms. This makes it ideal for server use; you can deploy it in almost any environment. It is also possible to install Linux on multiple hardware types, from laptops to the latest servers.</p>
      </div>
      <div class="contentartc">
        <h1 data-translate="benefits" id="benefits">Benefits of Linux</h1>
        <p data-translate="security">Strong security measures and open-source nature</p>
        <p data-translate="customization">Highly customizable, fitting all needs</p>
        <p data-translate="community">Large and active community support</p>
      </div>

      <div class="contentartc">
        <h1 id="customizable">customizable</h1>
        <p>Customizing your Linux desktop environment allows you to create a personalized and efficient workspace. By exploring different themes, icons, and layout options, you can make your Linux experience truly unique.</p>
        <div class="exampleimage">
          <img src="images/download.jpeg">
          <img src="data:image/jpeg;base64,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">
          <a href="list-image.php">see more linux custom image here</a>
        </div>
      </div>

    </div>
    <?php
    $counterFile = 'counter.txt';
    if (!file_exists($counterFile)) {
      file_put_contents($counterFile, '0');
    }

    $visitCount = file_get_contents($counterFile);
    $visitCount++;
    file_put_contents($counterFile, $visitCount);


    $lastModified = date("D, M j H:i:s T Y", filemtime(__FILE__));
    ?>
    <footer style="border-top: 1px solid #e1e4e8; padding: 20px; font-size: 0.9em; color: #333; background-color: #f6f6f6;">
      <p>This page is also available in the following languages:</p>
      <select style="padding: 5px; margin-bottom: 10px;">
        <option>Select your language</option>
        <option value="en">English</option>
        <option value="id">Indonesian</option>
      </select>
      <p><a href="#">How to set the default document language</a></p>
      <p>
        See our <a href="./contactpage.php">contact page</a> to get in touch. Website source code is <a href="https://github.com/fauzymadani/fantastic-octo-waddle">available</a>.
      </p>
      <hr>
      <p style="margin-top: 15px;">
        <?php
        echo "Last Modified: " . $lastModified;
        ?>
        &nbsp;&nbsp;&nbsp; Last Built: Mon, Oct 21 11:26:29 UTC 2024
      </p>
      <p>Page Views: <?php echo $visitCount; ?></p>
      <p>
        Copyright © 2024 <a href="#">SPI</a> and others; See <a href="https://opensource.org/license/mit">license terms</a><br>
        This website is registered/licensed under the <a href="https://opensource.org/license/mit">MIT License</a>.
      </p>
      <strong>Don't like this website style? See the list of my website <a href="list.php">here</a></strong>
    </footer>

</body>

</html>

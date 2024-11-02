<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="fauzy madani">
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
          <a href="list-image.php">see more linux custom image here</a>
        </div>
        <div class="contentartc">
          <h1 id="unixporn">r/unixporn</h1>
          <p> It is really just a subreddit where people post there desktop layout. For the most part it is usually just a nice wallpaper with a Window manager and a Conky set up. Then they use neofetch and post one of the dot files they have.

            But, it is just a place where people show their custom desktops. Because you can modify most everything in linux. /p>
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

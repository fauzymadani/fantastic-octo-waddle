<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Philosophy</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .highlight {
      background-color: yellow;
    }

    .span1 {
      text-align: center;
      justify-content: center;
      margin-top: 10px;
    }

    .philosophy-container {
      position: relative;
      border: 2px solid #333;
      padding: 20px;
      margin: 20px auto;
      width: 80%;
      border-radius: 8px;
      background-color: #f9f9f9;
    }

    .philosophy-container::before {
      content: '';
      position: absolute;
      top: 10px;
      left: -20px;
      border-width: 10px;
      border-style: solid;
      border-color: transparent #333 transparent transparent;
    }

    a {
      text-decoration: underline;
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
        const textElements = item.querySelectorAll('p, h3');
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

    function changeLanguage(language) {
      const translations = {
        en: {
          philosophyHeader: "My Philosophy as a Web Developer",
          philosophyDesc: "Passionate about open-source and Linux, contributing to a free and accessible digital future.",
          greeting: "Welcome to My Philosophy",
        },
        id: {
          philosophyHeader: "Filosofi Saya sebagai Pengembang Web",
          philosophyDesc: "Tertarik pada sumber terbuka dan Linux, berkontribusi pada masa depan digital yang bebas dan dapat diakses.",
          greeting: "Selamat Datang di Filosofi Saya",
        }
      };

      const textElements = document.querySelectorAll('[data-translate]');
      textElements.forEach(element => {
        const key = element.getAttribute('data-translate');
        element.textContent = translations[language][key];
      });
    }

    document.addEventListener("DOMContentLoaded", () => {
      const select = document.querySelector("select");
      select.addEventListener("change", function() {
        const language = this.value;
        changeLanguage(language);
      });
    });
  </script>
</head>

<body>
  <div class="navbar">
    <div class="logo">
      <img src="https://www.debian.org/logos/openlogo-nd.svg" alt="Debian Logo" width="50" height="50">
    </div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="./philosophy.php">Philosophy</a></li>
      <li><a href="https://github.com/fauzymadani">GitHub</a></li>
      <li><a href="https://gitlab.com/fauzymadani">GitLab</a></li>
      <li><a href="./contactpage.php">Contact</a></li>
    </ul>
    <div class="search-container">
      <input type="text" placeholder="Search" oninput="searchContent()">
      <button onclick="searchContent()">Search</button>
    </div>
  </div>

  <span class="span1 text">
    <p class="text">this website is inspired by <a href="https://debian.org">debian page</a></p>
  </span>

  <div class="main-content" align="center">
    <h1 data-translate="greeting">Welcome to My Philosophy</h1>
    <p data-translate="philosophyDesc">Passionate about open-source and Linux, contributing to a free and accessible digital future.</p>
  </div>

  <div class="container">
    <div class="column">
      <div class="item" id="philosophy">
        <div class="text">
          <h3 data-translate="philosophyHeader">My Philosophy as a Web Developer</h3>
          <p>
            I believe in the power of open-source software to create a more inclusive and democratic digital landscape. With a deep passion for Linux and open-source tools, I strive to contribute to projects that enable freedom, flexibility, and innovation. Being part of this community drives me to constantly learn, improve, and share knowledge with others.
          </p>
          <a href="#signed">view signed version.</a>
        </div>
      </div>
    </div>
  </div>

  <div class="philosophy-container">
    <h2 id="signed">PGP signed message version</h2>
    <pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA512

I believe in the power of open-source software to create a more inclusive and democratic digital landscape.
With a deep passion for Linux and open-source tools, I strive to contribute to projects that enable freedom,
flexibility, and innovation.
Being part of this community drives me to constantly learn, improve, and share knowledge with others.
-----BEGIN PGP SIGNATURE-----

iQIzBAEBCgAdFiEEZFSHdhPyF4ApFuH4L0pyCwpIvzwFAmcdlJAACgkQL0pyCwpI
vzwgSw//VLnt5GHiPTPuhxCfWTyVw5Oop8TT3SC+WNqPajbUXTIe1elg7HQ5bGah
Q1FWE2ujpHpOH94GJT7tzT1N9WVdiR3zwHRBotK9y+C/xssoFMCRtPRIZf1rV4EN
lC4359qEYk92iqjwnJ89cXoTx6RGslOsd9yVqCkZYzGpH9+cfxUb6rRstsmU5s/v
SFQtsfoWbWdPcbSX75FtEC7tKj5sYm/IEQnnmdkhSguV6DAITCNCMuz9kQDsaUAd
+9TJak0LY3A88GRrtbB3mRFtWLmaEPs/wsAg9Kjw6VeVf/ioPdFKqz6VErK4Iyzn
oldNw1IIm7R0CPWi/BMbhUg2pGi2NByvG4FpmEZd5i6MNEkgV/k8THrCHn/77PTq
nDOjrzkYiRQ2lkGbVkho6YhygKlHnQYGyntLowbbu5/nglno4D6YRrDvpTaj68Nq
FgXMH6gPUIlkzzCvnJUGLWDUDgpmoYTD+wf1QspPqMDtUTOUBtGkjqUiYVeW0gnZ
FZmBOdHEcmp2rb7QX8xFWkeIiQ+k84ueKFe9WHMWX9XKvjISacG1GK0I7XoSu7+t
0VQ/AhwD1gkdnc39m3U/rzbjb9cCdCBlTKSrjVeWixM/oEPltUvt10lAOdd2XK9w
FPN7Dhr9WdS3IiAd46pf1uPMIio82cU50ojx5DzXqt6aFQmCehs=
=9Rko
-----END PGP SIGNATURE-----


      </pre>
  </div>


  <footer style="border-top: 1px solid #e1e4e8; padding: 20px; font-size: 0.9em; color: #333; background-color: #f6f6f6;">
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
    <p style="margin-top: 15px;">
      <?php
      echo "Last Modified: " . date("D, M j H:i:s T Y", filemtime(__FILE__));
      ?>
      &nbsp;&nbsp;&nbsp; Last Built: Mon, Oct 21 11:26:29 UTC 2024
    </p>
    <p>
      Copyright © 2024 <a href="#">SPI</a> and others; See <a href="https://opensource.org/license/mit">license terms</a><br>
      this website is a registered/licensed under the <a href="https://opensource.org/license/mit">MIT License.</a>
    </p>
    <strong>don't like this website style? see the list of my website <a href="list.php">here</a></strong>
  </footer>
</body>

</html>

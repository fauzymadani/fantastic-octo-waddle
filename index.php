<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fauzy</title>
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

    pre {
      border: 1px solid black;
      display: inline-block;
      margin-left: 20px;
      border: 1px solid black;
      padding: 10px;
      background-color: #f9f9f9;
      margin-right: 20px;
    }

    .new-container {
      border: 1px solid #ccc;
      padding: 10px;
      background-color: #f0f0f0;
      width: 300px;
      /* Fixed width for the additional information container */
      margin-left: 10px;
    }

    .new-container h2 {
      margin-bottom: 10px;
    }

    .new-container pre {
      border: 1px solid black;
      /* font-family: 'JetBrains Mono', monospace;*/
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
          greeting: "Hello, visitor!",
          people: "About me",
          peopleDesc: "Learn More about my work",
          philosophy: "My Philosophy",
          philosophyDesc: "Why do it, and how do it",
          contribute: "Why Linux?",
          contributeDesc: "What makes Linux my go-to OS.",
          moreLeft: "Support and Documentation",
          moreLeftDesc: "Resources to help you get started with my projects.",
          whyDebian: "Why Debian",
          whyDebianDesc: "What makes Debian special",
          userSupport: "User Support",
          userSupportDesc: "Getting help and documentation",
          securityUpdates: "Security Updates",
          securityUpdatesDesc: "Debian Security Advisories (DSA)",
          moreRight: "More...",
          moreRightDesc: "Further links to downloads and software",
          lastModified: "Last Modified",
          lastBuilt: "Last Built"
        },
        id: {
          greeting: "Halo, pengunjung!",
          people: "Tentang saya",
          peopleDesc: "Pelajari lebih lanjut tentang saya",
          philosophy: "Filosofi Saya",
          philosophyDesc: "Mengapa saya melakukannya, dan bagaimana saya melakukannya",
          contribute: "Kenapa harus linux?",
          contributeDesc: "Mengapa linux menjadi OS utama saya",
          moreLeft: "Support dan dokumentsai",
          moreLeftDesc: "Informasi tambahan tentang package saya dan project saya",
          whyDebian: "Mengapa Debian",
          whyDebianDesc: "Apa yang membuat Debian istimewa",
          userSupport: "Dukungan Pengguna",
          userSupportDesc: "Mendapatkan bantuan dan dokumentasi",
          securityUpdates: "Pembaruan Keamanan",
          securityUpdatesDesc: "Pemberitahuan Keamanan Debian (DSA)",
          moreRight: "Lebih banyak...",
          moreRightDesc: "Tautan lebih lanjut ke unduhan dan perangkat lunak",
          lastModified: "Terakhir Dimodifikasi",
          lastBuilt: "Terakhir Dibangun"
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
  <span class="span1 text">
    <p class="text">this website is inspired by <a href="https://debian.org">debian page</a></p>

  </span>
  <div class="main-content" align="center">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2NNtDOYpsHAThbo21W_8oK-hSVWiLpWdTjA&s" alt="">
    <div class="text">
      <h1 data-translate="greeting">Hello, visitor!</h1>
      <pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA512

that's not my photo. i'm Fauzy Madani by the way.
a hyper active and passionate Web developer from indonesia.
i know this is not a good website, but i like this style.
-----BEGIN PGP SIGNATURE-----

iQIzBAEBCgAdFiEEZFSHdhPyF4ApFuH4L0pyCwpIvzwFAmccqaIACgkQL0pyCwpI
vzz+BQ//TUoJ8BvNPcYySIQfeezSnxoaBp80QO/AoXzRsd9BLKFA5xYOC6HECLkb
2tEydwSh/lwRzk+DJfkPv/o+Io2hMRss4Qeu7CbJmqL83PrDBBZxEVHKImcT6CJw
JtvssU3MjTvArlWtitHFhOBM+lJ0pkpD7cUHDAw9+/InP1LAKIagdr0DZDJ5UMh+
ioqI+NSs+li1EhvbYWX904/tsIepjio9hQEvC/7iim+MCAKlegPp49NUkInRl0Zf
DDpbBHOr+/mh8pNfreRY8Fx++BLw5qLAhFCU73mKMSJ6ZT0KxrI5TkgbJS5TLsFJ
xjlX0RjHVkBwP1/BurbalWhqAoyc+aib4oHl9PSe1OMniUT7SBM/PSK6VG5QLS5Z
ue3AQBpytuUdjqINW0XBcwkFN3FLxBHWC+iCND6D4EGHqoQKcz7m/LJStPzC3jRx
FJCC1sx6YWsnIRSJ+oG3FAVdvVDyxYk0M5R0RHqD6ZJKofa2eWnSi0zvKuSpf8ig
8Jzbp33hqLmP85YPdp8iGohozD011lWrtWpOQOmUhwYLfqeU+y20NjY3IWyuKhpS
WTgP6xZ+udUepqDHOj4H8JUN7jPqEZ5C2kr66ThaxydCX5z2x6Wrud63JGmVJkXt
9LgTocJBFz1hO9rEIl9g3cDyT+cYqN/rxgNzZbhP2XVcdeiBkqY=
=hxjL
-----END PGP SIGNATURE-----

      </pre>
    </div>
  </div>
  <div class="new-container">
    <h2>🔔 Additional Information</h2>
    <h4>"Talk is cheap. Show me the code."</h4>
    <strong>~ Linus torvald</strong><br>
    <br>
    <p>Feel free to check out my list of <a href="./list.php">Website</a> if you're don't like this tyle of website</p>
  </div>

  <div class="container">
    <div class="column left-column">
      <div class="item" id="people">
        <div class="text">
          <h3><a href="./about.php" data-translate="people">About me</a></h3>
          <p data-translate="peopleDesc">Learn more about my work</p>
        </div>
      </div>
      <div class="item" id="philosophy">
        <div class="text">
          <h3><a href="./philosopy.php" data-translate="philosophy">My Philosophy</a></h3>
          <p data-translate="philosophyDesc">Why do it, and how to do it</p>
        </div>
      </div>
      <div class="item" id="contribute">
        <div class="text">
          <h3><a href="./why_linux.php" data-translate="contribute">Why Linux</a></h3>
          <p data-translate="contributeDesc">What makes Linux my go-to OS.</p>
        </div>
      </div>
      <div class="item" id="more-left">
        <div class="text">
          <h3><a href="#" data-translate="moreLeft">Support & Documentation</a></h3>
          <p data-translate="moreLeftDesc">Resources to help you get started with my projects.</p>
        </div>
      </div>
    </div>
    <div class="column right-column">
      <div class="item" id="why-debian">
        <div class="text">
          <h3><a href="#" data-translate="whyDebian">Why Debian</a></h3>
          <p data-translate="whyDebianDesc">What makes Debian special</p>
        </div>
      </div>
      <div class="item" id="user-support">
        <div class="text">
          <h3><a href="#" data-translate="userSupport">User Support</a></h3>
          <p data-translate="userSupportDesc">Getting help and documentation</p>
        </div>
      </div>
      <div class="item" id="security-updates">
        <div class="text">
          <h3><a href="#" data-translate="securityUpdates">Security Updates</a></h3>
          <p data-translate="securityUpdatesDesc">Debian Security Advisories (DSA)</p>
        </div>
      </div>
      <div class="item" id="more-right">
        <div class="text">
          <h3><a href="#" data-translate="moreRight">More...</a></h3>
          <p data-translate="moreRightDesc">Further links to downloads and software</p>
        </div>
      </div>
    </div>
  </div>

  <footer style="border-top: 1px solid #e1e4e8; padding: 20px; font-size: 0.9em; color: #333; background-color: #f6f6f6;">
    <p>This page is also available in the following languages:</p>
    <select style="padding: 5px; margin-bottom: 10px;">
      <option>Select your language</option>
      <option value="en">English</option>
      <option value="id">Indonesian</option>

      <!-- Tambahkan opsi bahasa lain di sini jika diperlukan -->
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

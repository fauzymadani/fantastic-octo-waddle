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

    // Fungsi untuk mengubah bahasa
    function changeLanguage(language) {
      const translations = {
        en: {
          greeting: "Hello, visitor!",
          people: "People",
          peopleDesc: "Who we are and what we do",
          philosophy: "Our Philosophy",
          philosophyDesc: "Why we do it, and how we do it",
          contribute: "Get Involved, Contribute",
          contributeDesc: "How you can join us!",
          moreLeft: "More...",
          moreLeftDesc: "Additional information about the Debian community",
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
          people: "Orang-orang",
          peopleDesc: "Siapa kami dan apa yang kami lakukan",
          philosophy: "Filosofi Kami",
          philosophyDesc: "Mengapa kami melakukannya, dan bagaimana kami melakukannya",
          contribute: "Terlibat, Berkontribusi",
          contributeDesc: "Bagaimana Anda bisa bergabung dengan kami!",
          moreLeft: "Lebih banyak...",
          moreLeftDesc: "Informasi tambahan tentang komunitas Debian",
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
      <p>-----BEGIN PGP SIGNED MESSAGE-----<br>
        Hash: SHA512<br>

        that's not my photo. i'm Fauzy Madani by the way.<br>
        a hyper active and passionate Web developer from indonesia.<br>
        i know this is not a good website, but i like this style.<br>
        -----BEGIN PGP SIGNATURE-----<br>
        <br>
        iQIzBAEBCgAdFiEEZFSHdhPyF4ApFuH4L0pyCwpIvzwFAmcZ/SEACgkQL0pyCwpI<br>
        vzxtPA/+NInzySjxBYs7X2vHkKZRcqEsjSGmv26FPjkTZGU6ulQmlmmrXDsTnsDZ<br>
        0GbnIAZPxwR78KwLuNGl5kzUM7mhsTHpSj91KFJuSLlKJ6us1SnAx9thEFRwSkRH<br>
        vcW1S4K/EUkOSdOrZAOkaVZo+3z85A0wNF/Vq1iMYvj6oQnv5mtBxiMsag5wRxlq<br>
        y9ZDCHRNAOXqwY//9fMjjFh6JAmucdeMyqne/f505NmfQiCOOJGi4pOP5o3qWQvo<br>
        ssEXpNO4k+EmKYT/eeQnmllaFqFpqKkPe7n5GSuUv5QSicOekYS/8tC5upb98mMG<br>
        8k0srmN6yAcZNAURraTPtuXJEmuWb8lufVANtF9sq7txgR39A9/vUqHw0/XFMdeU<br>
        XYZBCfR5kmGG4GyoWkMam84/arg8NHFlxRkqpLS29i541M4XSDyqZVKACLzLvABF<br>
        tEgjL00MdPlM6q/LFwSuK+2+aYQVbbMny9P4QTSQ9RLxhj9tDUwxsCQPiYnLaKBT<br>
        Lnf+sAQvaJYGm29MQcj/kIr9IT+752C3HFVD1oBQw/+rFiLlCTBYP/eNDkNNGZ6n<br>
        rpDLO+ZmxNR5DSPgkwRaJQTlhrG0/hc1RLTLFFvet5fU83XP4JUePkxTKf4KTT75<br>
        NzU0FRgn178cjGBL602Bi3qVLh25PwlEqVdF5/JasclmKkd/vwc=<br>
        =3DmY<br>
        -----END PGP SIGNATURE-----<br>
      </p>
    </div>
  </div>

  <div class="container">
    <div class="column left-column">
      <div class="item" id="people">
        <div class="text">
          <h3><a href="#" data-translate="people">People</a></h3>
          <p data-translate="peopleDesc">Who we are and what we do</p>
        </div>
      </div>
      <div class="item" id="philosophy">
        <div class="text">
          <h3><a href="#" data-translate="philosophy">Our Philosophy</a></h3>
          <p data-translate="philosophyDesc">Why we do it, and how we do it</p>
        </div>
      </div>
      <div class="item" id="contribute">
        <div class="text">
          <h3><a href="#" data-translate="contribute">Get Involved, Contribute</a></h3>
          <p data-translate="contributeDesc">How you can join us!</p>
        </div>
      </div>
      <div class="item" id="more-left">
        <div class="text">
          <h3><a href="#" data-translate="moreLeft">More...</a></h3>
          <p data-translate="moreLeftDesc">Additional information about the Debian community</p>
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
  </footer>
</body>

</html>

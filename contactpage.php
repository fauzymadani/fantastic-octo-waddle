<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
  <style>
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

    .contactme {
      margin: 30px;
      display: inline-block;
    }

    .contactme a {
      margin: 20px;
    }

    .contactme img {
      height: 20px;
    }

    .pgpkey {
      display: inline-block;
      margin-left: 20px;
      border: 1px solid black;
      padding: 10px;
      background-color: #f9f9f9;
      margin-right: 20px;
    }

    .pgpkey i {
      cursor: pointer;
    }

    .pgpkey-container {
      display: flex;

      /* align-items: flex-start;*/

      margin: 20px;

    }


    .new-container {
      border: 1px solid #ccc;
      padding: 10px;
      background-color: #f0f0f0;
      width: 300px;
      /* Fixed width for the additional information container */
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
    function copyToClipboard() {
      const pgpKeyText = document.getElementById("pgp-key").innerText;
      navigator.clipboard.writeText(pgpKeyText).then(() => {
        alert("PGP key copied to clipboard!");
      }).catch(err => {
        console.error("Could not copy text: ", err);
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
      <li><a href="./commit.php">commit log</a></li>
    </ul>
    <div class="search-container">
      <input type="text" placeholder="Search" oninput="searchContent()">
      <button onclick="searchContent()">Search</button>
    </div>
  </div>

  <div class="main-content text">
    <h1 class="howto text">How to contact me</h1>
    <div class="content-container">
      <!-- Daftar Kontak -->
      <ul class="contact-list text" id="contact-list">
        <li><a href="#general" class="text">General Information</a></li>
        <li><a href="#github" class="text">Using GitHub</a></li>
        <li><a href="#email" class="text">Email</a></li>
        <li><a href="#report" class="text">Reporting Problems in Packages</a></li>
        <li><a href="#development" class="text">Package Development</a></li>
        <li><a href="#harassment" class="text">Harassment Issues</a></li>
      </ul>

      <!-- Kontainer Baru di Samping Contact List -->
      <div class="new-container">
        <h2>🔔 Additional Information</h2>
        <h4>"Talk is cheap. Show me the code."</h4>
        <strong>~ Linus torvald</strong><br>
        <br>
        <p>Feel free to check out my list of <a href="./list.php">Website</a> if you're don't like this tyle of website</p>
      </div>
    </div>

    <div class="content">
      <div class="list text">
        <h1 class="text" id="general">🔗 General Information</h1>
        <p class="text">For general inquiries about my organization, its mission, and the various services we offer, this is the best place to start. Whether you are curious about our history, want to understand our goals, or have questions about how we operate, our team is here to help. If you are unsure which category your question falls under, feel free to reach out here, and we will direct you to the appropriate resources or team member</p>
      </div>
      <div class="list text">
        <h1 class="text" id="github">🔗 Using GitHub</h1>
        <p class="text">If you are new to GitHub or looking to contribute to our open-source projects, we are here to assist you. From setting up your GitHub account and creating repositories to learning how to fork projects, submit pull requests, or resolve merge conflicts, we provide detailed guidance. Whether you're a beginner looking for help with basic commands or an advanced user seeking collaboration tips, our support team can answer your questions about GitHub workflows and best practices.</p>
      </div>
      <div class="list text">
        <h1 class="text" id="email">🔗 Email</h1>
        <p class="text">For those who prefer direct communication, sending us an email is a great option. Whether you're contacting us for technical support, partnership opportunities, or general feedback, this channel allows for more personalized assistance. We aim to respond to all emails within 48 hours, and we strive to address your concerns or inquiries as thoroughly as possible. Please make sure to provide clear details in your email to help us assist you more effectively.</p>
      </div>
      <div class="list text">
        <h1 class="text" id="report">🔗 Reporting Problems in Packages</h1>
        <p class="text">If you've encountered a bug or an issue with one of our software packages, please report it here. We highly value user feedback as it helps us improve the quality and reliability of the packages we offer. In your report, make sure to include as much detail as possible, such as the version of the package you are using, the specific issue you encountered, steps to reproduce the bug, and any error messages. This information will assist our development team in identifying and fixing the problem promptly.</p>
      </div>
      <div class="list text">
        <h1 class="text" id="development">🔗 Package Development</h1>
        <p class="text">If you're interested in getting involved in the development of our software packages, we welcome your contributions. Whether you're a developer looking to submit code, a tester providing feedback, or someone suggesting new features, there's a place for you in our community. Our development guide includes information on setting up your development environment, coding standards, submitting patches, and using version control tools like Git. Join us in shaping the future of open-source software by contributing your skills and expertise.</p>
      </div>
      <div class="list text">
        <h1 class="text" id="problems">🔗 Problems with My Packages</h1>
        <p class="text">We understand that sometimes users may run into issues with packages they’ve installed or are maintaining themselves. This section provides troubleshooting tips, common error fixes, and guidance on how to ensure compatibility with other packages. If you're having difficulty installing, configuring, or updating your packages, or if dependencies are causing issues, our support team can help you resolve these problems. We also provide detailed documentation and a forum where users can share solutions to common package problems.</p>
      </div>
      <div class="list text">
        <h1 class="text" id="harassment">🔗 Harassment Issues</h1>
        <p class="text">We are committed to maintaining a respectful, safe, and harassment-free environment for all our contributors and users. If you experience or witness any form of harassment, discrimination, or abusive behavior, we urge you to report it immediately. Our team takes all complaints seriously and investigates them with confidentiality and care. We have strict codes of conduct in place to ensure that everyone feels welcome and valued in our community. If you feel uncomfortable or threatened, do not hesitate to reach out, and we will take the necessary steps to address the situation.</p>
      </div>
      <div class="list text">
        <h1 class="text" id="howtocontact">🔗 List of my social media</h1>

      </div>
      <!-- Add other list items as necessary -->
      <div class="contactme">
        <!-- Email -->
        <a href="mailto:fauzymadani3@gmail.com">
          <i class="fas fa-envelope"></i> Email
        </a>

        <!-- GitHub -->
        <a href="https://github.com/fauzymadani" target="_blank">
          <i class="fab fa-github"></i> GitHub
        </a>

        <!-- GitLab -->
        <a href="https://gitlab.com/fauzymadani" target="_blank">
          <i class="fab fa-gitlab"></i> GitLab
        </a>

        <a href="./key/fauzy_0x0A48BF3C_public.asc" target="_blank" download="./key/fauzy_0x0A48BF3C_public.asc">
          <i class="fas fa-lock"></i> Pgp public key
        </a>

        <a href="https://packagist.org/packages/fauzy/">
          <img src="data:image/png;base64,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">packagist
        </a>

      </div>

    </div>
    <div class="pgpkey-container">
      <div class="pgpkey">
        <pre id="pgp-key">
        -----BEGIN PGP PUBLIC KEY BLOCK-----

mQINBGbuGycBEACdLiale6UEgrYdUxW60AtkZvkisz9wReeD+x5dm9K/ghFymAOd
GMri8NebblUiktw/Cwx29JXZ80lG2PBzkb2NNgXuRKqYP+X2Wahou2Z/4lDxL8tS
27T3FQ4AkQz1g6AUiTZe0M3YIIQmo8nktm3rJYwmXokVJ5Hb7ZUcjB5Sim8Y2JZE
n/WC3b6oQ4Q7VjEyonkxYzt+LaYbebO4RgTAQOKaqx5PeJVCeVADKVnuSaithU4K
sQnq476vITsVs15ckozj6ivKVXhJpBiZ2ijr1d+1lTPEx5TeE62nPmWkevQ2vjbd
/aKEM3P+KQ92IenIBSvlDnipouy8RTyuvPthcHb4545zHPVaWjz9ycERUUtzucGI
+pE24C749q2JD8BCIGCoAmz/vknc1PBa/Xv6ofHzK5heSUW204YVHqSJOPdxP5XF
cq8dEPH0LzwW5XVa4mQ4wyDeGRC4tGqOu5BMOESCPCnZi51I0f8WTHcda6xwJFGx
c/w+tQD0VHhH19wLCSiWLU//Axl0US+18rJpV6UoqHXS1idt6giKz6KdybFpFc/c
d2YkJbwghwS8tNUfm05XdfFRwJgbLVcEUUh3jzAGzSTuen+eSGz0wb2gPot2+QnJ
t1jvvkaIIs1vlWo8rH3dpvJZqJ25eQxBS7ExVoPmtnx1kwmNbI6GzRZPowARAQAB
tCdmYXV6eSA8a2VwZXJsdWFuc2Vrb2xhaGZhdXp5QGdtYWlsLmNvbT6JAk4EEwEK
ADgWIQRkVId2E/IXgCkW4fgvSnILCki/PAUCZu4bJwIbAwULCQgHAgYVCgkICwIE
FgIDAQIeAQIXgAAKCRAvSnILCki/PImaD/9/jf11cytmMg6hn7628uJXoaLRrM/+
ZPFgSZ7PP/z23bMFeHe1LwbTIsW6B206y+Aet7JKJo63iQVKTjM6ay71u4RTCUpQ
dgCJescKmT1bs08nFgNZ4ApisWLJrhCmaSUX4+nZCTxQPNL1MaMs2AZSl/w1sVPc
8/SxohPrmQWeKGYdrTCqOOSMSHmCLf85Fs04VZd18TbFvPiUaghqOtbCDsnSt09l
sj/BgAuWfQCRYJaJN3q+wLr4X105ram062IGs6UCDXz2G9lHEkt6Q/itzpp1bDNC
VInWOw/CI0aOe+yvYBxn8tElQ6+3xSzr6WPpPyVNGv9OP9qQGxM6riD4McEuNGHo
tARuFchCom5+hddp7PPDiaBZAPB4/IjHSsZl/2wGmmqAUghuGnWb5fiFx6mcPu4C
xxVQLoGgU4irqnS5UBruh17bn9XMtiuVPYBiY44HRpdwvVzaGTOUFsghDFMT2c1L
XpN0m0YYkzugeQRnrTy8ifXHmX1GYxS/Lz/iFMinoLfhwQ1yGXQx2KijmPl/oRcU
+a/4LQIVpMPZzAhcYz5Qx44JovNJEogLRoo3vzxB/OuPD35xSUACmzpQPUkEKt6E
fPZaysUMMX/yU8arAdABO/+syUULe3YX6t2NVq99gmozDaFNtL+YpPVNCjpQlof6
EE8YYHK1t82MmrkCDQRm7hsnARAAvJFx09TVM3cWJRi9tQTt8pxZWxhZkNR7DNwr
zmQRs0cKUcQ8F8iH1PQKYuOpQda02GQ846rK9GfZllOQx/kr5rABamMPDMAf32m2
7WGhBT9vDzKb6DJsMHm6TPxjB99VwTyzKdJ4qLeES5i8BZLwU9nDnGoL8m8A3523
peXcXYEzUjg+iOC7cE62Yncy3S2vBYqD5iou3UXssMdTMcVaR90kh3xS5SV+UteC
3B3fCEl44R+MlYG8TeVHamDJ76dlr0SiPX+aOHn3AirVA44i7hz2xXb1NmxQffHf
q/u+Lb+daZSLMEiJCKamaqw1yLYkHNzRNf0Qlipyf9sEjX9U5CVLUas/VKmXH6mM
rCIri75e5m+79XQPKLhIsNs6UIzxSeXfgGrheNBxv9FCr21EG5iPcmErRj2YU6RE
ocxvPT3+09n8OXgUr93ZzKRjY8Xv/WEXrD+A3g7DWUe5yHbOCWmnuB/qLmXdanyC
y7YGsLwwexJePfzbPk1++0ZTxzeGCzqDwCRJ15ADCBcZ1WrMrdSVpP+5ePBr59lA
mr11BQ4Gx0Qbtwm0T/b9h30neuk6qKzMZT/bb4LZW8Q8rxtJGnZbLll3errXaoOy
kL5ATcbilCKV1aRtwF+4PxlLzSGKYx96sX+es31uHIn8g4sk1ss9WCbKBRZry7WK
eFuNY6MAEQEAAYkCNgQYAQoAIBYhBGRUh3YT8heAKRbh+C9KcgsKSL88BQJm7hsn
AhsMAAoJEC9KcgsKSL88x+IQAI4GgE2a99wnC8H5BCBBa/rcNpVQk5oM5IgrvIh5
H22a7YFjRfEDeHOcT7cpQPWux7srd5YBfOoUBYRDkDEDRAMmgLhO4+a889uqkIRK
/T4b4Ta3giY8xkCqNSXCdRralGQEKgcLfvAQLwe2hOb8tq++/eZDB5fazx7ao82U
uVHEh1n1jFHjza7HYYH06rtUl3sbSCDI2rY8kgllVM8/z6TemBV1CqD9Jf2Ou5Bv
/0vdLNMHgIf6RhIPh+gg/J6q8zgewF3LuOM6KGurR6IQcUWn+3dlB6jCnJwuNL78
FYqsuEvDuuCLv3rGO+8CvdCy8Kmz9ZsZ2h0ekbRIZUKNJU72id93bHie3o6CkLg1
3ZfAn+ac/lr21P49SpMpT5lamnWSJL4dYwzQQ9jJU1FMgOV0wZ4w44gXRJLOX+Dc
Y2eGTEDAetAOaM5gf7vJyPwPDwp3GfPRzvmZPAzCAhMgJnNL3LEfxnYe9K2mfzOS
bH/axlFQjBvYHRBpn59wmRPf1TEi/2Ww71/JcN8wVfL1Ww1eptutOM/zE8R/uVmN
9Z8EbpU8QVH3aQdU9NpyyEvoSImm582Xh4DZuM8LTGNzvYZzsB1EmVsqoZ0ho2XG
veQHRAp8ar1gzhM1fdNjm+BSK0aB/zWOBuaSFKNGJSu+83xIqFj5PsyEhnmGJP/j
8MGs
=DYR6
-----END PGP PUBLIC KEY BLOCK-----
<i class="copy-icon fas fa-copy" onclick="copyToClipboard()"></i>
        </pre>
      </div>
      <div class="new-container">
        <h2>Additional Information</h2>
        <p>"Open source is a way of life for everyone involved!"</p>
        <p>Feel free to reach out for collaboration or any inquiries.</p>
        <marquee width="100%" direction="right" height="100px">
          I USE LINUX BTW </marquee>
        <pre>
[ fauzy@debian ]: ~ $ neofetch
       _,met$$$$$gg.         ┌───────── status information ─────────┐ 
    ,g$$$$$$$$$$$$$$$P.       ​ 🏫  ➡  SMKN I GARUT 
  ,g$$P"     """Y$$.".        ​ 🐙  ➡  https://github.com/fauzymadani 
 ,$$P'              `$$$.     ​ 🐙  ➡  https://gitlab.com/fauzymadani
',$$P       ,ggs.     `$$b:   ​ 📝  ➡  Neovim 
`d$$'     ,$P"'   .    $$$    ​ 🇮🇩➡  Indonesia
 $$P      d$'     ,    $$P   ├─────────   ➡  Fauzy Madani ─────────┤ 
 $$:      $$.   -    ,d$$'    ​ 🐧 ➡  Debian GNU/Linux 12 (bookworm) 
 $$;      Y$b._   _,d$P'      ​ ⚙️  ➡  6.1.0-26-amd64 
 Y$$.    `.`"Y$$$$P"'         ​ 🖥️ ➡  i3 
 `$$b      "-.__              ​ 💻 ➡  bash 5.2.15 
  `Y$$                        ​ 🖱️ ➡  xfce4-terminal 
   `Y$$.                      ​ 🔤 ➡  Hack Nerd Font 13 
     `$$b.                    ​ 📦  ➡  4581 (dpkg), 25 (brew), 23 (flatpak), 20 (snap) 
       `Y$$b.                └───────────────────────────────────────┘ 
          `"Y$b._                                       
              `"""

[ fauzy@debian ]: ~ $ 

          </pre>
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


  <script>
    function searchContent() {
      const input = document.querySelector('.search-container input').value.toLowerCase();
      const items = document.querySelectorAll('.list');

      items.forEach(item => {
        const textElements = item.querySelectorAll('p, h1');
        let found = false;

        textElements.forEach(element => {
          const originalText = element.textContent;
          element.innerHTML = originalText; // Reset any previous highlighting

          if (input && originalText.toLowerCase().includes(input)) {
            found = true;
            const regex = new RegExp(`(${input})`, 'gi');
            element.innerHTML = originalText.replace(regex, '<span class="highlight">$1</span>');
          }
        });

        item.style.display = found ? '' : 'none'; // Show only items that have a match
      });
    }
  </script>
  <script>
    const contentEn = {
      heading: "How to contact me",
      contactList: [{
          id: "general",
          text: "General Information"
        },
        {
          id: "github",
          text: "Using GitHub"
        },
        {
          id: "email",
          text: "Email"
        },
        {
          id: "report",
          text: "Reporting Problems in Packages"
        },
        {
          id: "development",
          text: "Package Development"
        },
        {
          id: "harassment",
          text: "Harassment Issues"
        }
      ]
    };

    // Konten dalam bahasa Indonesia
    const contentId = {
      heading: "Cara menghubungi saya",
      contactList: [{
          id: "general",
          text: "Informasi Umum"
        },
        {
          id: "github",
          text: "Menggunakan GitHub"
        },
        {
          id: "email",
          text: "Email"
        },
        {
          id: "report",
          text: "Melaporkan Masalah pada Paket"
        },
        {
          id: "development",
          text: "Pengembangan Paket"
        },
        {
          id: "harassment",
          text: "Masalah Pelecehan"
        }
      ]
    };

    // Fungsi untuk mengganti bahasa
    function switchLanguage(language) {
      const content = language === "id" ? contentId : contentEn;
      document.getElementById("heading").textContent = content.heading;

      const contactList = document.getElementById("contact-list");
      contactList.innerHTML = ""; // Hapus isi daftar sebelumnya

      content.contactList.forEach(item => {
        const listItem = document.createElement("li");
        const link = document.createElement("a");
        link.href = `#${item.id}`;
        link.classList.add("text");
        link.textContent = item.text;
        listItem.appendChild(link);
        contactList.appendChild(listItem);
      });
    }

    // Set bahasa default ke Inggris saat halaman dimuat
    switchLanguage("en");

    // Event listener untuk perubahan bahasa
    document.getElementById("language-select").addEventListener("change", function() {
      switchLanguage(this.value);
    });
  </script>
  <style>
    .content-container {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin: 20px;
    }

    /* Styling Contact List */
    .contact-list {
      flex: 1;
      list-style: none;
      padding: 0;
      margin: 0;
      margin-left: 20px;
    }

    /* Styling Kontainer Baru */
    .new-container {
      flex: 1;
      padding: 20px;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
    }

    .new-container h2 {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .new-container p {
      font-size: 0.9em;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    .new-container a {
      color: #007BFF;
      text-decoration: none;
    }

    .new-container a:hover {
      text-decoration: underline;
    }
  </style>
</body>

</html>

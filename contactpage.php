<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
      margin: 20px;
      display: inline-block;
    }
  </style>
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

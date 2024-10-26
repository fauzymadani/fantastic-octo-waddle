<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    body {
      font-family: Arial, sans-serif;
      margin: 40px;
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

    .nav-links {
      list-style-type: none;
      display: flex;
      gap: 20px;
      /* Jarak antar item */
    }

    .nav-links li {
      display: inline-block;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      /* Menghapus margin default */
      padding: 0;
      /* Menghapus padding default */
    }

    .navbar {
      background: #ECECEC;
      border-bottom: 2px solid red;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      /* Agar lebar navbar memenuhi layar */
      top: 0;
      left: 0;
    }

    .main-content {
      margin-top: 70px;
      padding-top: 20px;
    }

    .content h1 {
      font-weight: 300;
      font-size: 35px;
    }

    .content {
      margin: 20px;
    }

    .list {
      margin-top: 40px;
      margin-bottom: 40px;
    }

    .list h1 {
      font-weight: 300;
      font-size: 30px;
    }

    .list p {
      font-size: 15px;
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

  <div class="main-content">
    <h1 class="howto">How to contact us</h1>
    <ul class="contact-list">
      <li><a href="#">General Information</a></li>
      <li><a href="#">using github</a></li>
      <li><a href="#">email</a></li>
      <li><a href="#">Reporting Problems in Packages</a></li>
      <li><a href="#">Package Development</a></li>
      <li><a href="#">Problems with my Packages</a></li>
      <li><a href="#">Harassment Issues</a></li>
    </ul>

  </div>
  <div class="content">

    <div class="list">
      <h1>General Information</h1>
      <p>For general inquiries about our organization, its mission, and the various services we offer, this is the best place to start. Whether you are curious about our history, want to understand our goals, or have questions about how we operate, our team is here to help. If you are unsure which category your question falls under, feel free to reach out here, and we will direct you to the appropriate resources or team member.</p>
    </div>
    <div class="list">
      <h1>Using GitHub</h1>
      <p>If you are new to GitHub or looking to contribute to our open-source projects, we are here to assist you. From setting up your GitHub account and creating repositories to learning how to fork projects, submit pull requests, or resolve merge conflicts, we provide detailed guidance. Whether you're a beginner looking for help with basic commands or an advanced user seeking collaboration tips, our support team can answer your questions about GitHub workflows and best practices.</p>
    </div>
    <div class="list">
      <h1>Email</h1>
      <p>For those who prefer direct communication, sending us an email is a great option. Whether you're contacting us for technical support, partnership opportunities, or general feedback, this channel allows for more personalized assistance. We aim to respond to all emails within 48 hours, and we strive to address your concerns or inquiries as thoroughly as possible. Please make sure to provide clear details in your email to help us assist you more effectively.</p>
    </div>
    <div class="list">
      <h1>Reporting Problems in Packages</h1>
      <p>If you've encountered a bug or an issue with one of our software packages, please report it here. We highly value user feedback as it helps us improve the quality and reliability of the packages we offer. In your report, make sure to include as much detail as possible, such as the version of the package you are using, the specific issue you encountered, steps to reproduce the bug, and any error messages. This information will assist our development team in identifying and fixing the problem promptly.</p>
    </div>
    <div class="list">
      <h1>Package Development</h1>
      <p>If you're interested in getting involved in the development of our software packages, we welcome your contributions. Whether you're a developer looking to submit code, a tester providing feedback, or someone suggesting new features, there's a place for you in our community. Our development guide includes information on setting up your development environment, coding standards, submitting patches, and using version control tools like Git. Join us in shaping the future of open-source software by contributing your skills and expertise.</p>
    </div>
    <div class="list">
      <h1>Problems with My Packages</h1>
      <p>We understand that sometimes users may run into issues with packages they’ve installed or are maintaining themselves. This section provides troubleshooting tips, common error fixes, and guidance on how to ensure compatibility with other packages. If you're having difficulty installing, configuring, or updating your packages, or if dependencies are causing issues, our support team can help you resolve these problems. We also provide detailed documentation and a forum where users can share solutions to common package problems.</p>
    </div>
    <div class="list">
      <h1>Harassment Issues</h1>
      <p>We are committed to maintaining a respectful, safe, and harassment-free environment for all our contributors and users. If you experience or witness any form of harassment, discrimination, or abusive behavior, we urge you to report it immediately. Our team takes all complaints seriously and investigates them with confidentiality and care. We have strict codes of conduct in place to ensure that everyone feels welcome and valued in our community. If you feel uncomfortable or threatened, do not hesitate to reach out, and we will take the necessary steps to address the situation.</p>
    </div>
  </div>
</body>

</html>

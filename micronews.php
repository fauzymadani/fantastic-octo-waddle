<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Micro News</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
    }

    header nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      text-align: center;
    }

    header nav ul li {
      display: inline-block;
      margin: 0 15px;
    }

    header nav ul li a {
      color: blue;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .news-item {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fafafa;
    }

    .news-item h2 {
      margin: 0;
    }

    .news-item p {
      line-height: 1.5;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Back to Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="packages.php">My Packages</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <h1>Micro News</h1>

    <div class="news-item">
      <h2>Debian 12.1 Released: What's New?</h2>
      <p>Debian has officially released version 12.1, which includes security updates and various bug fixes
        for the Debian 12 "Bookworm" series. Users are encouraged to update their systems to benefit from
        improved security and stability. Check the official Debian website for detailed release notes.
      </p>
    </div>

    <div class="news-item">
      <h2>Linux Kernel 6.5 Now Available</h2>
      <p>The latest version of the Linux kernel, 6.5, brings significant improvements in performance
        and hardware support. This update includes support for new CPUs, enhanced file system capabilities,
        and various security enhancements. Users are recommended to update to take advantage of these improvements.
      </p>
    </div>

    <div class="news-item">
      <h2>Python 3.12 Released: New Features and Improvements</h2>
      <p>Python 3.12 has been released, introducing new syntax features, optimizations, and standard library updates.
        Developers can now enjoy features such as f-strings improvements, new typing capabilities, and performance enhancements.
        Check out the official Python documentation for more details on the new features.
      </p>
    </div>
  </div>
</body>

</html>

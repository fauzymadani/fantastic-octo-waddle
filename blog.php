<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fauzy's Blog Page</title>
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
      color: #fff;
      text-decoration: none;
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

    .blog-post {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fafafa;
    }

    .blog-post h2 {
      margin: 0;
    }

    .blog-post p {
      line-height: 1.5;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Back to Home</a></li>
        <li><a href="packages.php">My Packages</a></li>
        <li><a href="micronews.php">Micro News</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <h1>List of Fauzy's Blog</h1>

    <div class="blog-post">
      <h2>Tutorial: Setting Up Nginx on RHEL Server</h2>
      <p>In this tutorial, we will discuss the steps to install and configure Nginx on a RHEL server.
        First, you need to update your system by running <code>sudo dnf update</code>.
        After that, install Nginx with the command <code>sudo dnf install nginx</code>.
        Once the installation is complete, enable and start the Nginx service with <code>sudo systemctl enable nginx</code> and <code>sudo systemctl start nginx</code>.
        To configure it, you can edit the file at <code>/etc/nginx/nginx.conf</code> or add new files in <code>/etc/nginx/conf.d/ <a href="nginx.php">read more</a></code>.
      </p>
    </div>

    <div class="blog-post">
      <h2>Introduction to Docker on Linux</h2>
      <p>Docker is a platform that allows you to develop, ship, and run applications in containers.
        In this tutorial, we will explain how to install Docker on your Linux system.
        First, make sure you have <code>curl</code> installed, then run the following command to install Docker:
        <code>curl -fsSL https://get.docker.com -o get-docker.sh && sh get-docker.sh</code>.
        After installation, you can start Docker with the command <code>sudo systemctl start docker</code>. <a href="nginx.php">read more</a>
      </p>
    </div>

    <div class="blog-post">
      <h2>User Management in Linux</h2>
      <p>User management is an important aspect of Linux system administration.
        You can add a new user with the command <code>sudo adduser username</code>.
        To remove a user, use <code>sudo deluser username</code>.
        Don't forget to grant appropriate permissions to users using the command <code>sudo usermod -aG groupname username</code>.<a href="nginx.php">read more</a>
      </p>
    </div>
  </div>
</body>

</html>

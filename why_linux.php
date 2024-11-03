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

            But, it is just a place where people show their custom desktops. Because you can modify most everything in linux. </p>
          <img src="data:image/jpeg;base64,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">
        </div>
        <div class="contentartc">
          <h1 id="freedom">freedom</h1>
          <p>Linux, GNU, and Freedom
            by Richard M. Stallman
            Since Joe Barr's article criticized my dealings with SIGLINUX, I would like to set the record straight about what actually occurred, and state my reasons.

            When SIGLINUX invited me to speak, it was a “Linux User Group”; that is, a group for users of the GNU/Linux system which calls the whole system “Linux.” So I replied politely that if they'd like someone from the GNU Project to give a speech for them, they ought to treat the GNU Project right, and call the system “GNU/Linux.” The system is a variant of GNU, and the GNU Project is its principal developer, so social convention says to call it by the name we chose. Unless there are powerful reasons for an exception, I usually decline to give speeches for organizations that won't give GNU proper credit in this way. I respect their freedom of speech, but I also have the freedom not to give a speech.

            Subsequently, Jeff Strunk of SIGLINUX tried to change the group's policy, and asked the FSF to list his group in our page of GNU/Linux user groups. Our webmaster told him that we would not list it under the name “SIGLINUX” because that name implies that the group is about Linux. Strunk proposed to change the name to “SIGFREE,” and our webmaster agreed that would be fine. (Barr's article said we rejected this proposal.) However, the group ultimately decided to stay with “SIGLINUX.”

            At that point, the matter came to my attention again, and I suggested they consider other possible names. There are many names they could choose that would not call the system “Linux,” and I hope they will come up with one they like. There the matter rests as far as I know.

            Is it true, as Barr writes, that some people see these actions as an “application of force” comparable with Microsoft's monopoly power? Probably so. Declining an invitation is not coercion, but people who are determined to believe that the entire system is “Linux” sometimes develop amazingly distorted vision. To make that name appear justified, they must see molehills as mountains and mountains as molehills. If you can ignore the facts and believe that Linus Torvalds developed the whole system starting in 1991, or if you can ignore your ordinary principles of fairness and believe that Torvalds should get the sole credit even though he didn't do that, it's a small step to believe that I owe you a speech when you ask.

            Just consider: the GNU Project starts developing an operating system, and years later Linus Torvalds adds one important piece. The GNU Project says, “Please give our project equal mention,” but Linus says, “Don't give them a share of the credit; call the whole thing after my name alone!” Now envision the mindset of a person who can look at these events and accuse the GNU Project of egotism. It takes strong prejudice to misjudge so drastically.

            A person who is that prejudiced can say all sorts of unfair things about the GNU Project and think them justified; his fellows will support him, because they want each other's support in maintaining their prejudice. Dissenters can be reviled; thus, if I decline to participate in an activity under the rubric of “Linux,” they may find that inexcusable, and hold me responsible for the ill will they feel afterwards. When so many people want me to call the system “Linux,” how can I, who merely launched its development, not comply? And forcibly denying them a speech is forcibly making them unhappy. That's coercion, as bad as Microsoft!

            Now, you might wonder why I don't just duck the issue and avoid all this grief. When SIGLINUX invited me to speak, I could simply have said “No, sorry” and the matter would have ended there. Why didn't I do that? I'm willing to take the risk of being abused personally in order to have a chance of correcting the error that undercuts the GNU Project's efforts.

            Calling this variant of the GNU system “Linux” plays into the hands of people who choose their software based only on technical advantage, not caring whether it respects their freedom. There are people like Barr, that want their software “free from ideology” and criticize anyone that says freedom matters. There are people like Torvalds that will pressure our community into use of a nonfree program, and challenge anyone who complains to provide a (technically) better program immediately or shut up. There are people who say that technical decisions should not be “politicized” by consideration of their social consequences.

            In the 70s, computer users lost the freedoms to redistribute and change software because they didn't value their freedom. Computer users regained these freedoms in the 80s and 90s because a group of idealists, the GNU Project, believed that freedom is what makes a program better, and were willing to work for what we believed in.

            We have partial freedom today, but our freedom is not secure. It is threatened by the CBDTPA (formerly SSSCA), by the Broadcast “Protection” Discussion Group (see www.eff.org) which proposes to prohibit free software to access digital TV broadcasts, by software patents (Europe is now considering whether to have software patents), by Microsoft nondisclosure agreements for vital protocols, and by everyone who tempts us with a nonfree program that is “better” (technically) than available free programs. We can lose our freedom again just as we lost it the first time, if we don't care enough to protect it.

            Will enough of us care? That depends on many things; among them, how much influence the GNU Project has, and how much influence Linus Torvalds has. The GNU Project says, “Value your freedom!” Joe Barr says, “Choose between nonfree and free programs on technical grounds alone!” If people credit Torvalds as the main developer of the GNU/Linux system, that's not just inaccurate, it also makes his message more influential—and that message says, “Nonfree software is OK; I use it and develop it myself.” If they recognize our role, they will listen to us more, and the message we will give them is, “This system exists because of people who care about freedom. Join us, value your freedom, and together we can preserve it.” See The GNU Project for the history.

            When I ask people to call the system GNU/Linux, some of them respond with silly excuses and straw men. But we probably haven't lost anything, because they were probably unfriendly to begin with. Meanwhile, other people recognize the reasons I give, and use that name. By doing so, they help make other people aware of why the GNU/Linux system really exists, and that increases our ability to spread the idea that freedom is an important value.

            This is why I keep butting my head against bias, calumny, and grief. They hurt my feelings, but when successful, this effort helps the GNU Project campaign for freedom.

            Since this came up in the context of Linux (the kernel) and Bitkeeper, the nonfree version control system that Linus Torvalds now uses, I'd like to address that issue as well.</p>
        </div>
        <div class="contentartc">
          <h1 id="stable">stable</h1>
          <p>Linux is considered a reliable OS and is well-supported with security patches. Linux is also considered to be stable, meaning it can run in most circumstances. Linux also copes with errors when running software and unexpected input.Stable means that the interfaces within a release are kept stable. So there is limited need (intention: no need) to update one software because of an update to another software.</p>
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

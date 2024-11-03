<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commit Details</title>
  <style>
    * {
      font-family: monospace;
    }

    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    a {
      color: #1e90ff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    pre {
      background-color: #1a1a1a;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
      overflow-x: auto;
    }

    pre .added {
      color: #00ff00;
    }

    pre .removed {
      color: #ff0000;
    }

    .commit {
      margin-bottom: 20px;
      padding: 10px;
    }
  </style>
</head>

<body>

  <?php
  function getCommitDiff($username, $repo, $sha)
  {
    $url = "https://api.github.com/repos/$username/$repo/commits/$sha";
    $opts = [
      "http" => [
        "method" => "GET",
        "header" => "User-Agent: PHP"
      ]
    ];
    $context = stream_context_create($opts);
    $data = file_get_contents($url, false, $context);
    $commit = json_decode($data, true);

    if (isset($commit['files'])) {
      $diffDetails = '';
      foreach ($commit['files'] as $file) {
        $patch = htmlspecialchars($file['patch']); // Escaping HTML for security
        $patch = preg_replace('/^(\+.*)$/m', '<span class="added">$1</span>', $patch);
        $patch = preg_replace('/^(\-.*)$/m', '<span class="removed">$1</span>', $patch);

        $diffDetails .= "<div class='commit'>";
        $diffDetails .= "<strong>File:</strong> {$file['filename']}<br>";
        $diffDetails .= "<pre>{$patch}</pre>";
        $diffDetails .= "</div><hr>";
      }
      return $diffDetails;
    } else {
      return "<p>No diff data available for this commit.</p>";
    }
  }

  $username = "fauzymadani";
  $repo = "fantastic-octo-waddle";
  $url = "https://api.github.com/repos/$username/$repo/commits";

  //TODO: improve the codes
  //HACK: the code is like trash
  $opts = [
    "http" => [
      "method" => "GET",
      "header" => "User-Agent: PHP"
    ]
  ];
  $context = stream_context_create($opts);
  $data = file_get_contents($url, false, $context);
  $commits = json_decode($data, true);
  echo "<h1>commit log for this project: </h1>";
  foreach ($commits as $commit) {
    $sha = $commit['sha'];
    echo "<div class='commit'>";
    echo "<strong>Commit:</strong> <a href='?commit=$sha'>{$commit['sha']}</a><br>";
    echo "<strong>Author:</strong> {$commit['commit']['author']['name']}<br>";
    echo "<strong>Date:</strong> {$commit['commit']['author']['date']}<br>";
    echo "<strong>Patch:</strong> {$commit['commit']['message']}<br>";
    echo "</div><hr>";
  }

  if (isset($_GET['commit'])) {
    $commitSha = $_GET['commit'];
    echo "<h3>Diff for Commit $commitSha</h3>";
    echo getCommitDiff($username, $repo, $commitSha);
  }
  ?>


</body>

</html>
<!--TODO: add more features -->
<a href="index.php">go back</a>

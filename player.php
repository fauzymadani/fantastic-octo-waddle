<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Player</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .player-container {
      background-color: #333;
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
    }

    audio {
      width: 100%;
      margin-bottom: 10px;
    }

    .progress-bar {
      margin-top: 10px;
    }

    input[type="range"] {
      width: 100%;
      appearance: none;
      height: 10px;
      background: #444;
      outline: none;
      opacity: 0.7;
      transition: opacity .2s;
    }

    input[type="range"]::-webkit-slider-thumb {
      appearance: none;
      width: 20px;
      height: 20px;
      background: #ff6347;
      cursor: pointer;
    }

    input[type="range"]::-moz-range-thumb {
      width: 20px;
      height: 20px;
      background: #ff6347;
      cursor: pointer;
    }

    .volume-control {
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <div class="player-container">
    <h1>Music Player</h1>
    <audio id="audio-player" controls>
      <?php
      $dir = 'songs/';
      $files = array_diff(scandir($dir), array('.', '..'));
      foreach ($files as $file) {
        echo '<source src="' . $dir . $file . '" type="audio/mpeg">';
      }
      ?>
      Your browser does not support the audio tag.
    </audio>

    <div class="progress-bar">
      <input type="range" id="seek-bar" value="0" max="100">
    </div>

    <div class="volume-control">
      <label for="volume">Volume:</label>
      <input type="range" id="volume" min="0" max="1" step="0.1" value="1">
    </div>
  </div>

  <script>
    const audioPlayer = document.getElementById("audio-player");
    const seekBar = document.getElementById("seek-bar");
    const volumeControl = document.getElementById("volume");

    // Update progress bar as the song plays
    audioPlayer.addEventListener("timeupdate", function() {
      const value = (audioPlayer.currentTime / audioPlayer.duration) * 100;
      seekBar.value = value;
    });

    // Seek to different time in the song
    seekBar.addEventListener("input", function() {
      const time = (seekBar.value / 100) * audioPlayer.duration;
      audioPlayer.currentTime = time;
    });

    // Control volume
    volumeControl.addEventListener("input", function() {
      audioPlayer.volume = volumeControl.value;
    });
  </script>

</body>

</html>

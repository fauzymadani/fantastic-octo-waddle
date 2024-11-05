<?php
$counter_file = "counter.txt";

if (!file_exists($counter_file)) {
  file_put_contents($counter_file, "0");
}

$current_count = (int)file_get_contents($counter_file);

$new_count = $current_count + 1;

file_put_contents($counter_file, (string)$new_count);

echo "<div class='visitor-counter'>";
echo "<p>Total Pengunjung: " . $new_count . "</p>";
echo "</div>";
?>
<style>
  .visitor-counter {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    text-align: center;
    font-size: 1.2em;
    border-radius: 5px;
    color: #333;
  }

  .visitor-counter p {
    margin: 0;
  }
</style>

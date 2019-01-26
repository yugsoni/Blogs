<!DOCTYPE html>
<html>
<head>
  <title>My Blog System</title>
  <link rel="icon" href="demo_icon.png" type="image/png" sizes="16x16">
</head>
<body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

      }catch(PDOException $e){
          echo "Connection failed: " . $e->getMessage();
      }
    ?>
    <?php

      $sql_query1 = 'SELECT * FROM posts';
      $sql = "UPDATE\n"

    . "    posts\n"

    . "SET\n"

    . "    title = \'yug\'\n";
    $sql = "DELETE FROM posts WHERE title=\'My_blog_2 \'";
      foreach ($conn->query($sql_query1) as $row) {
    ?>
      <div>
        <h2><?php print $row['title'] . "\n"; ?></h2>
        <small><?php print $row['author_name'] . "\n"; ?></small>
        <small><?php print $row['created_at'] . "\n"; ?></small>
        <p><?php print $row['description'] . "\n"; ?></p>
      </div>
      <hr>
    <?php
      }
    ?>

    <h1>Static</h1>
    <div>
        <h2>Getting Started with PHP</h2>
        <small>Yug Soni</small>
        <p> This is paragraph. This is paragraph. This is paragraph. This is paragraph.This is paragraph
        </p>
    </div>
    <hr>
    <div>
        <h2>Getting Started with PHP</h2>
        <small>Yug Soni</small>
        <p> This is paragraph. This is paragraph. This is paragraph. This is paragraph.This is paragraph
        </p>
    </div>
    <hr>
    <div>
        <h2>Getting Started with PHP</h2>
        <small>Yug Soni</small>
        <p> This is paragraph. This is paragraph. This is paragraph. This is paragraph.This is paragraph
        </p>
    </div>
    <hr>
    <div>
        <h2>Getting Started with PHP</h2>
        <small>Yug Soni</small>
        <p> This is paragraph. This is paragraph. This is paragraph. This is paragraph.This is paragraph
        </p>
    </div>
    <hr>
</body>
</html>
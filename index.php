<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forrest's Project</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="CSS/main.css" type="text/css">

  <meta name="viewport" content="width=width-device, initial-scale=1.0">
</head>
<body>
  <div class="list">
    <h1 class="header">To do.</h1>

    <ul class="items">
      <li>
        <span class="item done">Learn PHP</span>
      </li>
      <li>
        <span class="item">Get a Job</span>
        <a href="#" class="done-button">Mark as Done</a>
      </li>
      <li>
        <span class="item">Be Awesome</span>
        <a href="#" class="done-button">Mark as Done</a>
      </li>
    </ul>

    <form class="item-add" action="add.php" method="POST">
      <input type="text" name="name" placeholder="Add to the to do list HERE." class="input" autocomplete="off" required>
      <input type="submit" value="Add Item" class="submit">
    </form>

  </div>

</body>
</html>
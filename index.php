<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forrest's Project</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <meta name="viewport" content="width=width-device, initial-scale=1.0">
</head>
<body>
  <div class="list">
    <h1 class="header"To do.></h1>

  <ul>
    <li><span class="item done">Learn PHP</span></li>
    <li><span class="item"></span>Get a Job</li>
    <li><span class="item"></span>Be Awesome</li>
  </ul>

  <form class="item-add" action="add.php" method="POST">
    <input type="text" name="name" placeholder="Add to the to do list HERE." class="input" autocomplete="off" required>
    <input type="submit" value="Add Item" class="submit">
  </form>

  </div>

</body>
</html>
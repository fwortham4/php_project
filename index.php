<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
  SELECT id, name, done
  FROM items
  WHERE user = :user
");

$itemsQuery->execute([
  'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

// foreach($items as $item) {
//   print_r($item);
//   // echo $item['name'], '<br>';
// }

?>

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

    <?php if(!empty($items)): ?>
    <ul class="items">
      <?php foreach($items as $item): ?>
        <li>
          <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
          <?php if(!$item['done']): ?>
            <a href="mark.php?as=done&item=<?php echo $item['id'];  ?>" class="done-button">Mark as In Compliance</a>
          <?php elseif($item['done']): ?>
            <a href="mark.php?as=notdone&item=<?php echo $item['id'];  ?>" class="done-button">Unmark</a>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php else: ?>
      <p>No items to do!</p>
    <?php endif; ?>

    <form class="item-add" action="add.php" method="POST">
      <input type="text" name="name" placeholder="Add to the to do list HERE." class="input" autocomplete="off" required>
      <input type="submit" value="Add Item" class="submit">
    </form>

  </div>

</body>
</html>
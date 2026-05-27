<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Digital Depot</title>
</head>
<body>

<?php require __DIR__ . "/../includes/nav.php"; ?>
<?php require __DIR__ . "/../includes/header.php"; ?>

<main class="layout">
    <div class="container">
        <div class="layout-wrapper">

            <?php require __DIR__ . "/../$view.php"; ?>

        </div>
    </div>
</main>

<?php require __DIR__ . "/../includes/footer.php"; ?>

</body>
</html>
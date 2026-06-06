<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
  <title>Digital Depot</title>
</head>
<body>

<?php include BASE_PATH . "/app/views/includes/nav.php"; ?>
<?php include BASE_PATH . "/app/views/includes/header.php"; ?>

<main class="layout">
    <div class="container">
        <div class="layout-wrapper">
            
            <?php include BASE_PATH . "/app/views/$view.php"; ?>

        </div>
    </div>
</main>

<?php include BASE_PATH . "/app/views/includes/footer.php"; ?>

</body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
  <link rel="icon" href="<?= BASE_URL ?>img/favicon.svg" type="image/svg+xml">
  <link rel="icon" href="<?= BASE_URL ?>img/favicon-32x32.png" type="image/png" sizes="32x32">
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
</html>
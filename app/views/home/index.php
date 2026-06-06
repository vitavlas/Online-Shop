<aside class="sidebar">

    <?php include BASE_PATH . "/app/views/includes/category-nav.php"; ?>

</aside>

<section class="content">
    <h3 class="content-title"><?= htmlspecialchars($data["pageTitle"]) ?></h3>

    <div class="content-body">
        <section class="section product-list">
    
            <?php foreach ($data['products'] as $product): ?>
            <?php include BASE_PATH . "/app/views/includes/product-card.php"; ?>
            <?php endforeach; ?>
    
        </section>
    </div>

</section>
<aside class="sidebar">

    <?php include BASE_PATH . "/app/views/includes/category-nav.php"; ?>

</aside>

<section class="content">
    <h3 class="section-title">Products in category <?= ucfirst($data['category']) ?></h3>

    <section class="products">

        <?php foreach ($data['products'] as $product): ?>
        <?php include BASE_PATH . "/app/views/includes/product-card.php"; ?>
        <?php endforeach; ?>

    </section>
</section>
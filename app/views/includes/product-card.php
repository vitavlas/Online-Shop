<article class="product-card">
    <div class="card-image">
    <img src="/img/products/<?= htmlspecialchars($product['category']) ?>/<?= htmlspecialchars($product['image']) ?>"
         width="150" height="150" loading="lazy" alt="<?= htmlspecialchars($product['title']) ?>">
    </div>

    <div class="card-content">
    <h4 class="card-title"><?= htmlspecialchars($product['title']) ?></h4>
    <p class="card-description">
        <?= htmlspecialchars($product['description']) ?>
    </p>
    <span class="card-price"><?= htmlspecialchars($product['price']) ?>€</span>
    </div>
</article>
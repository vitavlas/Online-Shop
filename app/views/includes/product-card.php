<article class="product-card <?= $data['isFull'] ? 'product-card--full' : '' ?>">

<?php if (empty($data['isFull'])): ?>
    <a href="<?= BASE_URL ?>product/<?= htmlspecialchars($product['id']) ?>" class="card-overlay"></a>
<?php endif; ?>

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

<?php if (!empty($data['isFull'])): ?>
    <button class="btn btn-cart">Add to cart</button>
<?php endif; ?>

    </div>
</article>
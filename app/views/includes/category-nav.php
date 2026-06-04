<nav class="categories">
    <h3 class="section-title">Product Categories</h3>

    <ul class="category-list">
        <?php foreach ($data['categories'] as $category): ?>

        <li>
            <a 
                href="/category/<?= htmlspecialchars($category['name']) ?>" 
                class="category-link">
                <?= ucfirst(htmlspecialchars($category['name'])) ?>
            </a>
        </li>

        <?php endforeach; ?>

    </ul>
</nav>
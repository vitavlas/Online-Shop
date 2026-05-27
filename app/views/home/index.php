       <aside class="sidebar">
          <nav class="categories">
            <h3 class="section-title">Product Categories</h3>
    
            <ul class="category-list">
              <li>
                <a href="#!" class="category-link">Books</a>
              </li>
              <li>
                <a href="#!" class="category-link">Games</a>
              </li>
              <li>
                <a href="#!" class="category-link">Phones</a>
              </li>
              <li>
                <a href="#!" class="category-link">Microphones</a>
              </li>
              <li>
                <a href="#!" class="category-link">Tablets</a>
              </li>
            </ul>
          </nav>
        </aside>

        <section class="content">
          <h3 class="section-title">Home page</h3>
    
          <section class="products">
    
            <?php foreach ($products as $product): ?>
                <?php require __DIR__ . "../includes/product-card.php"; ?>
            <?php endforeach; ?>
    
          </section>
        </section>
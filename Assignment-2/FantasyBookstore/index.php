<!-- Hero Banner -->
<section class="hero-banner">
  <h1>Welcome to the Fantasy Bookstore</h1>
  <p>Discover Magical Tales & Adventures</p>
  <div class="hero-buttons">
    <a href="/shop?type=physical" class="btn">Buy Physical Copies</a>
    <a href="/shop?type=digital" class="btn">Download Digital Copies</a>
  </div>
</section>

<!-- Featured Categories -->
<section class="featured-categories">
  <h2>Explore Realms</h2>
  <div class="category-grid">
    <a href="/category/epic-fantasy" class="category">Epic Fantasy</a>
    <a href="/category/dark-fantasy" class="category">Dark Fantasy</a>
    <a href="/category/mythology" class="category">Mythology</a>
    <a href="/category/adventure" class="category">Adventure</a>
  </div>
</section>

<!-- Featured Products / Bestsellers -->
<section class="featured-products">
  <h2>Bestsellers</h2>
  <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]'); ?>
</section>

<!-- Newsletter CTA -->
<section class="newsletter">
  <h2>Subscribe to Your Weekly Scroll</h2>
  <?php echo do_shortcode('[contact-form-7 id="123" title="Newsletter"]'); ?>
</section>
<footer class="site-footer">
    <div class="footer-widgets">
        <div class="footer-widget">
            <h3>Explore</h3>
            <ul>
                <li><a href="/category/epic-fantasy">Epic Fantasy</a></li>
                <li><a href="/category/dark-fantasy">Dark Fantasy</a></li>
                <li><a href="/category/mythology">Mythology</a></li>
                <li><a href="/category/adventure">Adventure</a></li>
            </ul>
        </div>
        <div class="footer-widget">
            <h3>Contact</h3>
            <p>Email: info@fantasybookstore.com</p>
            <p>Phone: (555) 123-4567</p>
        </div>
        <div class="footer-widget">
            <h3>Follow Us</h3>
            <p>
                <a href="#">🐦 Twitter</a> | <a href="#">📘 Facebook</a> | <a href="#">📸 Instagram</a>
            </p>
        </div>
    </div>
    <div class="site-info">
        &copy; <?php echo date('Y'); ?> Fantasy Bookstore. All rights reserved.
    </div>
</footer>

<style>
.site-footer {
    background: #1b1b2f;
    color: #f5f0e1;
    padding: 50px 20px;
}
.footer-widgets {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-bottom: 30px;
}
.footer-widget h3 {
    font-family: 'Cinzel', serif;
    color: gold;
    margin-bottom: 10px;
}
.footer-widget ul {
    list-style: none;
    padding: 0;
}
.footer-widget ul li {
    margin-bottom: 5px;
}
.footer-widget a {
    color: #f5f0e1;
    text-decoration: none;
}
.footer-widget a:hover {
    color: gold;
}
.site-info {
    text-align: center;
    font-size: 0.9em;
    border-top: 1px solid #2e2e4d;
    padding-top: 20px;
}
</style>

<?php wp_footer(); ?>
</body>
</html>
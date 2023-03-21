</div>
    <footer class="main-footer">
        <p class="footer-copyright text-center py-3 mb-0 text-white">
        
        &copy; <?php the_field('footer_text', 'option'); ?> <?php echo date("Y"); ?>
            <br>
            <?php the_field('footer_subtitle', 'option'); ?>
        </p>
    </footer>
    <?php // https://developer.wordpress.org/reference/functions/wp_footer/?>
    <?php wp_footer(); ?>
</body>
</html>
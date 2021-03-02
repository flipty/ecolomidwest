<footer>
  <div class="container">
    <?php wp_nav_menu( array(
      'menu' => 'Footer Menu',
      'menu_class' => 'footer-nav',
      'container' => 'nav'
    )); ?>
    <div class="logos">
      <a href="https://horsdefrance.eelv.fr/" target="_blank" class="branding-parent"><img src="/wp-content/themes/ecolo/eelv.svg" alt="eelv.fr"></a>
      <a href="<?php echo get_site_url();?>" class="branding">ECOLOS <span>midwest</span></a>      
    </div>
  </div>
</footer>

<script src="/wp-content/themes/ecolo/js/vendor/jquery-3.4.1.min.js"></script>
<script src="/wp-content/themes/ecolo/js/ecolo.js"></script>
<?php wp_footer(); ?>

</body>
</html>

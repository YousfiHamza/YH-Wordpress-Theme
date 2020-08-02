
<?php $footer = get_field('footer'); ?>
<footer class="site-footer px-5">
	<div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $footer['footer_logo']; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 text-right my-auto">
          <p><?php echo $footer['footer_copyright_text']; ?></p>
        </div>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" type="text/javascript"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <!-- Fancy box -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.min.js"></script>

</body>
</html>

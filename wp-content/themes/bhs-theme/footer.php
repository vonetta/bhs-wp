<footer class="footer" role="contentinfo">
      <div class="about-us-footer">
        <h4>About Us</h4>
        <ul>
          <li>Our History</li>
          <li>About the CEO</li>
          <li>Sed laoreet</li>
          <li>Sed laoreet</li>
        </ul>
      </div>
      <!-- END .about-us-footer -->
      <div class="services-footer">
        <h4>Services</h4>
        <ul>
          <li>Our History</li>
          <li>About the CEO</li>
          <li>Sed laoreet</li>
          <li>Sed laoreet</li>
        </ul>
      </div>
      <!-- END .services-footer -->
      <div class="involved-footer">
        <h4>Ways to Get Involved</h4>
        <ul>
          <li>Our History</li>
          <li>About the CEO</li>
          <li>Sed laoreet</li>
          <li>Sed laoreet</li>
        </ul>
      </div>
      <!-- END .involved-footer -->
      <div class="logos-footer">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/adp-logo.png" alt="ADP Logo" width="84" height="84">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/cart-logo.png" alt="Cart Logo" width="98" height="89">
      </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="myContactForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contact Us</h4>
      </div>
      <div class="modal-body">
    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data>Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal-body">
 <?php
    if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
  ?>
    </div> <!-- /container -->
    </footer>
  </div>
  <!-- END .container -->
  <p class="copyright">Copyright Behavioral Health Services &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> All Rights Reserved. </p>

  <?php wp_footer(); ?>
</body>

</html>

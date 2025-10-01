<!--   Core JS Files   -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc --> 
  <script src="assets/js/soft-design-system.min.js?v=<?php echo time(); ?>" type="text/javascript"></script>
  <script src="<?php echo assets ("assets/js/core/core.js")?>?v=<?php echo time(); ?>" type="text/javascript"></script>
  <script src="<?php echo assets ("assets/js/plugins/blockUI.js")?>?v=<?php echo time(); ?>" type="text/javascript"></script>
  <?php
ade_yeild('scripts');
?>
</body>

</html>
<?php 
	$basicInfo = get_field('basic_information', 'option');
?>
</div>
</div>
<footer class="footer">
   <div class="container text-center">
      <a class="cc-facebook btn btn-link" href="<?php echo $basicInfo[0]['facebook'] ?>" target="_blank"><i
            class="fa fa-facebook fa-2x " aria-hidden="true"></i></a>
      <a class="cc-instagram btn btn-link" href="mailto:<?php echo $basicInfo[0]['email'] ?>" target="_blank"><i
            class="fa fa-envelope fa-2x " aria-hidden="true"></i></a></div>
   <div class="h4 title text-center"><?php echo $basicInfo[0]['display_name'] ?></div>
</footer>
<script src="<?php echo JS_PATH; ?>js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo JS_PATH; ?>js/core/popper.min.js"></script>
<script src="<?php echo JS_PATH; ?>js/core/bootstrap.min.js"></script>
<script src="<?php echo JS_PATH; ?>js/now-ui-kit.js?v=1.1.0"></script>
<script src="<?php echo JS_PATH; ?>js/aos.js"></script>
<script src="<?php echo JS_PATH; ?>js/main.js"></script>
</body>

</html>
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <?php if(!empty($script)): ?>
    	<?php foreach ($script as $key => $value): ?>
    		<script type="text/javascript" src="<?php echo $value; ?>"></script>
    	<?php endforeach; ?>
    <?php endif; ?>
    
</body>

</html>
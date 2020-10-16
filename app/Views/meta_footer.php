<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url();?>/vendor/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url();?>/vendor/raphael/raphael.min.js"></script>
<script src="<?=base_url();?>/vendor/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url();?>/vendor/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url();?>/vendor/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url();?>/"></script>
<?php if(isset($arrPageScript)):?>
<?php foreach ($arrPageScript as $key => $value): ?>
	<script src="<?=base_url();?>/<?=$value;?>"></script>
<?php endforeach; ?>
<?php endif; ?>

</body>
</html>

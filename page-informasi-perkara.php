<?php get_header(); ?>
<?php $mts_options = get_option('point'); ?>
<div id="page" class="single">
	<div class="content">
		<!-- Start Article -->
		<article class="ss-full-width">
		<iframe width="100%"  height="1000" src="http://infoperkara.badilag.net/fungsi_model/infoperkara/cabang.php?username=PAKISARAN&cabang=7&nama=<?php echo $_POST['nama'];?>&nomorperkara=<?php echo $_POST['nomorperkara'];?>&pdt=<?php echo $_POST['pdt'];?>&tahunperkara=<?php echo $_POST['tahunperkara'];?>">
		</iframe>	
		</article>
		<!-- End Article -->
		<?php get_footer(); ?>
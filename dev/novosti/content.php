<div class="container">
<?php foreach ($novosti as $row) { ?>
	<div class="row margin-bottom shadow">
		<div class="col-sm-4 col-md-3 col-lg-2">
			<a href="/novosti/<?php echo $row['url'];?>">
				<img src="/novosti/<?php echo $row['url'];?>/glav.jpg" class="img-responsive" alt="<?php echo $row['h2'];?>" title="<?php echo $row['h2'];?>">
			</a>
		</div>
		<div class="col-sm-8 col-md-9 col-lg-10">
			<h2><?php echo $row['h2'];?></h2>
			<p><?php echo $row['p'];?></p>
			<p><a href="/novosti/<?php echo $row['url'];?>">Продолжить чтение...</a></p>
		</div>
	</div>
<?php } ?>
</div>
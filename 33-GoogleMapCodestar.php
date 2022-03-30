<style>
.responsive-map-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}

.responsive-map-container iframe,   
.responsive-map-container object,  
.responsive-map-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
   
}
</style>

<div class="row">
	<div class="col-lg-12">
		<div class="google-map-container">
			<div id="google-map" class="google-map">
			<?php
				$google_map = $my_options['opt-map-1'];
			?>
			<div class="responsive-map-container">
			<iframe width="1130" height="423" src="https://maps.google.com/maps?q=<?php echo $google_map['latitude'];?>, <?php echo $google_map['longitude'];?>&z=15&output=embed" style="border:0"></iframe>
		</div>
		</div>
	</div>
</div>


<?php

  array(
	'id'    => 'opt-map-1',
	'type'  => 'map',
	'title' => 'Map',
  ),

?>
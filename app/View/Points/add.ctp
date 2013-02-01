<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

	$(function(){
		var latlng = new google.maps.LatLng(48.74475534315533,2.49462890625);

		var map = new google.maps.Map(document.getElementById('gmap'), {
			zoom : 7,
			center : latlng,
			mapTypeId: google.maps.MapTypeId.TERRAIN
		});

		/********on trace le parcours en cours
		var parcours = [
	    	<?php foreach($points as $p): $p = $p['Point']; ?>
	    		new google.maps.LatLng(<?php echo $p['lat']; ?>, <?php echo $p['lng']; ?>),
	    	<?php endforeach; ?>
		];

		var traceParcours = new google.maps.Polyline({
		    path: parcours,
		    strokeColor: "#FF0000",
		    strokeOpacity: 1.0,
		    strokeWeight: 2
		});

		traceParcours.setMap(map);
		********/


		/******** le marqueur ********/

		var latlngMarker = new google.maps.LatLng(48.74475534315533,2.49462890625);

		var marker = new google.maps.Marker({
			position : latlngMarker,
			map : map,
			title : 'Bougez ce curseur',
			draggable : true
		});

		google.maps.event.addListener(marker,'drag',function(){
			setPosition(marker);
		});

		function setPosition(){
			var pos = marker.getPosition();
			$('#PointLat').val(pos.lat());
			$('#PointLng').val(pos.lng());
		}

	});

</script>

<?php
	$track_id = 3;
?>
<h3>Adding to Track 3</h3>

<?php echo $this->Html->link(__('Back to my Track'), array('controller' => 'tracks', 'action' => 'view', $track_id)); ?>

<div class="points form">
<?php echo $this->Form->create('Point'); ?>
	<fieldset>
		<legend><?php echo __('Add Point'); ?></legend>
	<?php
		echo $this->Form->input('track_id');
		echo $this->Form->input('name');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
	?>

	<div id="gmap" style="width:90%; height:450px;"></div>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>



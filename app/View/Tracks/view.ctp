<div class="tracks view">
<h2><?php  echo __('Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($track['Track']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($track['Track']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($track['Track']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($track['Track']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Days'); ?></dt>
		<dd>
			<?php echo h($track['Track']['days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Id'); ?></dt>
		<dd>
			<?php echo h($track['Track']['tourist_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($track['Track']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($track['Track']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Track'), array('action' => 'edit', $track['Track']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Track'), array('action' => 'delete', $track['Track']['id']), null, __('Are you sure you want to delete # %s?', $track['Track']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Zones'); ?></h3>
	<?php if (!empty($track['Zone'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $track['Zone']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $track['Zone']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Journey Id'); ?></dt>
		<dd>
	<?php echo $track['Zone']['journey_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Track Id'); ?></dt>
		<dd>
	<?php echo $track['Zone']['track_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
	<?php echo $track['Zone']['country']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Zone'), array('controller' => 'zones', 'action' => 'edit', $track['Zone']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($track['Journey'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tourist Id'); ?></th>
		<th><?php echo __('Guide Id'); ?></th>
		<th><?php echo __('Track Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('About'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Public'); ?></th>
		<th><?php echo __('Crew'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($track['Journey'] as $journey): ?>
		<tr>
			<td><?php echo $journey['id']; ?></td>
			<td><?php echo $journey['tourist_id']; ?></td>
			<td><?php echo $journey['guide_id']; ?></td>
			<td><?php echo $journey['track_id']; ?></td>
			<td><?php echo $journey['zone_id']; ?></td>
			<td><?php echo $journey['name']; ?></td>
			<td><?php echo $journey['about']; ?></td>
			<td><?php echo $journey['body']; ?></td>
			<td><?php echo $journey['public']; ?></td>
			<td><?php echo $journey['crew']; ?></td>
			<td><?php echo $journey['created']; ?></td>
			<td><?php echo $journey['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journeys', 'action' => 'view', $journey['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journeys', 'action' => 'edit', $journey['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journeys', 'action' => 'delete', $journey['id']), null, __('Are you sure you want to delete # %s?', $journey['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Points'); ?></h3>
	<?php if (!empty($track['Point'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Track Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lng'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($track['Point'] as $point): ?>
		<tr>
			<td><?php echo $point['id']; ?></td>
			<td><?php echo $point['track_id']; ?></td>
			<td><?php echo $point['name']; ?></td>
			<td><?php echo $point['lat']; ?></td>
			<td><?php echo $point['lng']; ?></td>
			<td><?php echo $point['created']; ?></td>
			<td><?php echo $point['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'points', 'action' => 'view', $point['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'points', 'action' => 'edit', $point['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'points', 'action' => 'delete', $point['id']), null, __('Are you sure you want to delete # %s?', $point['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add/'.$track['Track']['id'].'')	); ?> </li>
		</ul>
	</div>
</div>



<!--CARTE -->


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

		/*si on veut afficher les marqueurs*/
			/*
			<?php foreach ($track['Point'] as $p): ?>
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(<?php echo $p['lat']; ?>,<?php echo $p['lng']; ?>),
					map : map,
					draggable : false,
					animation : google.maps.Animation.DROP
				});
			<?php endforeach; ?>
			*/

	    var parcours = [
	    	<?php foreach ($track['Point'] as $p): ?>
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
		
	

	});

</script>


<div id="gmap" style="width:90%; height:450px;"></div>




<!-- FIN CARTE -->

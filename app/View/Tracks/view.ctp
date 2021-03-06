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
		<dt><?php echo __('Journey'); ?></dt>
		<dd>
			<?php echo $this->Html->link($track['Journey']['name'], array('controller' => 'journeys', 'action' => 'view', $track['Journey']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
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

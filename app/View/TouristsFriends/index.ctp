<?php // debug($touristsFriends); ?>
	<table>
	<?php
	foreach ($touristsFriends as $touristsFriend): ?>
	<tr>
		<td><?php echo h($touristsFriend['TouristsFriend']['id']); ?>&nbsp;</td>
		<td><?php echo h($touristsFriend['TouristSender']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($touristsFriend['TouristReceiver']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($touristsFriend['TouristsFriend']['status']); ?>&nbsp;</td>
		<td><?php echo h($touristsFriend['TouristsFriend']['created']); ?>&nbsp;</td>
		<td><?php echo h($touristsFriend['TouristsFriend']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $touristsFriend['TouristsFriend']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $touristsFriend['TouristsFriend']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $touristsFriend['TouristsFriend']['id']), null, __('Are you sure you want to delete # %s?', $touristsFriend['TouristsFriend']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tourists Friend'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
	</ul>
</div>

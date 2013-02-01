<div class="touristsFriends view">
<h2><?php  echo __('Tourists Friend'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($touristsFriend['TouristsFriend']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Id'); ?></dt>
		<dd>
			<?php echo h($touristsFriend['TouristsFriend']['tourist_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tourist Receive Id'); ?></dt>
		<dd>
			<?php echo h($touristsFriend['TouristsFriend']['tourist_receive_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($touristsFriend['TouristsFriend']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($touristsFriend['TouristsFriend']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($touristsFriend['TouristsFriend']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tourists Friend'), array('action' => 'edit', $touristsFriend['TouristsFriend']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tourists Friend'), array('action' => 'delete', $touristsFriend['TouristsFriend']['id']), null, __('Are you sure you want to delete # %s?', $touristsFriend['TouristsFriend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists Friends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourists Friend'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tourists'); ?></h3>
	<?php if (!empty($touristsFriend['Tourist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Media Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($touristsFriend['Tourist'] as $tourist): ?>
		<tr>
			<td><?php echo $tourist['id']; ?></td>
			<td><?php echo $tourist['first_name']; ?></td>
			<td><?php echo $tourist['last_name']; ?></td>
			<td><?php echo $tourist['bio']; ?></td>
			<td><?php echo $tourist['media_id']; ?></td>
			<td><?php echo $tourist['user_id']; ?></td>
			<td><?php echo $tourist['created']; ?></td>
			<td><?php echo $tourist['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tourists', 'action' => 'view', $tourist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tourists', 'action' => 'edit', $tourist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tourists', 'action' => 'delete', $tourist['id']), null, __('Are you sure you want to delete # %s?', $tourist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tourists'); ?></h3>
	<?php if (!empty($touristsFriend['TouristReceive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Media Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($touristsFriend['TouristReceive'] as $touristReceive): ?>
		<tr>
			<td><?php echo $touristReceive['id']; ?></td>
			<td><?php echo $touristReceive['first_name']; ?></td>
			<td><?php echo $touristReceive['last_name']; ?></td>
			<td><?php echo $touristReceive['bio']; ?></td>
			<td><?php echo $touristReceive['media_id']; ?></td>
			<td><?php echo $touristReceive['user_id']; ?></td>
			<td><?php echo $touristReceive['created']; ?></td>
			<td><?php echo $touristReceive['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tourists', 'action' => 'view', $touristReceive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tourists', 'action' => 'edit', $touristReceive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tourists', 'action' => 'delete', $touristReceive['id']), null, __('Are you sure you want to delete # %s?', $touristReceive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tourist Receive'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

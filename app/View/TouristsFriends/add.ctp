<div class="touristsFriends form">
<?php echo $this->Form->create('TouristsFriend'); ?>
	<fieldset>
		<legend><?php echo __('Add Tourists Friend'); ?></legend>
	<?php
		echo $this->Form->input('tourist_id');
		echo $this->Form->input('tourist_receive_id');
		echo $this->Form->input('status');
		echo $this->Form->input('Tourist');
		echo $this->Form->input('TouristReceive');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tourists Friends'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
	</ul>
</div>

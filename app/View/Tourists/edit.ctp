<div class="tourists form">
<?php echo $this->Form->create('Tourist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tourist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('bio');
		// echo $this->Form->input('media_id'); //de base par Gaspard
		echo $this->Uploader->iframe('Tourist',$this->request->data['Tourist']['id']); // moi : selection de l'image
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tourist.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tourist.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

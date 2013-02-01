<div class="tourists form">
	<div class="page-header">
	  <h1><?php echo __('Tourist'); ?> <small><?php echo $this->action; ?></small></h1>
	</div>
	<div class="subhead">
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tourist.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tourist.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>

			</ul>
		</div>
	</div>

	<div class="row">
		<?php echo $this->Form->create('Tourist'); ?>
		<div class="span9 form-horizontal">
			<fieldset>
				<legend><?php echo __('Edit Tourist'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('bio');
				echo $this->Form->input('media_id');
				echo $this->Form->input('user_id');
			?>
			</fieldset>
		</div>
		<div class="span3">
			<div>
				<?php
					echo $this->Form->end(array('label'=>_('Submit'),'class'=>'btn btn-primary',
					'div'=>array('class'=>'form-actions')));
				?>
			</div>
		</div>
	</div>
</div>

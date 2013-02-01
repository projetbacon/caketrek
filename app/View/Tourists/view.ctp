<div class="tourists view">
	<div class="page-header">
		  <h1><?php echo __('Tourist'); ?> <small><?php echo $this->action; ?></small></h1>
		</div>
		<div class="subhead">
			<div class="subnav">
				<ul class="nav nav-pills">
					<li><?php echo $this->Html->link(__('Edit Tourist'), array('action' => 'edit', $tourist['Tourist']['id'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Delete Tourist'), array('action' => 'delete', $tourist['Tourist']['id']), null, __('Are you sure you want to delete # %s?', $tourist['Tourist']['id'])); ?> </li>
					<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Tourist'), array('action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>


<h2><?php  echo __('Tourist'); ?></h2>
	<dl>
		<dd>
			<h3><?php echo $this->Html->link($tourist['User']['username'], array('controller' => 'users', 'action' => 'view', $tourist['User']['id'])); ?></h3>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Id'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['media_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="journeys view">
<h2><?php  echo __('Journey'); ?></h2>
	<dl>
		
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Tourist']['first_name'], array('controller' => 'tourists', 'action' => 'view', $journey['Tourist']['first_name'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guide'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Guide']['id'], array('controller' => 'guides', 'action' => 'view', $journey['Guide']['id'])); ?>
			&nbsp;
		</dd>
	
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Zone']['id'], array('controller' => 'zones', 'action' => 'view', $journey['Zone']['name'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('About'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['about']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['public']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crew'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['crew']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journey'), array('action' => 'edit', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journey'), array('action' => 'delete', $journey['Journey']['id']), null, __('Are you sure you want to delete # %s?', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
	</ul>
</div>

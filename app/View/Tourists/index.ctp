<div class="tourists index">
	<div class="page-header">
	  <h1><?php echo __('Tourists'); ?> <small><?php echo $this->action; ?></small></h1>
	</div>
	<div class="subhead">
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('New Tourist'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('bio'); ?></th>
						<th><?php echo $this->Paginator->sort('media_id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($tourists as $tourist): ?>
				<tr>
					<td><?php echo h($tourist['Tourist']['id']); ?>&nbsp;</td>
					<td><?php echo h($tourist['Tourist']['bio']); ?>&nbsp;</td>
					<td><?php echo h($tourist['Tourist']['media_id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($tourist['User']['username'], array('controller' => 'users', 'action' => 'view', $tourist['User']['id'])); ?>
					</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $tourist['Tourist']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tourist['Tourist']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tourist['Tourist']['id']), null, __('Are you sure you want to delete # %s?', $tourist['Tourist']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
				
			<div class="pagination">
				<ul>
			<?php
				echo $this->Paginator->prev('«', array('tag'=>'li'), null, array('tag'=>'li','class' => 'prev active'));
				echo $this->Paginator->numbers(array('separator' => '','tag'=>'li'));
				echo $this->Paginator->next('»', array('tag'=>'li'), null, array('tag'=>'li','class' => 'next active'));
			?>
				</ul>
			</div>
				
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?></p>
		</div>
	</div>
</div>

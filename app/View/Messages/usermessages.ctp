
<div class="messages view">
<h2><?php  echo __('Messages'); ?></h2>
	
		<?php foreach($messages as $message){ ?>
		<h4><?php echo $this->Html->link($message['User']['username'], array('controller' => 'users', 'action' => 'view', $message['User']['id'])); ?></h4>
		<dl>
		<dt><?php echo h($message['Message']['message']); ?>
			&nbsp;</dt>
		<dd>
			<i><?php echo h($message['Message']['created']); ?></i>
			
		</dd>
		</dl>
		<br />
		<?php } ?>
	
</div>


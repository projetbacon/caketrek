<?php
echo $this->Form->create('find', array(
      'type'=>'get', 'url' => array_merge(array('action' => 'index'), $this->params['pass'])
));
echo $this->Form->input('keyword', array('label' =>__('Search something'), 'div' => false, 'empty' => true));
echo $this->Form->submit(__('Search', true), array('div' => false));
echo $this->Form->end();
?>

	<div class="row">
	     <h2><?php echo __('Users') ?></h2>
	     <?php if(!empty($tourists_list)){?>
		<div class="span12">
			<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
				<tr>
						<th><?php echo __('first_name'); ?></th>
						<th><?php echo __('last_name'); ?></th>
						<th><?php echo __('username'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php
				foreach ($tourists_list as $tourist): ?>
				<tr>
					<td><?php echo h($tourist['Tourist']['first_name']); ?>&nbsp;</td>
					<td><?php echo h($tourist['Tourist']['last_name']); ?>&nbsp;</td>
					<td><?php echo h($tourist['User']['username']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(__('View'), array('controller' => 'tourists', 'action' => 'view', $tourist['User']['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		</div>
		<?php }
		else{
		    echo'<div class="alert alert-info">';
      	     echo '</i><p><i class="icon-info-sign"></i>'.__('Aucun résultat correspondant.').'</p>';
      	     echo '</div>';
		}
		 ?>
	</div>

	<div class="row">
	     <h2><?php echo __('Journeys') ?></h2>
	     <?php if(!empty($journeys_list)){?>
		<div class="span12">
			<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
				<tr>
						<th><?php echo __('name'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php
				foreach ($journeys_list as $journey): ?>
				<tr>
					<td><?php echo h($journey['Journey']['name']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(__('View'), array('controller' => 'journeys', 'action' => 'index', $journey['Journey']['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		</div>
		<?php }
		else{
		    echo'<div class="alert alert-info">';
      	     echo '<p><i class="icon-info-sign"></i>'.__('Aucun résultat correspondant.').'</p>';
      	     echo '</div>';
		}
		 ?>
	</div>

	<div class="row">
	     <h2><?php echo __('Tracks') ?></h2>
	     <?php if(!empty($tracks_list)){?>
      		<div class="span12">
      			<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
      				<tr>
      						<th><?php echo __('name'); ?></th>
      						<th class="actions"><?php echo __('Actions'); ?></th>
      				</tr>
      			<?php
      				foreach ($tracks_list as $track): ?>
      				<tr>
      					<td><?php echo h($track['Track']['name']); ?>&nbsp;</td>
      					
      					<td><?php echo $this->Html->link(__('View'), array('controller' => 'tracks', 'action' => 'index', $track['Journey']['id'])); ?></td>
      				</tr>
      			<?php endforeach; ?>
      			</table>
      		</div>
		<?php }
		else{
		    echo'<div class="alert alert-info">';
      	     echo '<p><i class="icon-info-sign"></i>'.__('Aucun résultat correspondant.').'</p>';
      	     echo '</div>';
		}
		 ?>
	</div>

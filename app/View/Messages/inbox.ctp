<?php // debug($messages); ?>

<div class="messages inbox">
<h1>Inbox</h1>
<ul>
<?php 
	foreach($messages as $m){
		if($m['User']['id']== '1'){
				echo "<li>";
				
				echo 'Conversation avec <strong>'.$m['UserReceiver']['username'].'</strong>';

				echo '----- ';

				echo ' '.$this->Html->link($m['Message']['message'] ,array('controller'=>'messages', 'action'=>'usermessages',$m['UserReceiver']['id']));
				echo ' <i>'.$m['Message']['created'].'</i>';
				echo "</li>";
		}
		elseif($m['UserReceiver']['id']== '1'){
				echo "<li>";
				
				echo 'Conversation avec <strong>'.$m['User']['username'].'</strong>';

				echo '----- ';

				echo ' '.$this->Html->link($m['Message']['message'] ,array('controller'=>'messages', 'action'=>'usermessages',$m['User']['id']));
				echo ' <i>'.$m['Message']['created'].'</i>';
				echo "</li>";
		}
	}
?>
</ul>
</div>

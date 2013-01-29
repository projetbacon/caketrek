<div class="users index">
	<div class="page-header">
	     <h1><?php echo __('Search'); ?> <small><?php echo $this->action; ?></small></h1>
	</div>
	<?php
      /*
      echo $this->Form->create('Post',array('id' => 'textBox', 'type' => 'post','url' => array('controller' => 'searches', 'action' => 'resultSearch'))); 
      echo $this->Form->input('search', array('label'=>"",'placeholder'=>'SEARCH','id'=>'search')); 
      echo $this->Form->end();
      */
      
        //création du formulaire
        echo $this->Form->create('Search', array(
            'url' => array_merge(array('action' => 'index'), $this->params['pass'])
         ));
        echo $this->Form->input('username', array('div' => false, 'empty' => true)); // empty creates blank option.
        echo $this->Form->submit(__('Search', true), array('div' => false));
        echo $this->Form->end();
      
        if(isset($_POST)){
              var_dump($_POST);
        }
        
        
    ?>
</div><!-- closing .users index -->
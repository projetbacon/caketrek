<?php
echo $this->Form->create('tourist', array(
      'type'=>'get', 'url' => array_merge(array('action' => 'find'), $this->params['pass'])
));
echo $this->Form->input('keyword', array('label' =>__('Search a tourist'), 'div' => false, 'empty' => true));
echo $this->Form->submit(__('Search', true), array('div' => false));
echo $this->Form->end();

debug($tourists_list); 

?>
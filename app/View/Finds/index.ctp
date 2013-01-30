<?php
echo $this->Form->create('find', array(
      'type'=>'get', 'url' => array_merge(array('action' => 'index'), $this->params['pass'])
));
echo $this->Form->input('keyword', array('label' =>__('Search something'), 'div' => false, 'empty' => true));
echo $this->Form->submit(__('Search', true), array('div' => false));
echo $this->Form->end();
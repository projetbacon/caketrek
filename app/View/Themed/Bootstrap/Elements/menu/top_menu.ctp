<?php $current_page = strtolower($this->viewPath);?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('caketrek', array('controller'=>'pages','action'=>'home'), array('class'=>'brand')); ?>
			<div class="nav-collapse">
				<ul class="nav">
					<li <?php if($current_page=="pages"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('PagesController', array('controller' => 'pages', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="users"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('UsersController', array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="badges"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('BadgesController', array('controller' => 'badges', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="tourists"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('TouristsController', array('controller' => 'tourists', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="finds"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('FindsController', array('controller' => 'finds', 'action' => 'index')); ?>
					</li>
				</ul>
				<?php
				echo'<div class="input-append">';
				echo $this->Form->create('find', array(
                              'type'=>'get', 'url' => array_merge(array('action' => 'index'), $this->params['pass'])
                        ));
                        echo'<div class="input-append">';
                        echo $this->Form->input('keyword', array('label' => false, 'placeholder' => __('Search'), 'div' => false, 'empty' => true, 'class'=>'search-query'));
                        echo $this->Form->button(__('Go', true), array('div' => false, 'class'=>'btn'));
                        echo'</div>';
                        echo $this->Form->end();
                        ?>
			</div>
		</div>
	</div>
</div>
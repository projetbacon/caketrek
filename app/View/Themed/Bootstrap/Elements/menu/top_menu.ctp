<?php $current_page = strtolower($this->viewPath);?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav pull-right connect">
			<li class="divider-vertical"></li>
			
			<?php if($me['id'] != 0) :?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php echo $me['username']; ?>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li>
						<?php echo $this->Html->link('Logout', array('controller'=>'users','action' => 'logout' )); ?>
					</li>
				</ul>
			</li>
			<?php else: ?>
				<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
				<li class="divider-vertical"></li>
				<li><?php echo $this->Html->link('Signup', array('controller' => 'users', 'action' => 'add')); ?></li>
				
			<?php endif; ?>
			</ul>
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('caketrek', array('controller'=>'pages','action'=>'home'), array('class'=>'brand')); 
			  //form
			   echo $this->Form->create('find', array(
                              'type'=>'get','class'=>'navbar-search pull-right','url' => array_merge(array('action' => 'index'), $this->params['pass'])
                        ));
                        echo $this->Form->input('keyword', array('label' => false, 'placeholder' => __('Search'), 'div' => false, 'empty' => true, 'class'=>'search-query'));
                        echo $this->Form->end();
			   ?>
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
			</div>
		</div>
	</div>
</div>
<?php 
	
	$current_page = $this->params['action'];

?>

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
					<li <?php if($current_page=="index"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Scaffolding', array('controller' => 'pages', 'action' => 'scaffolding')); ?>
					</li>
					<li <?php if($current_page=="base_css"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Base CSS', array('controller' => 'pages', 'action' => 'base_css')); ?>
					</li>
					<li <?php if($current_page=="components"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Components', array('controller' => 'pages', 'action' => 'components')); ?>
					</li>
					<li <?php if($current_page=="javascript"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Javascript plugins', array('controller' => 'pages', 'action' => 'javascript')); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
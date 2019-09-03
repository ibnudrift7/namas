<?php
$this->breadcrumbs=array(
	'Menu Akses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MenuAkses','url'=>array('index')),
	array('label'=>'Add MenuAkses','url'=>array('create')),
);
?>

<h1>Manage Menu Akses</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'menu-akses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'name',
		'controller',
		'action',
		'sub_action',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

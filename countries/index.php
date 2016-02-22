<h1>Countries</h1>

<?php echo CHtml::link("Crear",array("create")); /* echo CHtml::link("Crear",array("create")); ?>
<?php foreach ($countries as $data): ?>
<h3><?php echo $data->name; ?> <small> <?php echo $data->status==1?"Enabled":"Disabled"; ?> </small></h3>
<?php echo $data->id; ?> <?php echo CHtml::link("Actualizar",array("update","id"=>$data->id)); ?>
<?php endforeach; */  ?>

<?php 

 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		array(
                    'class'=>'CLinkColumn',
                    'labelExpression'=>'$data->id',
                    'urlExpression'=>'"update/".$data->id.".php"',
                    'header'=>'id'
                    ),
		'name',
		array(
                    'class'=>'CLinkColumn',
                    'labelExpression'=>'$data->status?Enabled:Disabled',
                    'urlExpression'=>'"enabled/".$data->id.".php"',
                    'header'=>'status'
                    ),
		array(
                    'name'=>'',
                    'type'=>'raw',
                    'value'=>'CHtml::link(Eliminar,array("countries/delete/".$data->id),array("confirm"=>"Estas Seguro?","title"=>"Borrar Pais"))'
                    ),
		array(
                    'name'=>'',
                    'type'=>'raw',
                    'value'=>'CHtml::link(Ver,array("countries/view/".$data->id))'
                    ),
		
	),
)); 

 ?>
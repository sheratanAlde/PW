<!DOCTYPE html>
<html>
<head>
	<title>Buscador por nombre</title>
</head>
<body>

 <?= form_open(base_url().'index.php/Buscador/BusquedaJPorNombre',
 array('name'=>'mi_form','id'=>'form'));?>
 <?= form_label('Nombre','Nombre',array('class'=>'label')); ?>
 <?= form_input('Nombre','','class="input"') ?> <br />
 
 <?= form_submit('submit', 'Enviar datos','class="submit"');?>
 <?= form_close(); ?>

</body>
</html>

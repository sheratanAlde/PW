<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de productora</title>
    </head>
    <body>
        <h1>Registrar productora</h1>
        <?= form_open(base_url() . 'index.php/Admin/verifyRegisterProductora/0', array('name' => 'form_reg')); ?>
        <?= form_label('Nombre', 'Nombre'); ?>
        <?= form_input('Nombre', @set_value('Nombre')) ?><br/><br/>
        <?= form_submit('submit_reg', 'Registrar'); ?>

        <a href="<?= base_url() . 'index.php/Admin/' ?>" title="PanelAdmin">Panel de Administración</a>

        <?= form_close(); ?>
        <hr/>
        <?= validation_errors(); ?>
    </body>
</html>

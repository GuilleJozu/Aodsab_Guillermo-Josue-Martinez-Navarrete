<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<?= esc($title) ?>




<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/DataTables-1.11.5/css/dataTables.bulma.min.css') ?>">
 
<script type="text/javascript" src="<?php echo base_url('assets/DataTables/DataTables-1.11.5/js/dataTables.bulma.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/DataTables/datatables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/DataTables/datatables.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/DataTables/jquery.dataTables.min.js') ?>"></script>


<div>
    <a href="/periodista/create" class="button is-link">Agregar</a>
</div>
<br>


<!-- IMPLEMENTACIÓN DE DATATABLES -->

	<table id="example" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead class="thead">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Area</th>
                <th>Biografia</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody class="tbody">

		<?php if (! empty($periodistas) && is_array($periodistas)): ?>
		<?php foreach ($periodistas as $periodista): ?>

            <tr>
                <td><?= esc($periodista['nombre']) ?></td>
                <td><?= esc($periodista['apellidos']) ?></td>
                <td><?= esc($periodista['area']) ?></td>
                <td><?= esc($periodista['bio']) ?></td>
                <td><?= esc($periodista['email']) ?></td>
                <td><?= esc($periodista['telefono']) ?></td>
                

                <td>
                	<a class="button is-link">ver</a>
                	<a class="button is-link" >editar</a>
                	<a class="button is-danger">eliminar</a>
               
                </td>
            </tr>

		<?php endforeach ?>

        </tbody>

    <?php else: ?>
		<p>No hay datos</p>
	<?php endif ?>




<!-- SCRIPT PARA INICIALIZAR EL DATATABLES -->

<script type="text/javascript" class="init">
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>


<script type="text/javascript" src="/media/js/site.js?_=64232ba754b2748258f2324e5f9e21f9"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fbuttons%2Fexamples%2Finitialisation%2Fexport.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
	


<?= $this->endsection() ?>

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/staff/create" method="post">
        <?= csrf_field() ?>




        <div class="field">
            <label class="label" for="">Nombre:</label>
            <div class="control">
                <input class="input" type="text" name="nombre" id="">
            </div>
        </div>
         <div class="field">
            <label class="label" for="">Apellido:</label>
            <div class="control">
                <input class="input" type="text" name="apellidos" id="">
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Funcion:</label>
            <div class="control">
                <input class="input" type="text" name="funcion" id="">
            </div>
        </div>    
        <div class="field">
            <label class="label" for="">Descripcion de la funcion:</label>
            <div class="control">
                <textarea class="textarea" name="descripcionFuncion" placeholder="Contenido de la noticia"></textarea>                
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Fecha:</label>
            <div class="control">
                <input class="input" type="date" name="fechaIngreso" id="">
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Activo:</label>  
            <div class="control">
                <label class="radio">
                    <input type="radio" name="activo">
                    Si
                </label>
                <label class="radio">
                    <input type="radio" name="activo" checked>
                    No
                </label>
            </div>
         </div>
         <div class="field">
            <label class="label" for="">Salario:</label>
            <div class="control">
                <input class="input" type="text" name="salario" id="">
            </div>
        </div> 
        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button is-link" value="Guardar">
            </div>
            <div class="control">
                <input type="reset" value="Restablecer" class="button is-link is-light">
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
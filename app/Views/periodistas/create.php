<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/periodista/create" method="post">
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
            <label class="label" for="">Area:</label>
            <div class="control">
                <input class="input" type="text" name="area" id="">
            </div>
        </div>    
        <div class="field">
            <label class="label" for="">Biografia</label>
            <div class="control">
                <textarea class="textarea" name="bio" placeholder="Biografia"></textarea>                
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Email:</label>
            <div class="control">
                <input class="input" type="email" name="email" id="">
            </div>
        </div>
        
         
         <div class="field">
            <label class="label" for="">Telefono:</label>
            <div class="control">
                <input class="input" type="text" name="telefono" id="">
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
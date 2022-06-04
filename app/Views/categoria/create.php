<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/categoria/create" method="post">
        <?= csrf_field() ?>



        <div class="field">
            <label class="label" for="">Nueva Categoria:</label>
            <div class="control">
                <input class="input" type="text" name="nombre" id="">
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Contenido:</label>
            <div class="control">
                <textarea class="textarea" name="descripcion" placeholder="Contenido de la noticia"></textarea>                
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
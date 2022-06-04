<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="<?= base_url('categoria/update/'.$new) ?>" method="put">
        <?= csrf_field() ?>

        <input type="hidden" name="id">

        <div class="field">
            <label class="label" for="">Nombre:</label>
            <div class="control">
                <input class="input" type="text" name="nombre" id="">
             </div>
        </div>
        <div class="field">
            <label class="label" for="">Descripcion:</label>
            <div class="control">
                <textarea class="textarea" name="descripcion" placeholder="Contenido de la noticia"><?= $new['descripcion'] ?></textarea>
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
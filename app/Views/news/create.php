<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/news/create" method="post">
        <?= csrf_field() ?>

        <div>
            <label for="">Categoría de la noticia:</label>
            <div class="control">
                <select name="categoria" id="" class="select">
                    <?php foreach($categorias as $c): ?>
                        <option value="<?= esc($c['id']); ?>"><?= esc($c['nombre']); ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div>
            <label for="">Periodista</label>
            <div class="control">
                <select name="periodista" id="" class="input">
                    <?php foreach($periodistas as $p): ?>
                        <option value="<?= esc($p['id']); ?>"><?= esc($p['nombre']); ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div>
            <label for="">Staff que Aprueba:</label>
            <div class="control">
                <select name="staff" id="" class="input">
                    <?php foreach($staffs as $s): ?>
                        <option value="<?= esc($s['id']); ?>"><?= esc($s['nombre']); ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>


        <div class="field">
            <label class="label" for="">Título:</label>
            <div class="control">
                <input class="input" type="text" name="title" id="">
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Contenido:</label>
            <div class="control">
                <textarea class="textarea" name="body" placeholder="Contenido de la noticia"></textarea>                
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
<?= esc($title) ?>

<?php if (! empty($news) && is_array($news)): ?>
	<?php foreach ($news as $new): ?>
    
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <?= esc($new['title']) ?>
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <?= esc($new['body']) ?>
                </div>
            </div>
            <footer class="card-footer">
                <a href="#" class="card-footer-item">Ver más</a>
                <a href="#" class="card-footer-item">Editar</a>
                <a href="#" class="card-footer-item">Eliminar</a>
            </footer>
        </div>
        
	<?php endforeach ?>
<?php else: ?>
	<p>No hay datos</p>
<?php endif ?>
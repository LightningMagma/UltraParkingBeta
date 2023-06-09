<h2><?= esc($title) ?></h2>

<?php if (! empty($parqueo) && is_array($parqueo)): ?>

    <?php foreach ($parqueo as $parqueo_item): ?>

        <h3><?= esc($parqueo_item['vehplaca']) ?></h3>

        <div class="main">
            <?= esc($parqueo_item['vehtipo']) ?>
        </div>
        <p><a href="/parqueo/<?= esc($parqueo_item['vehplaca'], 'url') ?>">View article</a></p>
        <p><a href="/parqueo/update/<?= esc($parqueo_item['vehplaca'], 'url') ?>">Editar</a></p>
        <form action="/parqueo/delete/" method="post">
        <?= csrf_field() ?>
            <input type="hidden" name="vehplaca" value="<?= esc($parqueo_item['vehplaca']) ?>">
            <input type="submit" value="Eliminar">
        </form>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/parqueo/create" method="post">
    <?= csrf_field() ?>

    <label for="vehplaca">Title</label>
    <input type="input" name="vehplaca" value="<?= set_value('vehplaca') ?>">
    <br>

    <label for="vehtipo">Text</label>
    <input type="input" name="vehtipo" value="<?= set_value('vehtipo') ?>">
    <br>

    <label for="vehconductor">Text</label>
    <input type="input" name="vehconductor" value="<?= set_value('vehconductor') ?>">
    <br>

    <input type="submit" name="submit" value="Create parking item">
</form>
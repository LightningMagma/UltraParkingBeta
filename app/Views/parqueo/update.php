<form action="/parqueo/update" method="post">
    <?= csrf_field() ?>

    <label for="vehplaca">Title</label>
    <input type="text" name="vehplaca" value="<?= esc($parqueo['vehplaca']) ?>">
    <br>

    <label for="vehtipo">Noticia:</label>
    <input type="text" name="vehtipo" value="<?= esc($parqueo['vehtipo']) ?>" required><br><br>
    <br>
    
    <label for="vehconductor">Noticia:</label>
    <input type="text" name="vehconductor" value="<?= esc($parqueo['vehconductor']) ?>" required><br><br>
    <br>

    <input type="submit" name="submit" value="enviar">
</form>
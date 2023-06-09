<form action="/news/update" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="text" name="title" value="<?= esc($news['title']) ?>">
    <br>

    <label for="body">Noticia:</label>
    <input type="text" name="body" value="<?= esc($news['body']) ?>" required><br><br>
    <br>
    <input type="hidden" name="id" value='<?= esc($news['id']) ?>'>
    <input type="submit" name="submit" value="enviar">
</form>
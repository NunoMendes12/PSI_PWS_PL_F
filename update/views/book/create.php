<h2 class="text-left top-space">Book Create</h2>
<h2 class="top-space"></h2>
<br>
<form action="router.php?c=book&a=store" method="post"
      <div class="mb-3">
          <label for="name" class="form-label"> Name Book</label>
          <input type="text" class="form-control" name="name">
      </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn">
    </div>
        <label for="genre_id">Genre:</label><br>
        <select name="genre_id">

    <?php foreach($genres as $genre){?>
        <option value="<?= $genre->id?>"> <?= $genre->name; ?></option>
    <?php } ?>
    </select>

    <br><br><br><button type="submit" class="btn btn-primary"> Adicionar </button>
    <a href="router.php?c=book&a=index" class="btn btn-info" role="button"> Cancelar</a>
</form>
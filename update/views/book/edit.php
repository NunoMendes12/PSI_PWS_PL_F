<h2 class="text-left top-space">Book Edit</h2>
<h2 class="top-space"></h2>
<br>
<form action="router.php?c=book&a=update&id=<?= $book->id ?>" method="post"
    <div class="mb-3">
        <label for="name" class="form-label"> Name Book</label>
        <input type="text" class="form-control" name="name" value="<?= $book->name ?>"> <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>
    </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="<?= $book->isbn ?>">
    </div>

    <button type="submit" class="btn btn-primary"> Enviar </button>
    <a href="router.php?c=book&a=index" class="btn btn-info" role="button"> Cancelar</a>
</form>



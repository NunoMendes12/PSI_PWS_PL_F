requiere

<h2 class="text-left top-space"> Criar Fatura</h2>
<h2 class="top-space"></h2>
<br>
<form action="route.php?c=fatura&a=store" method="post">
      <div class="mb-3">
          <label for="name" class="form-label"> <?php carbon::now()?></label>
          <input type="text" class="form-control" name="name">
      </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn">
    </div>
        <label for="genre_id">Genre:</label><br>
        <select name="genre_id">
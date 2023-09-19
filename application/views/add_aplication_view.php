
<form method = "POST" action = "applic/add_application" enctype="multipart/form-data"
>
<div class="col-4">
    <label for="name" class="form-label">Название </label>
    <input type="text" class="form-control" id="name" name="name">
  
  <div class="input-group">
  <span class="input-group-text">Описание</span>
  <textarea class="form-control" aria-label="Описание" name ="discription"></textarea>
</div>
<label for="exampleInputEmail1" class="form-label">Выберите категорию</label>
  <select class="form-control" name="name_category" id="name_category">
  <?php
  foreach($category as $row){
    echo'   
    <option value="'.$row['id_category'].'">'.$row['name_category'].'</option>';
    }
  ?>
 </select>
        </div>
 <div ></div>          
<div class="mb-3">
<label for="photo" class="form-label">Добавьте фото<font color="red">*</font></label>
  <div class="col-sm-10">
<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
<input type="file" class="form-control" id="photo" name = 'photo' accept="image/*" required>  
</div>
</div>
<button type="submit" class="btn btn-primary">Отправить заявку</button>
</form>
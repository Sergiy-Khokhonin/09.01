<form medhod = "$_POST" action = "applic/add_application">
<div class="col-4">
    <label for="name" class="form-label">Название </label>
    <input type="text" class="form-control" id="name" name="name">
  
  <div class="input-group">
  <span class="input-group-text">Описание</span>
  <textarea class="form-control" aria-label="Описание" name ="discription"></textarea>
</div>
<select class="form-select" aria-label="Категории">
  <option selected></option>
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
</div>
<div class="col-4">
  <label for="formFile" class="form-label">Пример ввода файла по умолчанию</label>
  <input class="form-control" type="file" id="photo" name ="photo">
</div>
<button type="submit" class="btn btn-primary">Отправить заявку</button>
</form>
<div class="container">
<div class="row">
<div class="col-4"></div>
<div class="col-4">

<form method="POST" action="main/add_user">

<div class="mb-3">
    <label for="FIO" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="fio" name="fio">
  </div>
  <div class="mb-3">
    <label for="Login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3 ">
  <label for="Mail" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password1"name="password1">
  </div>
  <div class="mb-3">
    <label for="Password2" class="form-label">Повторить пароль</label>
    <input type="password" class="form-control" id="password2" name="password2">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Согласие на обработку персональных данных
  </label>
</div>
  <button type="submit" class="btn btn-primary">Регистрация</button>
</form>
</div>
</div>
<div class="col-4"></div>
</div>
</div>
</section>
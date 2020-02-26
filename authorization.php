<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    require_once 'blocks/head.php';
    ?>
</head>
<body>
    <div id="app">
      <?
        require_once 'blocks/header.php';
        ?>   

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Регистрация</div>

                            <div class="card-body">
                                <form method="POST" action="form-processing/reg.php">

                                    <div class="form-group row">
                                        <label for="nameReg" class="col-md-4 col-form-label text-md-right">Имя</label>

                                        <div class="col-md-6">
                                            <input type="text" name="nameReg" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="loginReg" class="col-md-4 col-form-label text-md-right">Логин</label>

                                        <div class="col-md-6">
                                            <input type="text" name="loginReg" class="form-control">
                                        </div>
                                    </div>                                    


                                    <div class="form-group row">
                                        <label for="emailReg" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                                        <div class="col-md-6">
                                            <input id="emailReg" type="email" class="form-control" name="emailReg" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="passwordReg" class="col-md-4 col-form-label text-md-right">Пароль</label>

                                        <div class="col-md-6">
                                            <input id="passwordReg" type="password" class="form-control " name="passwordReg"  autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="passwordConfirmReg" class="col-md-4 col-form-label text-md-right">Повторите пароль</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="passwordConfirmReg"  autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-primary">
                                                Зарегистрироваться 
                                            </button>
                                            
                                        </div>

                                    </div>
                                    <div class="form-group row mb-0 my-4" >
                                        <div class="col-md-6 offset-md-4">
                                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                                                 Авторизоваться
                                            </button>
                                            
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group row">
                <label for="login_auth" class="col-md-4 col-form-label text-md-right">Имя</label>
                <div class="col-md-6">
                    <input type="text" name="login_auth" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="password_auth" class="col-md-4 col-form-label text-md-right">Логин</label>
                <div class="col-md-6">
                    <input type="text" name="password_auth" class="form-control">
                </div>

            </div>
            <div class="btn-auth">
                <div>
                    <button class="btn btn-outline-primary ">Войти</button>
                </div>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

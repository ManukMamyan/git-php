<h1>Регистрация нового пользователя</h1>

<?php if ($error) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endif ?>

<form method="post">
    <div class="form-group">
        <label for="exampleInputName1">Name<code>*</code></label>
        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Ivan">
    </div>
    <div class="form-group">
        <label for="exampleInputLogin1">Login<code>*</code></label>
        <input type="text" name="login" class="form-control" id="exampleInputLogin1" placeholder="Enter login">
        <small id="loginHelp" class="form-text text-muted">По логину будет производиться авторизация на сайте</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address<code>*</code></label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password<code>*</code></label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" name="register_btn" class="btn btn-primary">Зарегистрироваться</button>
</form>
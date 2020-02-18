<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="w-50" style="margin:100px auto">
     <h1 class="text-primary">Администратор</h1>
    <form action="{{route('checkAdmin')}}" method="post" class="was-validated" >
    @csrf
  <div class="form-group">
    <label for="uname">Логин:</label>
    <input type="text" name="adminName" class="form-control" id="uname" placeholder="Введите имя пользователя" name="uname" required>
    <div class="valid-feedback">хорошо</div>
    <div class="invalid-feedback">Пожалуйста, заполните это поле.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Пароль:</label>
    <input type="password" name="password" class="form-control" id="pwd" placeholder="Введите пароль" name="pswd" required>
    <div class="valid-feedback">хорошо</div>
    <div class="invalid-feedback">Пожалуйста, заполните это поле.</div>
  </div>
 
  <button type="submit" class="btn btn-primary">Вход</button>
</form>
</div>
   

</body>
</html>
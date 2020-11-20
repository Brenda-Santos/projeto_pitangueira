<!DOCTYPE html>
<html>
    
<head>  
    <link rel="stylesheet" type="text/css" href="css1/style1.css">
</head>

<body style="background-image: url(img/wall.jpg);">
<script src="https://use.typekit.net/rjb4unc.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<div class="container">

    <div class="logo"></div>
    <div class="login-item">Bem vindo!
      <form action="login.php" method="POST" class="form form-login">
        <div class="form-field">
          <label class="user" for="login-username"><span class="hidden">Usuário</span></label>
          <input name="usuario" id="login-username" type="text" class="form-input" placeholder="Usuário" required>
        </div>

        <div class="form-field">
          <label class="lock" for="login-password"><span class="hidden">Password</span></label>
          <input name="senha" id="login-password" type="password" class="form-input" placeholder="Senha" required>
        </div>

        <div class="form-field">
          <input type="submit" value="Entrar">
        </div>
      </form>
    </div>
</div>

</body>
</html>

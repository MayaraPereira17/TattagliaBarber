<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    
    <link rel="stylesheet" href="styleLogin.css">
    
</head>
<body>
 
    <main class="container">
      <h2>Login</h2>
      <form method="post" action="valida-login.php">
        <form action="">
            <div class="input-field">
                <input type="text" name="username" id="username" 
                    placeholder="Enter Your Username">
                <div class="underline"></div>    
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" 
                    placeholder="Enter Your Password">
                <div class="underline"></div>    
            </div>
          
            <input type="submit" value="Continue">
            <a href="index.php">
        <input type="button" value="Voltar">
    </a>
        </form>
        
    
      </form>

    </main>

</body>
</html>
<?php require 'views/header.php' ?>
    

<h1>Register</h1>

<form action="admin/setRegister.php" method="POST">
    <input type="text" name="correo" placeholder="Correo">
    <input type="password" name="password" id="password">
    <input type="submit" value="Enviar">
</form>

    
<?php require 'views/footer.php' ?>

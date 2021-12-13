<form action="login.php" method="post" autocomplete="on">
    <h3>Ingresar</h3>
    <hr>
    <p>
        <label for="username" class="uname" data-icon="u">Usuario</label>
        <input type="text" name="username" id="username" required="required">
    </p>
    <p>
        <label for="password" class="passwd" data-icon="p">Contraseña</label>
        <input type="password" name="password" id="password" required="required">
    </p>
    <p>
        <input type="submit" value="Ingresar" name="login">  
    </p>
    <p class="change_link">
        ¿No estás registrado?
        <a href="/DaftClub/sign_up_form.php" class="to_register">Regístrate</a>
    </p>
</form>
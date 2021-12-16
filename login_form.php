<form action="login.php" method="post" autocomplete="on" id="form_login_style">
    <h3>Ingresar</h3>
    <p>
        <label for="username" class="uname" data-icon="u"></label>
        <input type="text" name="username" id="username" required="required" placeholder="Usuario" style="width: 50% color:#333333;">
    </p>
    <p>
        <label for="password" class="passwd" data-icon="p"></label>
        <input type="password" name="password" id="password" required="required" placeholder="Contraseña" style="width:50% color:#333333;">
    </p>
    <p>
        <input type="submit" value="Ingresar" name="login" id="btn_login">  
    </p>
    <p class="change_link">
        ¿No estás registrado?
        <a href="/DaftClub/sign_up_form.php" class="to_register"> <br>Regístrate</a>
    </p>
</form>
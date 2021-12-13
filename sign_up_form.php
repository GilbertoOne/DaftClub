<form action="signup_save.php" method="post" autocomplete="on">
    <h4>Registro</h4>
    <hr>
    <p>
        <label for="usernamesignup" class="uname" data-icon="u">Usuario</label>
        <input type="text" name="username" id="usernamesignup" required="required" placeholder="Usuario">
    </p>
    <p>
        <label for="passwordsignup" class="passwd">Contraseña</label>
        <input type="password" name="password" id="passwordsignup" required="required" placeholder="Contraseña">
    </p>
    <p>
        <label for="firstnamesignup" class="firstname">Nombre</label>
        <input type="text" name="firstname" id="firstnamesignup" required="required" placeholder="Nombre">
    </p>
    <p>
        <label for="lastnamesignup" class="lastname">Apellido</label>
        <input type="text" name="lastname" id="lastnamesignup" required="required" placeholder="Apellido">
    </p>
    <p> 
        <label for="gendersignup" class="gender" data-icon="">Sexo</label>
		<select id="gendersignup"  name="gender">
            <option></option>
            <option>Hombre</option>
            <option>Mujer</option>
		</select>
    </p>
    <p> 
        <label for="musicgendersignup" class="musicgender" data-icon="">Género musical favorito</label>
		<select id="musicgendersignup"  name="musicgender">
            <option></option>
            <option>Rock</option>
            <option>Pop</option>
            <option>Electrónica</option>
            <option>Boleros</option>
		</select>
    </p>
    <p>
        <input type="submit" value="Sign up">
    </p>
    <p class="change_link">
        ¿Ya estás registrado?
        <a href="/DaftClub/index.php" class="to_register">Ingresar</a>
    </p>
</form>
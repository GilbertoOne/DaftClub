<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>DaftClub</title>
</head>
<body style="background: #333333"  class="fadeClass">
<form action="signup_save.php" method="post" autocomplete="on" id="sign_up_form">
    <h4>Registro</h4>
    <p>
        <label for="usernamesignup" class="uname" data-icon="u"></label>
        <input type="text" style="width: 70%" name="username" id="usernamesignup" required="required" placeholder="Usuario">
    </p>
    <p>
        <label for="passwordsignup" class="passwd"></label>
        <input type="password" style="width: 70%" name="password" id="passwordsignup" required="required" placeholder="Contraseña">
    </p>
    <p>
        <label for="firstnamesignup" class="firstname"></label>
        <input type="text" style="width: 70%" name="firstname" id="firstnamesignup" required="required" placeholder="Nombre">
    </p>
    <p>
        <label for="lastnamesignup" class="lastname"></label>
        <input type="text" style="width: 70%" name="lastname" id="lastnamesignup" required="required" placeholder="Apellido">
    </p>
    <p> 
        <label for="gendersignup" class="gender" data-icon="">Sexo <br></label>
		<select id="gendersignup"  name="gender" style="width:70%;">
            <option></option>
            <option style="color:#333333">Hombre</option>
            <option  style="color:#333333">Mujer</option>
		</select>
    </p>
    <p> 
        <label for="musicgendersignup" class="musicgender" data-icon="">Género musical favorito <br></label>
		<select id="musicgendersignup"  name="musicgender" style="width:70%;">
            <option></option>
            <option style="color:#333333">Rock</option>
            <option style="color:#333333">Pop</option>
            <option style="color:#333333">Electrónica</option>
            <option style="color:#333333">Boleros</option>
		</select>
    </p>
    <p>
        <input type="submit" value="Sign up" id="btn_sign_up">
    </p>
    <p class="change_link">
        ¿Ya estás registrado?
        <a href="index.php" class="to_register">Ingresar</a>
    </p>
</form>
</body>
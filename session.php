<?php
session_start();
    if ($_SESSION['inicio'] == 'miguelbaco') {
        if(isset($_POST['salir'])) {
            session_unset();
            echo "Vuelva pronto";
            // header("Location: http://localhost/session.php"); Podría insertar esto para que tenga que volver a registrarse
            // O directamente poner aquí el formulario con el mensaje de vuelva pronto
        } else {
        ?>
            <!Doctype html>
            <html>
            <head>
                <meta charset="UTF-8">
                <title>Bienvenido miguel</title>
            </head>
            <body>
                <h4>Pulsa en el botón para salir</h4>
                <form action="session.php" method="post">
                    <input type="submit" id="salir" name="salir" value="salir"><br>
                </form>
                <!-- Aquí dentro podríamos mostrar todo lo que quisieramos y que se pueda hacer como usuario registrado,
                podríamos implementar algo parecido a los dos formularios hechos en el trabajo hecho con servlet de base de datos
                de forma que el trabajador del cine pueda ingresar las nuevas entradas o consultar en la base de datos mediante su usuario
                dentro de esta página -->
            </body>
            </html>
        <?php
        }
    } elseif(isset($_POST['name'])) {
        $nombre = $_POST['name'];
        if($nombre == "miguelbaco") {
            if($_POST['contra'] == "123456789") {
                $_SESSION["inicio"] = "miguelbaco";
                header("Location: http://localhost/session.php");
            } else {
                echo 'La contraseña es inválida';
            }
        } else {
            echo 'El usuario ingresado, ' . $nombre . ' no esta registrado';
        }
    } else {
?>
    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
    <form action="session.php" method="post">
        Nombre: <input type="text" id="name" name="name"><br>
        Contraseña: <input type="password" id="contra" name="contra"><br>
        <input type="submit" value="Entrar"><br/> 
    </form>
    </body>
    </html>

<?php
    }
?>
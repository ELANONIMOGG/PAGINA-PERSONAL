<?php
if(isset($_POST['email'])) {
 
    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "Contactoelanonimo1@gmail.com";
    $email_subject = "Contacto desde el sitio web";
 
    // Aquí se deberían validar los datos ingresados por el usuario
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) || 
        !isset($_POST['Message']) ||
        !isset($_POST['subject'])) {
 
        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
    }

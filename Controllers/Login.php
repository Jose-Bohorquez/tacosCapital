<?php
class Login {
    public function index() 
    {
        // Obtener parámetros del formulario si la solicitud es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                print_r($_POST['usu_ing']);
                var_dump($_POST);
        }
    }

}

?>
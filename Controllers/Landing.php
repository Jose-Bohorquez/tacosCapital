<?php
class Landing {
    public function inicio() {
        // Incluir la vista correspondiente para Landing
        require_once('Views/Landing/Layouts/header1.php');
        require_once('Views/Landing/Layouts/botonTema2.php');
        require_once('Views/Landing/Layouts/navbar3.php');
        require_once('Views/Landing/Pages/inicio.php');        
        require_once('Views/Landing/Layouts/footer4.php');

    }

    public function contacto() 
    {
        // Incluir la vista correspondiente para Landing
        require_once('Views/Landing/Layouts/header1.php');
        require_once('Views/Landing/Layouts/botonTema2.php');
        require_once('Views/Landing/Layouts/navbar3.php');
        require_once('Views/Landing/Pages/contacto.php');        
        require_once('Views/Landing/Layouts/footer4.php');
    }

    public function FAQS() 
    {
        // Incluir la vista correspondiente para Landing
        require_once('Views/Landing/Layouts/header1.php');
        require_once('Views/Landing/Layouts/botonTema2.php');
        require_once('Views/Landing/Layouts/navbar3.php');
        require_once('Views/Landing/Pages/FAQS.php');        
        require_once('Views/Landing/Layouts/footer4.php');
    }
    
    public function checkout() 
    {
        // Incluir la vista correspondiente para Landing
        require_once('Views/Landing/Layouts/header1.php');
        require_once('Views/Landing/Layouts/botonTema2.php');
        require_once('Views/Landing/Layouts/navbar3.php');
        require_once('Views/Landing/Pages/checkout.php');        
        require_once('Views/Landing/Layouts/footer4.php');
    }
    
    // Puedes agregar más métodos según necesites
}

<?php
class WebController{
    public function index(){
        require_once "model/model.php";
        $web = new Web_model();
        $data["titulo"] = "Convocatorias";
        $data["Convocatorias"] = $web -> get_convocatorias();
        require_once "view/principal.php";
    }
}
?>
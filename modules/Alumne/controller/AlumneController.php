<?php
require_once(MODEL_ALUMNE.'AlumneModel.php');
class AlumneController{
    function __construct(){
        $this->model=new AlumneModel();
    }

    public function llistar(){
        $list=$this->model->llistarM();
        include_once(VIEW_ALUMNE.'/AlumneLlistar.php');
    }

    public function alta(){
            
        if (isset($_POST['data'])) {
             $array=json_decode($_POST['data'], true);
            $data=[];
            foreach ($array as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->altaM($data);
            header('Location: index.php');
        } else {
            include_once(VIEW_ALUMNE.'/AlumneAlta.html');
        }
        
    }
    public function get_grup(){
        
    }
}
?>
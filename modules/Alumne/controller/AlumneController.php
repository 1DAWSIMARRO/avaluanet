<?php
require_once(MODEL_ALUMNE.'AlumneModel.php');
require_once(MODEL_GRUP.'GrupModel.php');
class AlumneController{
    function __construct(){
        $this->model=new AlumneModel();
        $this->modelG=new GrupModel();
    }

    public function llistar(){
        include_once(VIEW_D.'header.html');
        $list=$this->model->llistarM();
        include_once(VIEW_ALUMNE.'/AlumneLlistar.php');
    }

    public function alta(){
        include_once(VIEW_D.'header.html');
        if (isset($_POST['data'])) {
            $array=json_decode($_POST['data'], true);
            $data=[];
            foreach ($array as $key => $value) {
                $data[$key] = $value;
            }
            $this->model->altaM($data);
        } else {
            if (isset($_GET['NIA'])) { // Take data for edit and enjoy
                $data=$this->model->findM($_GET['NIA']);
            }
            echo '<script src="'.VIEW_ALUMNE.'comprobar.js"></script>';
            $grups=$this->modelG->llistarM();
            print_r($grups[0]['codi']);
            include_once(VIEW_ALUMNE.'AlumneAlta.php');
        }
        
    }

    public function regProf(){
        echo "enter Professor";
        $this->model->registrarM();
    }

    public function delete(){
        $this->model->deleteM($_GET['NIA']);
        header('Location: index.php');
    }

    public function edit(){
        $array=json_decode($_POST['data'], true);
        $data=[];
        foreach ($array as $key => $value) {
            $data[$key] = $value;
        }
        $this->model->editM($data);
    }

    // public function get_grup(){
        
    // }
}
?>
<?php
// require_once('modules/alumne/model/AlumneModel.php');
class ProfessorController{

    function __construct(){
        // $this->model=new LoginModel();
    }

    public function login(){
        // $list=$this->model->llistarM();
        include_once(VIEW_PROFESSOR.'/LoginList.html');
    }

    // public function alta(){
    //     if (isset($_POST['NIA'])) {
    //         $data=[];
    //         foreach ($_POST as $key => $value) {
    //             $data[$key] = $value;
    //         }
    //         $this->model->altaM($data);
    //         header('Location: index.php');
    //     } else {
    //         include_once('modules/alumne/view/addalumn.html');
    //     }
        
    // }
}
?>
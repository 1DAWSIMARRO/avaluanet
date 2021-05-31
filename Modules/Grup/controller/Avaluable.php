<?php
class Avaluable {

  public $id;
  public $dataLliurament;
  public $tipus;
  public $ponderacio;
  public $avaluacio;

  function __construct($id, $dataLliurament, $tipus, $ponderacio, $avaluacio){
    
      $this->id=$id;
      $this->dataLliurament=$dataLliurament;
      $this->tipus=$tipus;
      $this->ponderacio=$ponderacio;
      $this->avaluacio=$avaluacio;
  }

  function set_id($id) {

    $this->id = $id;
  }

  function get_id() {

    return $this->id;
  }

  function set_dataLliurament($dataLliurament) {

    $this->dataLliurament = $dataLliurament;
  }

  function get_dataLliurament() {

    return $this->dataLliurament;
  }

  function set_tipus($tipus) {

    $this->tipus = $tipus;
  }
  function get_tipus() {

    return $this->tipus;
  }

  function set_ponderacio($ponderacio) {

    $this->ponderacio = $ponderacio;
  }

  function get_ponderacio() {

    return $this->ponderacio;
  }

  function set_avaluacio($avaluacio) {
    
    $this->avaluacio = $avaluacio;
  }

  function get_avaluacio() {

    return $this->avaluacio;
  }
}
?>
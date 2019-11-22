<?php
class Db_model extends CI_Model {


  //Constructeur
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


/*      Requêtes pour la Connexion     */
  public function get_utilisateur($id) {
    $query = "SELECT PWD FROM UTILISATEURS WHERE ID = ? ";
    return $this->db->query($query,array($id))->result_array();
  }

}
/*      Requêtes pour les fournisseurs */
/*
public function get_fournisseurs() {
  $query = $this->db->query("SELECT * FROM FOURNISSEURS");
  return $query->result_array();
}
public function verifcentrecout($id){
  $query="SELECT * FROM FOURNISSEURS WHERE ID = ?";
  return $this->db->query($query,array($id))->result_array();
}
public function modify_fournisseurs($numSIF, $denom, $rue, $codePos, $ville, $numSiret, $outSIF) {
  $query = "UPDATE FOURNISSEURS SET NUM_SIF = ?, DENOMINATION = ?, RUE = ?, CODE_POSTAL = ?, VILLE = ?, NUM_SIRET = ? WHERE NUM_SIF = ?";
  $this->db->query($query,array($numSIF, $denom, $rue, $codePos, $ville, $numSiret, $outSIF));
  }

public function delete_fournisseurs($numSIF){
  $query = "DELETE FROM FOURNISSEURS WHERE NUM_SIF= ? ";
  $this->db->query($query,array($numSIF));
}
*/

<?php
require_once "./Model/reponse_modele.php";

class ReponseControleur {

    public $reponses; 

    public function getReponseContoleur($i) {

        $reponseModel = new Reponse();
        $reponseModel->idQ = $i;

        $this->reponses = $reponseModel->getAllReponses();
    }
}
?>

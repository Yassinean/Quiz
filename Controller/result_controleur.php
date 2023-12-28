<?php 

require_once "./Model/result.modele.php";

class ResultControleur{
    public $insertReponse;
    public $score;

    public function insertReponseContoleur($idQ,$idR) {

        $resultModel = new Result();
        $resultModel->idQ = $idQ;
        $resultModel->idR = $idR;

        $this->insertReponse = $resultModel->insertReponseUser();
    }

    public function scoreContoleur() {
        $scoreModel = new Result(); 

        return $scoreModel->score();
    }

    public function deleteControleur() {
        $deleteModel = new Result(); 
        
        return $deleteModel->delete();
    }

    public function terminer(){
        if(isset($_POST['termine'])){
            header('location: index.php');
        }
    }

    public function insertLast($i, $selectedAnswer) {
        if ($i > 10) {
            $this->insertReponseContoleur(10, $selectedAnswer);
            header('location: result.php');
            exit(); 
        }
    }

    public function Correction(){
        $objetResult = new Result();
        $tousLesStatuts = $objetResult->statuts();

        foreach ($tousLesStatuts as $statut) {
            echo '<div style="margin-left: 24px; display: flex;flex-direction:column; align-items: center;">'; // Adjust this value as needed
            $justifications = $objetResult->justification($statut['idQ']);

            echo '<div style="width: 16px; height: 16px; border-radius: 50%; background-color: ' . ($statut['statut'] == 0 ? 'red' : 'green') . '; margin-right: 8px;"></div>';
            echo $statut['idQ'] . "-" . $statut['reponse'] . "<br>";

            if ($statut['statut'] == 0 && !empty($justifications)) {
                echo '<div style="bg-green-500 text-white mx-auto;">Correction: </div>';
                foreach ($justifications as $justification) {
                    echo '<div style="margin-left: 24px;">' . $justification['justification'] . '</div><br>';
                }
            }

            echo '</div>';
        }

    }
    
    
    
    
    
    
    

}

?>
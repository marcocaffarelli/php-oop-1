<?php
//Istruzioni:
// Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. 
//Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.


/** class Cane
 * @author Marco
 * @copyright 2021 Marco
 */


 //classe
 class Cane {
    //attributi
    public $nome;
    public $paese;
    public $taglia;
    public $aspettative_di_vita_media;
    public $gruppo;
    public $caratteristiche;

    //constructor
    function __construct(string $nome, string $paese, string $taglia, string $aspettative_di_vita_media, string $gruppo, string $caratteristiche){
        $this->nome = $nome;
        $this->paese = $paese;
        $this->taglia = $taglia;
        $this->aspettative_di_vita_media = $aspettative_di_vita_media;
        $this->gruppo = $gruppo;
        $this->caratteristiche = $caratteristiche;
    }
 }

?>
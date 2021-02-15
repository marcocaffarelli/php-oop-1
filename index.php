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
    public $descrizione;

    //constructor
    function __construct(string $nome, string $paese, string $taglia, string $aspettative_di_vita_media, string $gruppo, array $caratteristiche, string $descrizione){
        $this->nome = $nome;
        $this->paese = $paese;
        $this->taglia = $taglia;
        $this->aspettative_di_vita_media = $aspettative_di_vita_media;
        $this->gruppo = $gruppo;
        $this->caratteristiche = $caratteristiche;
        $this->descrizione = $descrizione;
    }

    //method
    function get_nome() {
        return $this->nome;
    }
    function get_paese() {
        return $this->paese;
    }
    function get_taglia() {
        return $this->taglia;
    }
    function get_aspettative_di_vita_media() {
        return $this->aspettative_di_vita_media;
    }
    function get_gruppo() {
        return $this->gruppo;
    }
    function get_caratteristiche() {
        return $this->caratteristiche;
    }
    function get_descrizione() {
        return $this->descrizione;
    }
 }

 //istanze
 $bolognese = new Cane('Bolognese', 'Italia', 'molto piccolo', '12-14 anni', 'Gruppo FCI 9, AKC Foundation Stock Service', ['fedele', 'calmo'], 'Questi cani molto seri sono calmi, docili e fortemente attaccati ai loro compagni umani.');
 $barbone = new Cane('Barbone', 'Francia', 'media', '12-15 anni', 'Gruppo FCI 9, Gruppo non sportivo AKC, Gruppo Toy AKC', ['Socievole', 'Fedele', 'Vigile', 'Vivace', 'Docile'], 'Il Barbone ha quattro dimensioni riconosciute, che vanno dal Toy, piccolo 24 cm, allo Standard, che raggiunge un\'altezza di 60 cm.');
 $akita_inu = new Cane('Akita Inu', 'Giappone', 'grande', '10-12 anni', 'Gruppo FCI 5, Gruppo dei cani da lavoro AKC', ['Docile', 'Fedele', 'Calmo', 'Obbediente'], 'Gli Akita Inu apprezzano molto la compagnia, ma sono comunque estremamente indipendenti e calmi, oltre ad essere capaci di prendere iniziative senza vacillare.');
 $san_bernardo = new Cane('San Bernardo', 'Svizzera', 'molto grande', '8-10 anni', 'Gruppo FCI 2, Gruppo dei cani da lavoro AKC', ['Socievole', 'Vivace', 'Calmo', 'Vigile'], 'Esiste un museo dedicato ai San Bernardo in Svizzera, vicino all\'ospizio del Passo del Gran San Bernardo, dove un cane, Barry (1800 - 1814), salvò 40 vite');
 $cane_da_pastore_maremmano_abruzzese = new Cane('Cane Da Pastore Maremmano Abruzzese', 'Italia', 'grande', '10-13 anni', 'Gruppo FCI 1', ['Amabile', 'Calmo', 'Mite', 'Intelligente'], 'Nel complesso, è un cane pesante dal corpo allungato; una razza armoniosa in termini di proporzioni e profilo.');
 $cane_lupo_di_saarloos = new Cane('Cane Lupo Di Saarloos', 'Olanda', 'grande', '10-12 anni', 'Gruppo FCI 1', ['Vigile', 'Indipendente', 'Fedele'], 'Metà lupo e metà cane, il Cane Lupo di Saarloos è una razza sorprendente, relativamente recente, che ha lasciato il segno in un mondo in cui gli incroci "riusciti" tra lupi e cani sono rari.');

 $cani =[
    $bolognese, $barbone, $akita_inu, $san_bernardo, $cane_da_pastore_maremmano_abruzzese, $cane_lupo_di_saarloos
 ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Object-Oriented Programming</title>
    </head>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    h1{
        text-align: center;
    }
    .container_card{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .card_cane{
        width: 30%;
        border: 3px solid black;
    }
    .card_cane> div{
        margin: 10px;
    }
    strong{
        font-size: 20px;
    }
    li{
        list-style:none;
    }
    </style>
    <body>
        <h1>Cani</h1>
        <div class="container_card">
            <?php foreach ($cani as $cane) {?>
                    <div class="card_cane">

                        <div><strong>Razza:</strong><?php echo $cane->nome; ?></div>
                        <div><strong>Paese:</strong> <?php echo $cane->get_paese(); ?></div>
                        <div><strong>Taglia:</strong> <?php echo $cane->get_taglia(); ?></div>
                        <div><strong>Aspettative di vita media:</strong> <?php echo $cane->get_aspettative_di_vita_media(); ?></div>
                        <div><strong>Gruppo:</strong> <?php echo $cane->get_gruppo(); ?></div>
                        <div><strong>Caratteristiche:</strong>
                            <ul>
                                <?php foreach ($cane as $attributi) {?>        
                                    <?php foreach ($attributi as $caratteristica) {?>                    
                                        <li><?php echo $caratteristica; ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <div><strong>Descrizione:</strong> <?php echo $cane->get_descrizione(); ?></div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>
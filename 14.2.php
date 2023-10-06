<?php 
function repondre_oui_non(string $phrase): bool{
    while (true){
        $reponce = readline($phrase. "- (o)ui/(n)on" );
        if ($reponce ==='o' ){
            return true;    
        }elseif($reponce === 'n'){
            return false;
        }else{

        }
    }
}
function demander_creneau (string $phrase = 'Veuillez entrez votre créneau'): array{
    echo $phrase.'\n';
    while (true){
        $ouverture = (int)readline("heure d'ouverture");
        if ($ouverture >= 0 && $ouverture <=23){
            break;
        }
    }
    while (true){
        $fermeture = (int)readline("heure de fermeture");
        if ($fermeture >= 0 && $fermeture <=23 && $fermeture> $ouverture){
            break;
        }
    }
    return [$ouverture, $fermeture];

}
function demander_creneaux (string $phrase = 'Veuillez entrez vos créneaux'): array{
    $creneaux = [];
    $continuez = true;
    while ($continuez){
        $creneaux = demander_creneau();
        $continuez = repondre_oui_non('Voulez vous continuez ?');
    }
    return $creneaux;
} 
demander_creneaux();
var_dump($creneaux);
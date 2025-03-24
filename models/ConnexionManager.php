<?php
function verification($bd, $numero, $mot_de_passe, $options ){
    $recRowCount = recRowCount($bd, 'api', 'numeros', $numero);
    if($recRowCount !== 0){
        $rec = $bd->prepare("SELECT * FROM api WHERE numeros = ? AND options LIKE '$options' ");
        $rec->execute(array($numero));
        $result = $rec->rowCount();
        if($result === 1){
            $results = $rec->fetch();
            $code = $results['code'];
            $mot_de_passe_sha = sha1($mot_de_passe);
            if($code === $mot_de_passe){
                $_SESSION['api'] = $results['api'];
                if($results['options'] === 'Personnelle'){
                    return 'Personnelle' ;
                }else{
                    return 'Autre' ;
                }
            }elseif($code === $mot_de_passe_sha){
                $_SESSION['api'] = $results['api'];
                if($results['options'] === 'Personnelle'){
                    return 'Personnelle' ;
                }else{
                    return 'Autre' ;
                }
            }else{
                return 'code';
            }
        }else{
            return 'type';
        }
        
    }else{
        return 'numeros';
    }
}
?>
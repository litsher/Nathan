<?php 
class favo { 
     
    private $sKleur = ""; 
    
    public function __set( $sAttribuut, $sValue ){
        switch( $sAttribuut ){
            case 'sKleur':
                $colors = array('groen', 'rood', 'blauw', 'paars', 'geel', 'wit', 'zwart');				
                if( !in_array( strtolower( $sValue ), $colors ) ){ 
                   die( "Kleur niet bekend: " . $sValue ); 
                } 
                $this->sKleur = $sValue;
            break;
            default:
            break;
        }
        return;
    }
    
    public function __get( $sAttribuut ){
        if( isset( $this->$sAttribuut ) ){
            return $this->$sAttribuut;
        }
        return false;
    }
     
}     
$oAuto = new favo;
$oAuto->sKleur = $_POST['kleur'];
echo "Je favoriete kleur is: " . $oAuto->sKleur; 
?>
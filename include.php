<?php 
class favo { 
     
    public $sKleur = ""; 
    
    public function __set( $sAtt, $sValue ){
        switch( $sAtt ){
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
    
    public function __get( $sAtt ){
        if( isset( $this->$sAtt ) ){
            return $this->$sAtt;
        }
        return false;
    }
     
}     
$oAuto = new favo;
if(isset($_POST['kleur'])) {
$oAuto->sKleur = $_POST['kleur']; 
echo "Je favoriete kleur is: " . $oAuto->sKleur; 
}
?>
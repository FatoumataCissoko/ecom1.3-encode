<?php 
function nameLengthIsvalid($nameTovalid){
//minimum 2 et maximum 10
    $length = strlen($nameTovalid);
    $reponses=[
        'isValid'=>true,
        'msg'=>''
    ];
    if ($length < 2){
        $reponses=[
            'isValid'=>false,
            'msg'=>'Nom trop court'
        ];
    }elseif ($length > 10) {
        $reponses=[
            'isValid'=>false,
            'msg'=>'Nom trop long'
        ];
    }
    //if ($length >= 2 && $length <=10) {
    //    # code...
   //}
   return $reponses;

}

?>
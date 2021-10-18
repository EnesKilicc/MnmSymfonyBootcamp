<?php
function findMin($arr){
    $min = $arr[0];
    $length = count($arr);
    
    // -------1. Yöntem---------
   /*
  
    foreach ($arr as $number ){
        if($number<$min)
            $min=$number;
    }
    */
  //  -------2. Yöntem---------
    /*
    
    $i=0;
    while($i<$length){
         if($arr[$i]<$min)
            $min=$arr[$i];
         $i++;
    }
    */
    //  -------3. Yöntem---------
    for ($i = 0; $i < $length; $i++) {
        if($arr[$i]<$min)
            $min=$arr[$i];
    }
    return $min;
}

$array = array(5,12,54,2,76,48);
echo findMin($array);
?>

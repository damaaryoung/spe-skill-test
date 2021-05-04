
<?php
    $num = 153;
    
    echo narcissistic($num);
  
 
    function narcissistic($num){
       $nar = 0;
       $length = strlen($num);

       for($i = 0; $i < $length; $i++ ){
            
            $digit = substr($num, $i, 1);
            $nar = $nar + (pow($digit,$length));
       }
       if($num == $nar){
           return "true";
       }else{
           return "false";
       }
   }
  

?>

<?php

    $arr =  array(2, 4, 0, 100, 4, 11, 2602, 36);
    echo outlier($arr);

    function outlier($arr){
        $ganjil = [];
        $genap  = [];
        $length = count($arr);

        for($i = 0; $i < $length; $i++){
            if($arr[$i] < 0){
                $num = abs($arr[$i]);
            }else{
                $num = $arr[$i];
            }
    
            if($num%2 == 1){
                array_push($ganjil, $arr[$i]);
            }else{
                array_push($genap, $arr[$i]);
            }
            
        }
    
        if(count($ganjil) == 1){
            return $ganjil[0];
        } 
        else if(count($genap) == 1){
            return $genap[0];
        }
        else{
            return 'false';
        }

    }

    
    
?>


<?php
    $hay = array("red", "blue", "yellow", "black", "grey");
    $ned = "grey";
    echo findNeedle($hay, $ned);

    function findNeedle($hay, $ned){
        $length = count($hay);

        for($i = 0; $i < $length; $i++){
            if($hay[$i] == $ned ){
                return $i;
            }
        }
    }

?>

<?php
    $arr1 = array(1,2,3,4,6,10);
    $arr2 = array(1,10);


    // blueOcean($arr1, $arr2);
    
    $array = array_diff($arr1, $arr2);
    $array = array_values($array);

    print_r($array); 

   // print_r($arr1); 

    // function blueOcean($arr1, $arr2){
    //     $len_arr1 = count($arr1);
    //     $len_arr2 = count($arr2);

    //     for($i = 0; $i < $len_arr2; $i++){
    //         for($j = 0; $j < $len_arr1; $j++){
    //             if($arr2[$i] == $arr1[$j]){
    //                 unset($arr1[$j]);
    //             }
    //         }
    //     }
    //     $arr1 = array_values($arr1);
    // }

?>


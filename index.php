<html>
   <body>
   
   <?php

$array_nber =array(1,2,3,4,5,6,7,8,9,10);
$array_result=array();
$count=0;



for($i=0; $i<10; $i++){
    
    $array_result[$i] = $array_nber[$i] *3;
    
}
foreach($array_result as $value){
    
    echo "3 * " .$array_nber[$count] ."= ".$value."<br>";
    $count++;

}

?>
      
   </body>
</html>
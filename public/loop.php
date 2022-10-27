<!-- 

 for loop
 while loop
 do while loop
 foreach
 -->
<!-- initailization; condition; increment or decrement-->

<?php
    // for($i = 0; $i <= 10; $i++){
    //      echo '<pre>';
    //      echo $i;
    //      echo '</pre>';
    // };
    
    // $numbers = [10,30,50,15,2,4,9,66];
    // for($i = 0; $i <= count($numbers); $i++){
        

    //     if($numbers[$i] % 2 == 0){
    //         echo '<pre>';
    //         var_dump($numbers[$i]);
    //         echo '</pre>';
    //     }else{
    //         echo '<pre>';
    //         echo $numbers[$i];
    //         echo '</pre>';
    //     }
    // }


    // while loop

    $num = 0;
    while($num <= 10){
        echo '<pre>';
        echo $num;
        echo '</pre>';
        $num++;
    };

    $isEven = 10;

    while($isEven <= 20){
        echo '<pre>';
        echo $isEven;
        echo '</pre>';

        $isEven += 2;
    };


    // do while loop


    $age = 5;

    do{
        echo '<pre>';
        echo $age;
        echo '</pre>'; 
        $age++;
    } while($age <= 10) ;

    // foreach loop

    $boysname = ['rex', 'victor', 'deo', 'josh', 'benson'];

    foreach($boysname as $name){
        if($name == 'josh'){
            echo "your name is ${name}";
        }
        
        
    }


    // using a forEach loop to loop through an ass array

    $person = [
        'name' => 'Daniel',
        'address' => 'owerri',
        'age' => 25,
        'friend' => ['victor','rex']
     
     ];

     foreach($person as $key => $all){
         if(is_array($all)){
             echo '<pre>';
             echo $key . ' '. implode(',' , $all) ;
             echo '</pre>';
         }else{
            echo '<pre>';
            echo $key . ' '. $all ;
            echo '</pre>';
         }
     }
     
    

    
  

?>
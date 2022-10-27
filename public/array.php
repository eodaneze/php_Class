<?php 
  $days_Of_The_Week = ['monday', 'tuesday', 'wednessday', 'thursday', 'friday', 'saturday', 'sunday'];

// printing an array
  // echo '<pre>';
  // var_dump($days_Of_The_Week[0]);
  // echo '<pre>';

  
  // // replacing element in an array
  
  // $days_Of_The_Week[0] = 'Daniel';
  // echo '<pre>';
  // var_dump($days_Of_The_Week);
  // echo '</pre>';

  
  // // counting element in an array... geting the length of array

  //    $countarray = count($days_Of_The_Week);
  //    echo $countarray;


  //   //  array methods
  //   /*  
  //     push
  //     pop
  //     shift
  //     unshift
    
  //   */

  //   $Cars =array('volvo', 'honda', 'ford');
  //   echo '<pre>';
  //   var_dump($Cars);
  //   echo '</pre>';

  //   $addElement = array_push($cars, 'BMW');
  //   echo '<pre>';
  //   var_dump($addElement);
  //   echo '</pre>';
    
  //   echo '<pre>';
  //   var_dump($Cars);
  //   echo '</pre>';



  //   $addElementToFirstIndex = array_unshift($cars, 'Jeep');
  //   echo '<pre>';
  //   var_dump($addElementToFirstIndex);
  //   echo '</pre>';
    
  //   echo '<pre>';
  //   var_dump($Cars);
  //   echo '</pre>';


  //   echo '<pre>';

  //   var_dump(array_pop($Cars));
  //   echo '</pre>';


  //   echo '<pre>';
  //   var_dump($Cars);
  //   echo '</pre>';


    
  //   echo '<pre>';

  //   var_dump(array_shift($Cars));
  //   echo '</pre>';


  //   echo '<pre>';
  //   var_dump($Cars);
  //   echo '</pre>';

  
  //   $number =  [10, 1, 2, 100, 200, 6,20, 60] ;
   
  //   sort($number);

  //   echo '<pre>';
  //   var_dump($number);
  //   echo '</pre>';



  //   rsort($number);

  //   echo '<pre>';
  //   var_dump($number);
  //   echo '</pre>';
    



    $boysName = ['kachi', 'victor', 'rex', 'daniel'];
    $girlsName = ['Joy', 'Vivian', 'Favour'];
    
   

    echo '<pre>';
    var_dump($boysName);
    echo '</pre>';
    
    echo '<pre>';
    var_dump($girlsName);
    echo '</pre>';
    
    

    echo '<pre>';
    var_dump(array_merge($boysName, $girlsName));
    echo '</pre>';


    echo '<pre>';
    var_dump(...$boysName, ...$girlsName);
    echo '</pre>';


    // asscioative array

  $person= [
       'name' => 'Daniel',
       'age' => '22',
       'address' => 'Owerri',
       'Acccount No' => '000000000'
  ] ;
    print_r($erson['name']);

    $person['name'] = 'John Deo';
  
    
    echo '<pre>';
    var_dump($person);
    echo '</pre>';



    // implode and explode

    require('index.php');
    echo $details;

    $toArray = explode(",", $details);
    
    echo '<pre>';
    var_dump($toArray);
    echo '</pre>';


    $toString = implode("-", $number);
     echo '<pre>';
    var_dump($toString);
    echo '</pre>';


?>
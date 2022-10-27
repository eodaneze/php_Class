<!-- 
   if statement
   else statement
   elseif statement
   ternary operator
  
   = : assignment operator

   Comparison operator

   == : equal to
   === : strictly equal to
   !== : nor equal to
   > : greater than
   < : less than
   >= : greater than or equal to
   <= : less than or equal to

   Logical operator
   && : AND operator
   || : OR perator

 -->
<?php
   $age = 20;

   if($age >= 18){
       echo 'you are eligible to vote';
   }
   elseif($age == 17){
        echo "One year remaining to start voting";
   }
   else{
       echo "You are too young to vote";
   }


//    difference between == and ===

   $age1 = 40;
   $age2 = '40';

   if($age1 == $age2){
       echo "Both of them are equal";
   }else{
       echo "They are not equal";
   };



//    ternary operator

$age3 = 60;

echo $age3 == 65 ? 'You are an old staff' : 'You are a new staff'
?>
<!-- 
   function functioname(parameter){
        code block
   }
   function calling
   functionName(argument);
   


 -->

<?php
   function myFunction(){
        echo "Hello World!";
   }

   myFunction();
   myFunction();


   function functionWithParams($name, $age){
         echo '<pre>';
         echo "my name is ${name}, i am ${age} years old";
         echo '</pre>';
   };
   functionWithParams('Daniel', 45);
   functionWithParams('Rex', 34);


   function sumNumber($num1, $num2){
         echo $num1 + $num2;
   }
   sumNumber(4,10);


   
//    function with spreed operator

function spreedFunction(...$numbers){
      print_r($numbers);

     
}

spreedFunction(1,2,3,4,5,6,7,8,9,10);



// the return statement

function functionWithReturn($num3, $num4){
       return $num3 + $num4;
};

echo functionWithReturn(4, 10);
?>
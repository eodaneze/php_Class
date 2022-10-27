<?php
   function components($productname, $productimage){
       $elements = "
       <div class=\"col-md-3\">
       <div class=\"card\" style=\"width: 100%;\">
           <img src=\"$productimage\" class=\"card-img-top\" alt=\"...\">
           <div class=\"card-body text-center\">
               <h5 class=\"card-title\">$productname</h5>
               <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                   card's
                   content.</p>
               <a href=\"#\" class=\"btn btn-success\">Add To Cart</a>
           </div>
       </div>
   </div>
       ";

       echo $elements;
   }

?>
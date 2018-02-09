<?php


 ?>

 <script type="text/javascript">

 var main = {
   "destination_addresses" : [ "10 Crown Ln, Darlinghurst NSW 2010, Australia" ],
   "origin_addresses" : [ "Unnamed Road, Victoria Rock WA 6429, Australia" ],
   "rows" : [
      {
         "elements" : [
            {
               "distance" : {
                  "text" : "2,066 mi",
                  "value" : 3325404
               },
               "duration" : {
                  "text" : "1 day 12 hours",
                  "value" : 130817
               },
               "status" : "OK"
            }
         ]
      }
   ],
   "status" : "OK"
}

// cdata = JSON.parse(main);

console.log(main['rows'][0]['elements'][0]['duration']['value']);

 </script>

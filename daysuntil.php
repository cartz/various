<?php

  function DaysUntil($day,$month,$year){
  
    $dayZ = mktime(0,0,0,$month,$day,$year); // This is the timestamp for our searched day

    $now = time(); // this is the timestamp for today

    $diff = $dayZ - $now; // how much secounds until day X

    $days= ceil($diff/(60*60*24)); // the math behind it all... 60 secounds in a minute; 60 minutes in an hour; 24 hours in one day ;)

     return $days; // the output getting returned
  }

print DaysUntil(7,6,2013); // put in your date (day,month,year)
?>
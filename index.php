
  <p> Electricity Bill Calaulation </p>

<?php
 //calculate electrcity bill
  $unit = 99 ;
  // by using if statments

  if ( $unit <= 50) {
   echo ($unit = $unit * 3.50 ) ;
  } elseif ($unit > 50 && $unit < 150){
    echo ($unit = $unit  * 4 );
  } else{
    echo ($unit = $unit * 6.50) ;
  }
?>

<html>
<head>


</head>
<body>
<b>This is not coming from server</b>

<?php

  echo "<br>This is from PHP code<br>";

  function  test()
  {
      $var1 = 4;
      $var1++;
      return $var1;

  }
  
  $message = "The result from the function is ".test();

  echo $message;
  echo $message;
  
  echo $message;
  echo $message;
  
  echo "Another Print";
  echo "Another Print1";

  echo "Another Print2";
  
  echo "Another Print3";






?>

</body>
</html>








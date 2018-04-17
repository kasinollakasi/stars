<!DOCTYPE html>
<html>
<head>
  <title>Stars</title>
<meta charset="utf-8"/>
</head>
  <body>
    <h2>Print some stars</h2>

    <?php

    if ($_POST) {

	  $i = $_POST['stars'];

	  while ($i++) {
<<<<<<< HEAD
		    echo str_repeat('*')."<br>";
=======
		    echo str_repeat('*', $i)."<br>";
>>>>>>> 7be8154a9d08275f320adc9532e11ec75ee877b8
	     }
    }
    ?>


  <form action="stars.php" method="post">
    Enter a number:
    <input type="numbers" name="stars" autofocus><br>
    <input type="submit" value="Execute" value=""/>
  </form>
</body>
</html>

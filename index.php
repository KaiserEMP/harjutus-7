<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-7s - 
	</title>
</head>

<body>

	
	<?php
    $count = 1;

    while ($count <= 10) {
        echo $count;
        $count += 1;
    }
	?>

	<h2>While loop</h2>


	<?php
    $count = 10;

    while ($count <= 100) {
        echo $count;
        echo ", ";
        $count += 10;
    }
	?>

	<h3>Infinite while loop</h3>

	<?php
    $count = 1;

    while ($count <= 10) {
        echo $count;
        $count += 1;
    }
	?>


	<br>

<?php
    $count = 0;

    while ($count < 15) {
        if ($count == 5) {
            echo "<script>alert('Number viie kord');</script>";
        } else {
            echo $count;
        }

        $count += 1;
    }
?>

<h3>Conditional statements in while loop</h3>

<br>

<?php
    $count = 0;

    while ($count < 10) {
        if ($count == 3) {
            echo " kolm ";
            

        } else {
            echo $count;
        }
                if ($count == 7) {
        echo " seitse "; 
            }

        $count += 1;
    }
?>





</body>

</html>
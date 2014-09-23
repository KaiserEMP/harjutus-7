<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-7s - 
	</title>
	<style type="text/css">
	.tabel {
	background-color: green;
	
	border: 2px solid cyan;
	}
	td{
		border: 2px solid yellow;
		padding: 10px
	}
	</style>
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

<h2>For LOop</h2>

	
<?php
    for ($count = 1; $count <= 20; $count += 1) {
        if  ($count  %2==0)  { echo " paaris ";}
        	elseif ($count %2==1) {echo " paaritu ";}
       
    }
?> 

<h2>Foreach loop</h2>

<?php
    $name = array("ASS", "OOO", "WOLVO", "VALVE", "HL3");

    foreach ($name as $name) {
        echo "<li>$name</li>";
    }
?>
<br>
<?php
    $name = array("ASS", "OOO", "WOLVO", "VALVE", "HL3");
    $nr = 1;
    foreach ($name as $name) {
        echo $nr . " " . $name . "<br>";
		$nr++;
    }
?>

<br>
<table class="tabel">
<?php
    $contact = array(
        "first_name" => "kaits",
        "phone_number" => 23432424,
        "location" => "valga",
        "vanus" => "vana"
    );

    foreach ($contact as $attribute => $value ) {
    	$attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
        echo "<tr><td>{$attribute_formatted}:</td><td> {$value}<br></td></tr>";
    }
?>
</table>




</body>

</html>
<?php
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM country");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>Friancertz Rave Cayanan</title>
</head>
<body>
    <h1 style="text-align: center;"><?php echo "COUNTRIES" ?></h1>
	<a href="add.html"><p style="text-align: center;">Find your Country, click here to Add your Country</a><br/><br/>
    
    <table style="width: 100%; text-align:center; border: solid white; padding-right:20px; background-color:blanchedalmond;">
        <tr bgcolor='#cccccc'>
            <td style="text-align:center;">ID</td>
            <td style="text-align:center;">ISO</td>
            <td style="text-align:center;">Name</td>
            <td style="text-align:center;">Nice Name</td>
			<td style="text-align:center;">ISO3</td>
            <td style="text-align:center;">Number Code</td>
            <td style="text-align:center;">Phone Code</td>
            <td style="text-align:center;">Created At</td>
        </tr>
        
        <?php
        while ( $res = mysqli_fetch_array($result)){
           echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['iso']."</td>";
            echo "<td align=justify>".$res['name']."</td>";
            echo "<td>".$res['nicename']."</td>";
            echo "<td>".$res['iso3']."</td>";
            echo "<td>".$res['numcode']."</td>";
            echo "<td>".$res['phonecode']."</td>";
            echo "<td>".$res['created_at']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure to delete this record?')\">Delete</a></td>"; 
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>
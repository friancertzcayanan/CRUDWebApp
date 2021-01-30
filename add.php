<?php
	include_once("config.php");
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
    <?php
    if( isset($_POST['Submit'])){
        $iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
        $iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
        $numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
        $phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);

        if( empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode)){
            if(empty($iso)){
                echo "<font color='red' > ISO field is empty. </font><br/>";
            }
            if(empty($name)){
                echo "<font color='red' > Name field is empty. </font><br/>";
            }
            if(empty($nicename)){
                echo "<font color='red' > Nice Name field is empty. </font><br/>";
            }
            if(empty($iso3)){
                echo "<font color='red' > ISO3 field is empty. </font><br/>";
            }
            if(empty($numcode)){
                echo "<font color='red' > Number Code field is empty. </font><br/>";
            }
            if(empty($phonecode)){
                echo "<font color='red' > Phone Code field is empty. </font><br/>";
            }

            echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
    

        } else {
            $result = mysqli_query($mysqli, "INSERT INTO country(iso,name,nicename,iso3,numcode,phonecode) values ('$iso','$name','$nicename','$iso3','$numcode','$phonecode')");
            echo "<font color= 'green'>Data added Successfully.";
            echo "<br/><a href='index.php'> View Result </a>";
        }
    }

    ?>
</body>
</html>
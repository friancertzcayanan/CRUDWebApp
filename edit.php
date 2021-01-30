<?php
    include_once("config.php");

    if( isset($_POST['update']))
    {
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
        $iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
        $numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
        $phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);
        $created_at = mysqli_real_escape_string($mysqli, $_POST['created_at']);

        if( empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode) || empty($created_at)){
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
            if(empty($created_at)){
                echo "<font color='red' > Created At field is empty. </font><br/>";
            }

            echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
    

        } else {
            $result = mysqli_query($mysqli, "UPDATE country set iso='$iso',name='$name',nicename='$nicename',iso3='$iso3',numcode='$numcode',phonecode='$phonecode',created_at='$created_at'  WHERE id=$id");
            header("location: index.php");
        }
    }
?>

<?php
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * from country where id=$id");

    while($res = mysqli_fetch_array($result))
    {
        $iso = $res['iso'];
        $name = $res['name'];
        $nicename= $res['nicename'];
        $iso3 = $res['iso3'];
        $numcode = $res['numcode'];
        $phonecode = $res['phonecode'];
        $created_at = $res['created_at'];
    }
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

    <form name="form1" method="post" action="edit.php">
        <table width="25%" border="0">
            <tr>
                <td>ISO</td>
                <td><input type="text" name="iso" value="<?php echo $iso;?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Nice Name</td>
                <td><input type="text" name="nicename" value="<?php echo $nicename;?>"></td>
            </tr>
            <tr>
                <td>ISO3</td>
                <td><input type="text" name="iso3" value="<?php echo $iso3;?>"></td>
            </tr>
            <tr>
                <td>Number Code</td>
                <td><input type="text" name="numcode" value="<?php echo $numcode;?>"></td>
            </tr>
            <tr>
                <td>Phone Code</td>
                <td><input type="text" name="phonecode" value="<?php echo $phonecode;?>"></td>
            </tr>
            <tr>
                <td>Created At</td>
                <td><input type="text" name="created_at" value="<?php echo $created_at;?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                </td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</body>
</html>
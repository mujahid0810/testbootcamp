<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Code Generator</title>
</head>

<?php
    
if(isset($_POST['generate'])){
    $param=$_POST["nama"];
    for ($i=1; $i<=$param; $i++) {
        for ($j=1; $j<=$param; $j++) {

            if ($i == 1 || $i == $param) {
                
                echo "+ ";

            }
            else {
                if($j%3 == 0) {

                    echo "+ ";

                } 
                else {

                echo "= ";
                
                }
            }

        }
        
        echo "<br />";

    }
}
?>

<body>
<h1>Code Generator</h1>
<form method="post">
    <table>
        <tr>
            <td>Nomer</td>
            <td>:</td>
            <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="generate" value="Generate Code" /></td>
        </tr>
    </table>
</form>
</body>
</html>
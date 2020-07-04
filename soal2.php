<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Code Generator</title>
</head>

<?php
    
if(isset($_POST['generate'])){
    $kalimat=$_POST["nama"];
    $datakey=["out","stand","king","and"];
    for($i=0;$i<4;$i++){
        $posisi=strpos($kalimat,$datakey[$i]);
        if ($posisi !== FALSE){
            echo "$datakey[$i] => true <br />";
        }
        else {
            echo "$datakey[$i] => false <br />";
        }
    }

}
?>

<body>
<h1>Code Generator</h1>
<form method="post">
    <table>
        <tr>
            <td>kalimat</td>
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
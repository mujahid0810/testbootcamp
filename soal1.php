<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Code Generator</title>
</head>

<?php
    
if(isset($_POST['generate'])){
    $jml=$_POST["nama"];
    $karakter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i=1; $i<=$jml ; $i++){
        $input_length = strlen($karakter);
        $random_string1 = '';
        $random_string2 = '';
        for($j = 0; $j < 4; $j++) {
            $random_character1 = $karakter[mt_rand(0, $input_length - 1)];
            $random_string1 .= $random_character1;
            $random_character2 = $karakter[mt_rand(0, $input_length - 1)];
            $random_string2 .= $random_character2;
        }
        echo "kode anda adalah : $random_string1-$random_string2 <br />";
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
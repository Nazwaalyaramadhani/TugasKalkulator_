<?php
    // Kalkulator Sederhana dengan php

    //tampung inputan textfield ke dalam variabel
    $angka1 = @$_POST['tangka1'];
    $angka2 = @$_POST['tangka2'];
    $hasil = @$_POST['hasil'];

    //uji jika tombol tambah diklik
    if(isset($_POST['btambah']))
    {
        $hasil = $angka1 + $angka2;
    }

     //uji jika tombol kurang diklik
     if(isset($_POST['bkurang']))
     {
         $hasil = $angka1 - $angka2;
     }

      //uji jika tombol bagi diklik
    if(isset($_POST['bbagi']))
    {
        $hasil = $angka1 / $angka2;
    }

     //uji jika tombol kali diklik
     if(isset($_POST['bkali']))
     {
         $hasil = $angka1 * $angka2;
     }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>

<form method="post">
    <table align="center" border="1">
        <tr>
            <td colspan="3" bgcolor="pink"> K A L K U L A T O R </td>
        </tr>
        <tr>
            <td colspan="3"> <hr> </td>
        </tr>
        <tr>
            <td>Angka 1</td>
            <td>:</td>
            <td>
                <input type="text" name="tangkal" value="<?=$angka1?>">
            </td>
        </tr>
        <tr>
            <td>Angka 2</td>
            <td>:</td>
            <td>
                <input type="text" name="tangka2"  value="<?=$angka2?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="btambah" value="+">
                <input type="submit" name="bkurang" value="-">
                <input type="submit" name="bbagi" value="/">
                <input type="submit" name="bkali" value="*">
            </td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td>
                <input type="text" name="thasil"  value="<?=$hasil?>">
            </td>
        </tr>
        <tr>
            <td colspan="3"> <hr> </td>
        </tr>
    </table>
</form>
</body>
</html>
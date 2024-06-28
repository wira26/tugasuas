<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input if</title>
</head>

<body>
    <form method="post" action="4if.php">
        <table width="374" border="0" align="center">
            <tr>
                <td width="122">Nama anda </td>
                <td width="10">:</td>
                <td width="242">
                    <input name="tNama" type="text" />
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td>:</td>
                <td>
                    <input name="tJK" type="text" size="4" maxlength="1" />( L atau P )
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="Submit" value="Proses" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
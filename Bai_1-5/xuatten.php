<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chao Cac ban</title>
</head>

<body>
    <?php
        if(isset($_POST["ten"])){
            $ten = $_POST["ten"];
            $xuat="Chào bạn ".$ten;
        }
    ?>
    <form action="xuatten.php" method="post">

        <table width="271" border="1" align="center" style="text-align: center;">
            <tr>
                <td colspan="2" style="background-color: rgb(16, 94, 139);"><strong>In lời
                        chào</strong></td>
            </tr>
            <tr>
                <td width="91">Họ tên bạn</td>
                <td width="164"><input type="text" name="ten" id="chao3"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php if(isset($xuat)) echo $xuat ?></label>
                </td>
            </tr>
            <tr>
                <td colspan="2" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất"></td>
            </tr>

        </table>

    </form>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('Goods/doAdd')}}" method="post">
        <table>
            <tr>
                <td>货品名称</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>货品图片</td>
                <td><input type="file" name="goods_pic"></td>
            </tr>
            <tr>
                <td>货存</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr>

                <td colspan="2"><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</body>
</html>
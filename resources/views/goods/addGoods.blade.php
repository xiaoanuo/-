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
    <form action="{{url('admin/doAddGoods')}}" method="post" enctype="multipart/form-data">
        @csrf
        <table border="1" width="100px">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" id=""></td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" id=""></td>
                </tr>
                <tr>
                    <td>商品库存</td>
                    <td><input type="text" name="goods_num" id=""></td>
                </tr>
                <tr>
                    <td>上传图片</td>
                    <td><input type="file" name="goods_pic"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="提交"></td>
                </tr>
        </table>
    </form>
</body>
</html>
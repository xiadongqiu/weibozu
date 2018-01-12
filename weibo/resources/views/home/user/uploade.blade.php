<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery带预览可拖拽文件上传代码</title>


    <script type="text/javascript" src="/homes/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/homes/duotu/ssi-uploader.js"></script>

    <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/homes/duotu/style.css">
    <link rel="stylesheet" href="/homes/duotu/ssi-uploader.css"/>
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>请选择上传的图片</h3>
                <input type="file" multiple  id="ssi-upload"/>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $('#ssi-upload').ssi_uploader({url:'#',maxFileSize:6,allowed:['jpg','gif','txt','png','pdf']});

</script>

</body>
</html>

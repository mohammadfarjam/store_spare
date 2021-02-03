<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body class="bg_gray" style="border-radius:15px;padding:30px;background:#eee;direction: rtl;text-align: right;justify-content: center;">

<div>
    <p style="font-size: 20px;font-weight: 700;text-align: center;margin-bottom: 50px;">فروشگاه اینترنتی بی ام موتور</p>
    <p class="">با عرض سلام خدمت شما</p>
    <p style="font-size: 12pt;font-weight: 700;">متن پیام شما :</p>
    <p style="font-size: 11pt;padding: 0 20px;color:black;"><?php echo e($data->message); ?></p>

    <p  style="font-size: 12pt;font-weight:700;">پاسخ :</p>
    <p style="font-size: 11pt;margin-right: 30px;color:black;margin-bottom: 50px;"><?php echo e($data->replay_to_user); ?></p>
    <a href="#" style="margin-top: 20px;text-decoration: none;font-size: 12pt;">فروشگاه اینترنتی ...</a>
</div>


</body>
</html>
<?php /**PATH C:\store_spare\resources\views/Mails/replayEmailContactUs.blade.php ENDPATH**/ ?>
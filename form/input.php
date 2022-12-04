<?php

$pageFlag = 0;

if(!empty($_POST['btn_confirm'])){
    $pageFlag = 1;
}
if(!empty($_POST['btn_submit'])){
    $pageFlag = 2;
}
// if (!empty( $_POST['back'])){
//     $pageFlag = 0;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 0 -->
<?php if ($pageFlag === 0) : ?>

<form method="POST" action="input.php">
氏名
<input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) { echo $_POST['your_name'];} ?>">
<br>

メールアドレス
<input type="email" name="email" value="<?php if (!empty($_POST['your_name'])) {echo $_POST['email'];} ?>">
<br>

<input type="submit" name="btn_confirm" value="確認する">

</form>
<?php endif; ?>

<!-- 1 -->
<?php if ($pageFlag === 1) : ?>
<form method="POST" action="input.php">
氏名
<?php echo $_POST['your_name']; ?>
<br>

メールアドレス
<?php echo $_POST['email']; ?>
<br>

<input type="submit" name="btn_submit" value="送信する">
<input type="submit" name="back" value="戻る">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">

</form>
<?php endif; ?>

<!-- 2 -->
<?php if ($pageFlag === 2) : ?>
送信が完了しました。

<?php endif; ?>


</body>
</html>


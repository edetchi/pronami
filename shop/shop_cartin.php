<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['member_login']) == false)
{
    print 'ようこそゲスト様<br>';
    print '<a href="member_login.html">会員ログイン</a>';
    print '<br>';
}
else
{
    print 'ようこそ';
    print $_SESSION['member_name'];
    print '様 ';
    print '<a href="member_logout.html">ログアウト</a>';
    print '<br>';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
</head>

<body>

<?php

try
{

$pro_code = $_GET['procode'];

if (isset($_SESSION['cart']) == true)
{
    $cart = $_SESSION['cart'];
    $kazu = $_SESSION['kazu'];
    if (in_array($pro_code, $cart) == true)
    {
        print 'その商品はすでにカートに入って言います<br>';
        print '<a href="shop_list.php">商品一覧に戻る</a>';
        exit();
    }
}

$cart[] = $pro_code;
$kazu[] = 1;
$_SESSION['cart'] = $cart;
$_SESSION['kazu'] = $kazu;

}
catch (Exception $e)
{
    print 'ただいま障害により大変ご迷惑お掛けしております。';
    exit();
}

?>

カートに追加しました。<br>
<br>
<a href="shop_list.php">商品一覧に戻る</a>

</body>

</html>
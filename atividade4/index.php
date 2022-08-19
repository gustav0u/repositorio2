<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="arg" id="arg">
    </form>
<?php
$argumento = isset($_POST['arg']) ? $_POST['arg']: 0;
funcao("Z", "P", "N");
echo $argumento;
function funcao($z, $p, $n){
    if ($GLOBALS['argumento']==0) {
        $GLOBALS['argumento'] = $z;
    }elseif ( $GLOBALS['argumento']%2==0) {
    $GLOBALS['argumento'] = $p;
} elseif ( $GLOBALS['argumento']%2==1) {
    $GLOBALS['argumento'] = $n;
} 
return;
}
?>
</body>
</html>

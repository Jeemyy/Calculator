<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";
    if(isset($_POST['num'])){
        $num=$_POST['input'].$_POST['num'];
    }
    else{
        $num="";
    }
    if(isset($_POST['op'])){
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1,$cookie_value1,time()+(86400*30),"/");
        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2,$cookie_value2,time()+(86400*30),"/");
        $num="";
   }
   if(isset($_POST['equal']))
   {
        $num=$_POST['input'];
        switch($_COOKIE['op']){
            case "+": 
                $result=$_COOKIE['num']+$num;
                break;
            case "-": 
                $result=$_COOKIE['num']-$num;
                break;
            case "x": 
                $result=$_COOKIE['num']*$num;
                break;
            case "/": 
                $result=$_COOKIE['num']/$num;
                break;
            case "%": 
                $result=$_COOKIE['num']%$num;
                break;
            case "c":
                $result=$_COOKIE['num'];
                break;
        }
        $num=$result;
   }






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
        <div class="cula">
    <form class="clu" action="<?php $_SERVER=['PHP_SELF'] ?>" method="post">
        <div class="view">
        <input type="" placeholder="search" name="input" value="<?php echo @$num?>">
        
        <input type="submit" value="1" name="num">
        <input type="submit" value="2" name="num">
        <input type="submit" value="3" name="num">
        <input type="submit" value="+" name="op" style="background:#99A3A4"><br>
        <input type="submit" value="4" name="num">
        <input type="submit" value="5" name="num">
        <input type="submit" value="6" name="num">
        <input type="submit" value="-" name="op" style="background:#99A3A4"><br>
        <input type="submit" value="7" name="num">
        <input type="submit" value="8" name="num">
        <input type="submit" value="9" name="num">
        <input type="submit" value="x" name="op" style="background: #99A3A4;"><br>
        <input type="submit" value="c" name="op" style="background: red">
        <input type="submit" value="="  name="equal" style="background: red;">
        <input type="submit" value="%" name="op" style="background: #99A3A4">
        <input type="submit" value="/" name="op" style="background: #99A3A4"><br>

        


        </div>
    </form>
    </div>

</body>
</html>


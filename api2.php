<?php
session_start();
if (isset($_POST['boton'])) {
    if($_POST['boton'] == "c"){
        $_SESSION['num1'] = null;
    }else if($_POST['boton'] == "x"){
        $_SESSION['num1'] = substr($_SESSION['num1'],0, -1);

        // $_SESSION['num1'] = substr($_SESSION['num1'], 0, strlen($_SESSION['num1']) - 1);
    }else if($_POST['boton'] == "+"){
       
    }
    else{
        if (isset($_SESSION['num1'])) {
            $_SESSION['num1'] .= $_POST['boton'];
        } else {
            $_SESSION['num1'] =  $_POST['boton'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <title>Calculadora</title>
    <style>
        .content{
    width: 510px;
    border: 1px solid blue;
    background-color: rgb(150, 150, 255);
    margin: 0 auto;
    margin-top: 100px;
    border-radius: 10px;
}
#br{
    width: 455px;
    height: 100px;
    margin: 5px;
    margin-left: 20px;
    margin-top: 30px;
    margin-bottom: 10px;
    border-radius: 10px;
    background-color: rgb(240, 237, 233);
}
.n{
    width: 70px;
    height: 70px;
    margin: 0;
    padding: 0px;

    
}
 .col{
    width: 70px;
    height: 70px;
    margin: 0;
    padding: 0px;

}
#numeros{
    margin: 40px;
    margin-top: 10px;
} 
input{
    width: 456px;
    height:100px;
}
    </style>
</head>

<body>
    <div class="content">
        <div class="" id="br">
            <input type="text" name="resultado" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] :0;?>">
        </div>
        <form  method="POST">
        <div class="" id="numeros">
            <div class="row">
                    <div class="col">
                        <input class="n" type="submit" name="boton" value="x">
                    </div>
                    <div class="col"><input class="n" type="submit" name="boton" value="(">
                    </div>
                    <div class="col">
                        <input class="n" type="submit"name="boton" value=")">
                    </div>
                    <div class="col">
                        <input class="n" type="submit" name="boton" value="mod">
                    </div>
                    <div class="col">
                        <input class="n" type="submit" name="boton" value="π">
                    </div>

            </div>

            <div class="row">
                <div class="col">
                    <input class="n" type="submit" name="boton" value="7">
                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="8">
                </div>
                <div class="col">
                    <input class="n"type="submit" name="boton" value="9">
                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="÷">
                </div>
                <div class="col">
                    <input class="n"type="submit" name="boton" value="√">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input class="n" type="submit" name="boton" value="4">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton"value="5">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="6">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="x">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="x²">

                </div>
            </div>

            <div class="row">
                <div class="col ">
                    <input class="n" class="n" type="submit" name="boton" value="1">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="2">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="3">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="-">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="c">

                </div>

            </div>

            <div class="row">
                <div class="col">
                    <input class="n" type="submit" name="boton" value="0">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value=",">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="%">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="+">

                </div>
                <div class="col">
                    <input class="n" type="submit" name="boton" value="=">

                </div>

            </div>
        </form>

        </div>
</body>

</html>
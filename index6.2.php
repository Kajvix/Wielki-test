<?php
    session_start();

    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index6.php');
        exit();
    }

    include ("connect.php");

    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $promien = $_POST['promien'];
            $kula = $_POST['wynik'];
            

            $kula = mysqli_real_escape_string($con, $kula);
            $promien = mysqli_real_escape_string($con, $promien);

            //check there ara any existing recode in database
            
            $sql1 = "SELECT * FROM kula WHERE promien = '$promien' && wynik = '$kula'";
            $result1 = mysqli_query($con,$sql1);

            $nor = mysqli_num_rows($result1);



            if($nor > 0){
                $error[] = "User Already exist";
            }else{
                //chech Password and Confirm password is matched.
                
                
                    //insert data to database
                    $sql2 = "INSERT INTO kula(wynik, promien) VALUES('$kula','$promien')";
                    $result2 = mysqli_query($con, $sql2);

                    if(!$result2){
                        $error[] = "ERROR";
                        
                    }                    
                
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Oblicz sobie proszę</title>
        <link href="style6.css" rel="stylesheet" type="text/css">
        <script src="objętość kuli6.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="kurw">

                <div>
                    <?php
                        echo "<p>Witaj ".$_SESSION['user']."</p>";

                    ?> 
                </div>

                <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST">        
                    <div class="kalkulator">
                         r = <input onkeydown="return noNumbers(event)" name="promien" placeholder="Wprowadz promien" id="promien" type="text"  >
                         <button id="oblicz" onclick="oblicz2()" name="submit" type="submit">Oblicz</button>
                         <div class="wynik">

                        V = <input onkeydown="return noNumbers(event)" name="wynik" id="wynik" placeholder="Wynik" type="text">
                        <button type="submit" onclick="clean()">Clear</button>
                    </div>

                    <a href="logout.php" class="ti">Wyloguj się</a>

                    <div class="zapisz">
                        <input name="submit" value="Register" class="submit" type="submit">
                    </div>
            </div>
         </form>  
    </body>


</html>
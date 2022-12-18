<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Project 1</title>
    <style>
        body{
            background-color: #333333;
            margin: 0px;
            padding: 0px;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
            font-family: 'consolas';
        }
        #title{
            background-color: #333333;
            padding: 20px;
            font-size: 65px;
            align-items: center;
            color: #255784;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 6px;
            text-shadow: 2px 2px black; 
            margin-bottom: 70px;
            font-weight: bold;
        }
        #button{
            background-color: #333333;
            position: relative;
            display: inline-block;
            padding: 7px 30px;
            margin: 20px;
            justify-content: center;
            align-items: center;
            color: #2196f3;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-decoration: none;
            font-size: 24px;
            overflow: hidden;
            transition: 0.2s;
            width: 16%;
            margin-left: 42%;
            margin-right: 42%;
            border: 3px solid #2196f3;
            margin-top: 15px;
        }
        #button:hover{
            color: #255784;
            background: #2196f3;
            box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3; 
        }
        #generator{
            height: 300px;
            margin: 15px;
            padding: 5px;
            justify-content: center;
            align-items: center;
            color: #2196f3;
            font-size: 20px;
            text-align: center;
        }
        #form{
            background-color: #333333;
            display: inline;
        }
        input{
            padding: 5px;
            /* box-shadow: 0 0 10px #2196f3; */
            margin: 10px;
            font-size: 20px;
            background-color: #333333;
            color: white;
            border: 2px solid #2196f3;
            border-radius: 4px;
        }
    </style>
</head>
<body>
        <div id="title">
        Password generator
        </div>
        <div id="generator">
            Write your password lenght:
            <form id="form" action="index.php" method="get">
            <input type="text" name='p_lenght'>
            <button id="button">
            Generate!
            </button>
            
            <?php
                $list = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","Y","Z","X","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","w","v","y","z","x","z");
                $password = array();
                
                if(isset($_GET['p_lenght'])){
                    $p_lenght = $_GET['p_lenght'];
                    if($p_lenght <= 0 or $p_lenght >100){
                        echo "write an integer from 1 to 100";
                    }
                    else{
                        for ($x = 0; $x <= $p_lenght; $x++) {
                            $random = random_int(0, 61);
                            array_push($password, $list[$random]);
                        }
                
                        echo "Your randomly generated password: "; 
                        for ($b = 0; $b < $p_lenght; $b++) {
                            echo $password[$b];
                        }
                        reset($password);
                    }
                }   
            ?>
            </form>
        </div>          
</body>
</html>
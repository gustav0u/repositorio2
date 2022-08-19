<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="date" id="date">
    </form>
    <?php
    


    $date = isset($_POST['date']) ? $_POST['date']: 0;
    $date = explode("/",$date);
    //var_dump($date);
    echo data($date);
    function data($date){
    switch ($date[1]) {
        case '01':
        echo "$date[0]/JANEIRO/$date[2]";
            break;
            case '02':
                echo "$date[0]/FEVEREIRO/$date[2]";
                break;
                case '03':
                echo "$date[0]/MARÇO/$date[2]";
                break;
         case '04':
                  echo "$date[0]/ABRIL/$date[2]";
                 break;
                  case '05':
                 echo "$date[0]/MAIO/$date[2]";
                break;
                 case '06':
              echo "$date[0]/JUNHO/$date[2]";
                break;
              case '07':
                                echo "$date[0]/JULHO/$date[2]";
                                        break;
                                case '08':
                            echo "$date[0]/AGOSTO/$date[2]";
                            break;
                             case '09':
                     echo "$date[0]/SETEMBRO/$date[2]";
                         break;
                        case '10':
                    echo "$date[0]/OUTUBRO/$date[2]";
                             break;
                        case '11':
                 echo "$date[0]/NOVEMBRO/$date[2]";
                         break;
                    case '12':
                echo "$date[0]/DEZEMBRO/$date[2]";
                 break;
        
        default:
            echo "date inválida";
            break;
                  }
            return;
    }
    ?>
</body>
</html>
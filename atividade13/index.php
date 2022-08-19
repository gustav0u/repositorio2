
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <input type="text" name="name" id="name" placeholder="Name"><br>
        <input type="text" name="id" id="id" placeholder="ID"><br>
        <input type="text" name="class" id="class" placeholder="Class"><br>
        <input type="text" name="value" id="value" placeholder="value"><br>
        <input type="text" name="type" id="type" placeholder="type"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        $input = array(isset($_POST["name"]) ? $_POST["name"] : "", isset($_POST["id"]) ? $_POST["id"] : "", isset($_POST["class"]) ? $_POST["class"] : "", isset($_POST["value"]) ? $_POST["value"] : "", isset($_POST["type"]) ? $_POST["type"] : "", );
        echo input($input);
        function input($input){
            switch ($input[4]) {
                case 'button':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'checkbox':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'color':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'date':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'datetime':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'datetime-local':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'email':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'file':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'hidden':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'image':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'month':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'number':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'password':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'radio':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'range':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'reset':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'search':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'submit':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'tel':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'time':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'url':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                case 'week':
                    echo "<input type='$input[4]' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                    break;
                default:
                echo "<input type='text' name='$input[0]' id='$input[1]' class='$input[2]' value='$input[3]'>";
                break;
            }
        
            
        }    
    ?>
</body>
</html>
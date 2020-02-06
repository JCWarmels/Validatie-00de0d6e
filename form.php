<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="get|post">
        <input type="text" name="emailin" placeholder="Voer hier je emailadress in."/>
        <input type="submit" name="submit" value="Submit"/>
        <h1>
        <?php
        if(!empty($_GET)){
            $email = $_GET["emailin"];
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo("$email is een geldig email adress");
            }else {
                echo("$email is geen geldig email adress");
            }
        }
        ?>
        </h1>
    </form>
</body>
</html>
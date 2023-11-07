<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="form1" method="POST">
    <h1>Добро пожаловать!</h1>
        <div class="row">
            <div class="col-md-3">
                
                <input  placeholder="Введите логин" name="login" id="login" type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <input placeholder="Введите пароль" name="pass" id="pass" type="password" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <button name="formSend" type="submit" class="btn btn-primary">Войти</button>
            </div>
           
        </div>
        <div>
                <a href="reg.php">Нет аккаунта?</a>
            </div>
    </form>
    <?php

class DB
{
    public PDO $connection;

    public function __construct(string $dbName, string $host = "localhost", string $user = "root", string $pass = "")
    {
        try {
            $this->connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbName . '', $user, $pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function connect(){
        return  $this->connection;
    }

}
?>
</body>
</html>
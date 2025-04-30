<?php
class usePDO
{
    private $servername = "localhost";
    private $username = "root";
    private $password= "";
    private $dbname = "login-cadastro";
    private $instance;

    function getInstance()
    {
        if (empty($this->instance)) {
            $this->instance = $this->connection();
        }
        return $this->instance;
    }

    private function connection()
    {
    try{ 
        $conn= new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
         die("Connection failed: " . $e->getMessage() . "<br>");
       }
    }
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-cadastro";
private $instance;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

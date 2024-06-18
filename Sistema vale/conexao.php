<?php
abstract class con
{
    public static function con()
    {
        $host = 'localhost'; // endereço do MySQL, geralmente 'localhost'
        $dbname = 'vales2'; // nome do banco
        $username = 'root'; // usuário do banco
        $password = ''; // senha do banco

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "";
            return $pdo;
        } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        }
    }
}

<pre>
<?php

final class QuickDbTest
{
    private const host = '127.0.0.1';
    private const db = 'db_vero_digital';
    private const user = 'SA';
    private const pass = 'Un!q@to2023';


    private function connectToDatabase() {
        try {
            $dsn = "sqlsrv:server=".self::host.";Database=".self::db;
            $connection = new PDO($dsn, self::user, self::pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e)
        {
            $this->quickLog(['conf' => [self::host, self::db, self::user],'sqlsrv_errors' => $e->getMessage()], 'DB failed to connect.');
        }
        return $connection;
    }

    private function quickLog($message, $obituaryLetter = '')
    {
        echo gmdate('[Y-m-d\TH:i:s\Z] - ') . print_r($message, true) . PHP_EOL;
        if ($obituaryLetter) {
            die($obituaryLetter);
        }
    }

    public function runDbTest()
    {
        $db = $this->connectToDatabase();
        $sql = "
            IF NOT EXISTS(SELECT * FROM sysobjects WHERE name ='testing_table' AND xtype='U')
            BEGIN
                CREATE TABLE testing_table
                (
                    congratulations VARCHAR(255) NOT NULL,
                    stars INT NOT NULL
                )
                INSERT INTO testing_table (congratulations, stars)
                VALUES
                ('Success!!!', 1),
                ('You did it!!!', 2)
            END
        ";
        $db->query($sql);
        $sql = "SELECT * FROM testing_table";
        $stmt = $db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

echo json_encode((new QuickDbTest())->runDbTest(), JSON_PRETTY_PRINT);

?></pre>

<?php
namespace App\Database;

use \PDO;

class Connector
{
    /** @var PDO|null $databaseInstance */
    private static ?PDO $databaseInstance = null;

    /**
     * @return PDO
     */
    private static function init(): PDO
    {
        try {
            ['connection' => $config, 'options' => $opt] = self::loadDatabaseConfigs();

            return new PDO($config['dsn'], $config['username'], $config['password'], $opt);
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * @return array
     */
    private static function loadDatabaseConfigs(): array
    {
        return require_once __DIR__ . '/../Configs/database.php';
    }

    /**
     * @return PDO
     */
    public static function getConnection(): PDO
    {
        if (!self::$databaseInstance) {
            self::$databaseInstance = self::init();
        }

        return self::$databaseInstance;
    }
}

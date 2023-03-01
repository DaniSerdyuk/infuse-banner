<?php

namespace App\Handlers;

use App\Database\Connector;
use PDO;

class DatabaseHandler
{
    /** @var PDO $connection */
    private PDO $connection;

    /**
     * DatabaseHandler constructor.
     */
    public function __construct()
    {
        $this->setConnectionWithDatabase();
    }

    /**
     * @return void
     */
    private function setConnectionWithDatabase(): void
    {
        $this->connection = Connector::getConnection();
    }

    /**
     * @param array $payload
     */
    public function save(array $payload)
    {
        $this->connection
            ->prepare('INSERT INTO visitors (user_agent, ip_address, view_date, page_url)
                VALUES (:user_agent, :ip_address, :view_date, :page_url)
                ON DUPLICATE KEY UPDATE view_count = view_count + 1'
            )
            ->execute($payload);
    }
}

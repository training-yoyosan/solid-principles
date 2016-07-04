<?php

interface ConnectionInterface
{
    public function connect();
}

// low level module depends/conforms upon/to the abstraction
class MySQLConnection implements ConnectionInterface
{
    public function connect()
    {
        //
    }
}

// high level module depends and conforms upon/to the abstraction
class PasswordReminder
{
    /**
     * @var ConnectionInterface
     */
    protected $dbConnection;


    public function __construct(
        ConnectionInterface $dbConnection // dependency injection gives us a way to conform to dependency inversion
    ) {
        $this->dbConnection = $dbConnection;
    }
}
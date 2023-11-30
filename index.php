<?php
//for pull request
interface DataBase {
    public function getData();
}

class Mysql implements DataBase
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(DataBase $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}

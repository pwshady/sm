<?php

namespace app\modules\basedb;

use fa\traits as t;
use RedBeanPHP\R;

class Controller 
{

    use t\TSingleton;

    private function __construct()
    {
        if ( file_exists( __DIR__ . '/config_db.json' ) ) {
            $config = json_decode( file_get_contents( __DIR__ . '/config_db.json' ), true );
            if (is_array($config)) {
                if ( array_key_exists( 'dns', $config ) && array_key_exists( 'user', $config ) && array_key_exists( 'password', $config ) ) {
                    R::setup( $config['dns'], $config['user'], $config['password'] );
                }
            }            
        }
    }


    public function testConnection()
    {
        return R::testConnection();
    }

    public function findOne($table, $request, $params)
    {
        return R::findOne($table, $request, $params);
    }

    public function store($element)
    {
        return R::store($element);
    }

    public function dispense($table)
    {
        return R::dispense($table);
    }

    public function getAll($request, $params)
    {
        return R::getAll($request, $params);
    }

    public function getCell($sql, $params = [])
    {
        return R::getCell($sql, $params);
    }

    public function beansToArray($beans)
    {
        return R::beansToArray($beans);
    }

}
<?php

class Singleton {
    private static $instance = null;
    private function __construct()
    {
        // ここで共通化処理 DB接続とか
    }
    public static function getSingleton() {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}
$a = Singleton::getSingleton();
$b = Singleton::getSingleton();
var_dump($a === $b);

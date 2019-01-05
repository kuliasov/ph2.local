<?php

namespace App;

abstract class Model
{
    public $id;
    const TABLE = '';

    /*abstract public function getModelName();*/

    public static function findAll()
    {
        $db = new Db();
        /*$class = get_called_class(); // позднее статическое связывание*/
        // self - ранее связывание на этапе компиляции
        // static - позднее
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

}
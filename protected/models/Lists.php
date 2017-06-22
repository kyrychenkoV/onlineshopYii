<?php

/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 21.06.2017
 * Time: 8:00
 */
class Lists extends CActiveRecord
{
    public $name;
    public $date_create;

    public function tableName()
    {
        return 'tbl_lists';
    }

}
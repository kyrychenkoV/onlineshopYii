<?php

class Lists extends CActiveRecord
{

    public function tableName()
    {
        return '{{lists}}';
    }

    public function rules()
    {
        return [
            ['name, date_create', 'required'],
            ['name', 'length', 'max' => 255],
            ['id, name, date_create', 'safe', 'on' => 'search'],
        ];
    }

    public function relations()
    {
        return [
            'posts' => [self::HAS_MANY, 'Post', 'id_lists'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'          => 'ID',
            'name'        => 'Name',
            'date_create' => 'Date Create',
        ];
    }

    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('date_create', $this->date_create, true);

        return new CActiveDataProvider($this, [
            'criteria' => $criteria,
        ]);
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function getNameLists()
    {
        $test = CHtml::listData(Lists::model()->findAll(['order' => 'name']), 'id', 'name');

        return $test;
    }
}

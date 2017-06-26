<?php


class Post extends CActiveRecord
{
    const PATH_TO_IMAGE = 'images/';
    public $image;

    public function tableName()
    {
        return '{{posts}}';
    }


    public function rules()
    {

        return [
            ['id_lists,text', 'required'],
            ['id_lists', 'numerical', 'integerOnly' => true],
            ['title, image', 'length', 'max' => 255],
            ['text, last_status_change', 'safe'],
            ['id, title, text, id_lists, image, date_create, last_status_change', 'safe', 'on' => 'search'],
            ['image', 'file', 'types' => 'jpg, gif, png', 'safe' => false],

        ];
    }

    public function relations()
    {

        return [
            'list' => [self::BELONGS_TO, 'Lists', 'id_lists'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'id'                 => 'ID',
            'title'              => 'Title',
            'text'               => 'Text',
            'id_lists'           => 'Id Lists',
            'image'              => 'Image',
            'date_create'        => 'Date Create',
            'last_status_change' => 'Last Status Change',
        ];
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('text', $this->text, true);
        $criteria->compare('id_lists', $this->id_lists);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('date_create', $this->date_create, true);
        $criteria->compare('last_status_change', $this->last_status_change, true);

        return new CActiveDataProvider($this, [
            'criteria' => $criteria,
        ]);
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function delete()
    {
        parent::delete();

        $path = $this->getPathToImage($this->image);
        unlink($path);
    }

    public function getPathToImage($name)
    {

        return Yii::getPathOfAlias('webroot') . '/' . self::PATH_TO_IMAGE . $name;
    }

    public function deleteOldImage($name)
    {

        unlink($this->getPathToImage($name));

    }

}

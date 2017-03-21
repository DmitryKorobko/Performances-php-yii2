<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "performances".
 *
 * @property integer $performance_id
 * @property string $performance_name
 * @property string $performance_date
 * @property integer $artist_id
 * @property integer $place_id
 *
 * @property Artist $artist
 * @property Concert $place
 * @property Artist $artist0
 * @property Concert $place0
 */
class Performances extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'performances';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['performance_name', 'artist_id', 'place_id'], 'required'],
            [['performance_date'], 'safe'],
            [['artist_id', 'place_id'], 'integer'],
            [['performance_name'], 'string', 'max' => 30],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artist::className(), 'targetAttribute' => ['artist_id' => 'artist_id']],
            [['place_id'], 'exist', 'skipOnError' => true, 'targetClass' => Concert::className(), 'targetAttribute' => ['place_id' => 'place_id']],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artist::className(), 'targetAttribute' => ['artist_id' => 'artist_id']],
            [['place_id'], 'exist', 'skipOnError' => true, 'targetClass' => Concert::className(), 'targetAttribute' => ['place_id' => 'place_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'performance_id' => 'Performance ID',
            'performance_name' => 'Performance Name',
            'performance_date' => 'Performance Date',
            'artist_id' => 'Artist ID',
            'place_id' => 'Place ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist()
    {
        return $this->hasOne(Artist::className(), ['artist_id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlace()
    {
        return $this->hasOne(Concert::className(), ['place_id' => 'place_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist0()
    {
        return $this->hasOne(Artist::className(), ['artist_id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlace0()
    {
        return $this->hasOne(Concert::className(), ['place_id' => 'place_id']);
    }
}

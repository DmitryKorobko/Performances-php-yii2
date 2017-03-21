<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "artist_table".
 *
 * @property integer $artist_id
 * @property string $artist_name
 * @property string $band_name
 *
 * @property Performances[] $performances
 * @property Performances[] $performances0
 */
class Artist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artist_name'], 'required'],
            [['artist_name', 'band_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'artist_id' => 'Artist ID',
            'artist_name' => 'Artist Name',
            'band_name' => 'Band Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performances::className(), ['artist_id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances0()
    {
        return $this->hasMany(Performances::className(), ['artist_id' => 'artist_id']);
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "concert_place".
 *
 * @property integer $place_id
 * @property string $place_name
 *
 * @property Performances[] $performances
 * @property Performances[] $performances0
 */
class Concert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'concert_place';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place_name'], 'required'],
            [['place_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'place_id' => 'Place ID',
            'place_name' => 'Place Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performances::className(), ['place_id' => 'place_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances0()
    {
        return $this->hasMany(Performances::className(), ['place_id' => 'place_id']);
    }
}

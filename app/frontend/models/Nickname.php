<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nickname".
 *
 * @property int $id
 * @property string $nickname 昵称
 * @property string $avatar 头像
 * @property int $gender 性别 0未知 1男性 2女性
 */
class Nickname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nickname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender'], 'integer'],
            [['nickname'], 'string', 'max' => 64],
            [['avatar'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nickname' => Yii::t('app', '昵称'),
            'avatar' => Yii::t('app', '头像'),
            'gender' => Yii::t('app', '性别 0未知 1男性 2女性'),
        ];
    }
}

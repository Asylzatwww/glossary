<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "glossary".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $prize
 * @property int $money_code_id
 * @property int $count
 * @property int $count_id
 */
class Glossary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'glossary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'prize', 'money_code_id', 'count', 'count_id'], 'required'],
            [['money_code_id', 'count', 'count_id'], 'integer'],
            [['title', 'prize'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'prize' => 'Prize',
            'money_code_id' => 'Money Code ID',
            'count' => 'Count',
            'count_id' => 'Count ID',
        ];
    }
}

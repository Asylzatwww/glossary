<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "glossary_count".
 *
 * @property int $id
 * @property int $glossary_id
 * @property int $count
 * @property int $sklad_location_id
 * @property string $date
 */
class GlossaryCount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'glossary_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['glossary_id', 'count', 'sklad_location_id', 'date'], 'required'],
            [['glossary_id', 'count', 'sklad_location_id'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'glossary_id' => 'Glossary ID',
            'count' => 'Count',
            'sklad_location_id' => 'Sklad Location ID',
            'date' => 'Date',
        ];
    }
}

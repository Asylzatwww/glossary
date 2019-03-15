<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "glossary_count_history".
 *
 * @property int $id
 * @property int $action
 * @property int $location
 * @property int $count_before
 * @property int $count_now
 * @property int $date
 * @property int $glossary_count_id
 */
class GlossaryCountHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'glossary_count_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action', 'location', 'count_before', 'count_now', 'date', 'glossary_count_id'], 'required'],
            [['action', 'location', 'count_before', 'count_now', 'date', 'glossary_count_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'action' => 'Action',
            'location' => 'Location',
            'count_before' => 'Count Before',
            'count_now' => 'Count Now',
            'date' => 'Date',
            'glossary_count_id' => 'Glossary Count ID',
        ];
    }
}

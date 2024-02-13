<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 */
class Author extends ActiveRecord
{
    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'Имя'),
            'middle_name' => Yii::t('app', 'Отчество'),
            'last_name' => Yii::t('app', 'Фамилия'),
        ];
    }

    public function rules(): array
    {
        return [
            [['first_name', 'middle_name', 'last_name'], 'required'],
            // TODO: Добавить ограничения, в т.ч. по размерам значений
        ];
    }
}
<?php

namespace app\modules\Register\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $ID
 * @property string $Login
 * @property string $Password
 * @property string $FirstName
 * @property string $LastName
 * @property string $Patronymic
 * @property string $Type
 * @property string $Email
 * @property string $Organisation
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    const Juridic = 'Юридическое лицо';
    const Fizic = 'Физическое лицо';

    public static function tableName()
    {
        return 'User';
    }

    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'Patronymic'], 'required'],
            [['FirstName', 'LastName', 'Patronymic', 'Type', 'Email', 'Organisation'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Patronymic' => 'Patronymic',
            'Type' => 'Type',
            'Email' => 'Email',
            'Organisation' => 'Organisation',
        ];
    }


}

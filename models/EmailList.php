<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class EmailList
 * @package app\models
 *
 * @property integer $id
 * @property string $email
 */
class EmailList extends ActiveRecord
{
    public $id;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // email are required
            [['email'], 'required'],
            // email has to be a valid email address
            [['email'], 'email'],
        ];
    }

    /**
     * @return string table name.
     */
    public static function tableName()
    {
        return 'emaillist';
    }
}

<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%account}}".
 *
 * @property int $id
 * @property string $fullname
 * @property int|null $phoneno
 * @property string $mailid
 * @property string|null $bio
 * @property string|null $websitelink
 * @property string|null $linkedinid
 * @property string|null $twitter
 * @property string|null $instagramid
 * @property string|null $facebookid
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $created_by
 *
 * @property User $createdBy
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%account}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'mailid'], 'required'],
            [['phoneno', 'updated_at', 'updated_by', 'created_at', 'created_by'], 'integer'],
            [['bio'], 'string'],
            [['fullname'], 'string', 'max' => 500],
            [['mailid', 'instagramid'], 'string', 'max' => 50],
            [['websitelink', 'linkedinid', 'twitter', 'facebookid'], 'string', 'max' => 100],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'phoneno' => 'Phoneno',
            'mailid' => 'Mailid',
            'bio' => 'Bio',
            'websitelink' => 'Websitelink',
            'linkedinid' => 'Linkedinid',
            'twitter' => 'Twitter',
            'instagramid' => 'Instagramid',
            'facebookid' => 'Facebookid',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AccountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AccountQuery(get_called_class());
    }
    public function behaviors()
    {
        return[
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class
            ]
            ];
    }
}

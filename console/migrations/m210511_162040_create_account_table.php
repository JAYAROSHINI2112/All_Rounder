<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210511_162040_create_account_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account}}', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(500)->notNull(),
            'phoneno' => $this->integer(11),
            'mailid' => $this->string(50)->notNull(),
            'bio' => $this->text(),
            'websitelink' => $this->string(100),
            'linkedinid' => $this->string(100),
            'twitter' => $this->string(100),
            'instagramid' => $this->string(50),
            'facebookid' => $this->string(100),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-account-created_by}}',
            '{{%account}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-account-created_by}}',
            '{{%account}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-account-created_by}}',
            '{{%account}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-account-created_by}}',
            '{{%account}}'
        );

        $this->dropTable('{{%account}}');
    }
}

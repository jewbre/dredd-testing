<?php

use yii\db\Migration;

/**
 * Class m180401_194858_ResourceModel
 */
class m180401_194858_ResourceModel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('resource', [
            'id' => $this->primaryKey(),
            'fieldString' => $this->string(255)->notNull(),
            'fieldNumber' => $this->decimal(24, 8)->notNull(),
            'fieldDate' => $this->string(255)->notNull(),
            'comment' => $this->string(255)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('resource');
    }
}

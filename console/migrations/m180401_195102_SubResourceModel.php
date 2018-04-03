<?php

use yii\db\Migration;

/**
 * Class m180401_195102_SubResourceModel
 */
class m180401_195102_SubResourceModel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subresource', [
            'id' => $this->primaryKey(),
            'message' => $this->string(255)->notNull(),
            'resourceId' => $this->integer(11)->notNull()
        ]);

        $this->addForeignKey(
            'fk_subresource_to_resource',
            'subresource',
            'resourceId',
            'resource',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subresource');
    }
}

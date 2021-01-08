<?php

use yii\db\Migration;

/**
 * Class m210107_032418_tb_service
 */
class m210107_032418_tb_service extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_service', [
            'id' => $this->primaryKey(),
            'service' => $this->string()->notNull(),
            'Deskripsi' => $this->string()->notNull(),
            'Estimasi' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210107_032418_tb_service cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210107_032418_tb_service cannot be reverted.\n";

        return false;
    }
    */
}

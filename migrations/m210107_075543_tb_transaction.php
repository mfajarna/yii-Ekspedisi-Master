<?php

use yii\db\Migration;

/**
 * Class m210107_075543_tb_transaction
 */
class m210107_075543_tb_transaction extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_transaction',[
            'id' => $this->primaryKey(),
            'kota_asal' => $this->string()->notNull(),
            'kota_tujuan' => $this->string()->notNull(),
            'berat' => $this->integer()->notNull(),
            'tarif' => $this->integer()->notNull(),
            'service' => $this->string()->notNull(),
            'estimasi' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210107_075543_tb_transaction cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210107_075543_tb_transaction cannot be reverted.\n";

        return false;
    }
    */
}

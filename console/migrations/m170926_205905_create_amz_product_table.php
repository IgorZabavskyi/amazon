<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `amz_product`.
 */
class m170926_205905_create_amz_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%product}}', [
            'id' => Schema::TYPE_PK,
            'asin' => Schema::TYPE_STRING,
            'title' => Schema::TYPE_STRING,
            'price' => Schema::TYPE_DECIMAL . '(12,2)',
            'picture' => Schema::TYPE_STRING,
            'ean' => Schema::TYPE_STRING,
            'brand' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}

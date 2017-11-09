<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_enquiry_cate`.
 */
class m171109_080342_create_xcpt_enquiry_cate_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->renameTable('xcpt_xjzc_cate', 'xcpt_enquiry_cate');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        //$this->dropTable('xcpt_enquiry_cate');
    }
}

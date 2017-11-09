<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_enquiry_apply`.
 */
class m171109_080352_create_xcpt_enquiry_apply_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->renameTable('xcpt_xjzc_baojia', 'xcpt_enquiry_apply');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('xcpt_enquiry_apply');
    }
}

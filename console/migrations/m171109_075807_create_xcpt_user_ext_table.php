<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_user_ext`.
 */
class m171109_075807_create_xcpt_user_ext_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
    	$this->renameTable('xcpt_user_info_ext', 'xcpt_user_ext');
    	$this->renameColumn('xcpt_user_ext', 'user_id', 'uid');
    	$this->renameColumn('xcpt_user_ext', 'shequ_id', 'comm_ids');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        //$this->dropTable('xcpt_user_ext');
    }
}

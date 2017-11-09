<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_category`.
 */
class m171109_072753_create_xcpt_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
    	$this->renameTable('xcpt_gcategory', 'xcpt_category');
        $this->renameColumn('xcpt_category', 'gcate_id', 'id');
        $this->renameColumn('xcpt_category', 'com_id', 'cid');
        $this->renameColumn('xcpt_category', 'gcate_name', 'name');
        $this->renameColumn('xcpt_category', 'parent_id', 'pid');
        $this->renameColumn('xcpt_category', 'sort_order', 'sort');
        $this->renameColumn('xcpt_category', 'if_show', 'is_show');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->renameTable('xcpt_category', 'xcpt_gcategory');
        $this->renameColumn('xcpt_category', 'id', 'gcate_id');
        $this->renameColumn('xcpt_category', 'cid', 'com_id');
        $this->renameColumn('xcpt_category', 'name', 'gcate_name');
        $this->renameColumn('xcpt_category', 'pid', 'parent_id');
        $this->renameColumn('xcpt_category', 'sort', 'sort_order');
        $this->renameColumn('xcpt_category', 'is_show', 'if_show');
    }
}

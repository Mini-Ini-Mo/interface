<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_enquiry_order`.
 */
class m171109_080333_create_xcpt_enquiry_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
    	$this->renameTable('xcpt_xjzc_order', 'xcpt_enquiry_order');
    	$this->renameColumn('xcpt_enquiry_order', 'oid', 'id');
    	$this->renameColumn('xcpt_enquiry_order', 'create_by_user_id', 'uid');
    	$this->renameColumn('xcpt_enquiry_order', 'create_by_com_id', 'cid');
    	$this->renameColumn('xcpt_enquiry_order', 'pm_id', 'pro_id');
    	
    	
    	$this->dropColumn('xcpt_enquiry_order', 'cate_name');
    	$this->dropColumn('xcpt_enquiry_order', 'brand_names');
    	$this->dropColumn('xcpt_enquiry_order', 'project_name');
    	$this->dropColumn('xcpt_enquiry_order', 'project_region_parent_id');
    	$this->dropColumn('xcpt_enquiry_order', 'project_region_id');
    	$this->dropColumn('xcpt_enquiry_order', 'project_region_parent_name');
    	$this->dropColumn('xcpt_enquiry_order', 'project_region_name');
    	$this->dropColumn('xcpt_enquiry_order', 'project_address');
    }
	
    /**
     * @inheritdoc
     */
    public function down()
    {
        //$this->dropTable('xcpt_enquiry_order');
    }
}

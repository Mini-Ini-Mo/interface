<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_user`.
 */
class m171109_073435_create_xcpt_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
    	//重命名
        $this->renameColumn('xcpt_user', 'user_id', 'id');
        $this->renameColumn('xcpt_user', 'user_name', 'name');
        $this->renameColumn('xcpt_user', 'phone_mob', 'phone');
        $this->renameColumn('xcpt_user', 'if_deleted', 'is_delete');
        $this->renameColumn('xcpt_user', 'user_source', 'source');
        $this->renameColumn('xcpt_user', 'group_id', 'gid');
        
        //刪除字段
        $this->dropColumn('xcpt_user', 'gcate_id');
        $this->dropColumn('xcpt_user', 'gcate_id_1');
        $this->dropColumn('xcpt_user', 'gcate_id_3');
        $this->dropColumn('xcpt_user', 'gcate_id_2');
        $this->dropColumn('xcpt_user', 'gcate_id_4');
        $this->dropColumn('xcpt_user', 'shequ_id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        //重命名
        $this->renameColumn('xcpt_user', 'id', 'user_id');
        $this->renameColumn('xcpt_user', 'name', 'user_name');
        $this->renameColumn('xcpt_user', 'phone', 'phone_mob');
        $this->renameColumn('xcpt_user', 'is_delete', 'if_deleted');
        $this->renameColumn('xcpt_user', 'source', 'user_source');
        $this->renameColumn('xcpt_user', 'gid', 'group_id');
        
        //添加字段
        $this->addColumn('xcpt_user', 'gcate_id', $this->integer(10)->defaultValue(0)->notNull());
        $this->addColumn('xcpt_user', 'gcate_id_1', $this->integer(10)->defaultValue(0)->notNull());
        $this->addColumn('xcpt_user', 'gcate_id_3', $this->integer(10)->defaultValue(0)->notNull());
        $this->addColumn('xcpt_user', 'gcate_id_2', $this->integer(10)->defaultValue(0)->notNull());
        $this->addColumn('xcpt_user', 'gcate_id_4', $this->integer(10)->defaultValue(0)->notNull());
        $this->addColumn('xcpt_user', 'shequ_id',$this->string(32)->defaultValue('')->notNull()->comment('社区ID'));
    }
}

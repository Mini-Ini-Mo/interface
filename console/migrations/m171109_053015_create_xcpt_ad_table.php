<?php

use yii\db\Migration;

/**
 * Handles the creation of table `xcpt_ad`.
 */
class m171109_053015_create_xcpt_ad_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
    	/* $tableOptions = null;
    	if($this->db->driverName == 'mysql'){
    		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=MyISAM COMMENT="广告"';	
    	}
    	
        $this->createTable('xcpt_ad', [
            'ad_id' => $this->primaryKey()->notNull()->unsigned(),
        	'ad_name'=>$this->string(60)->defaultValue('')->comment('名称'),
        	'ad_link'=>$this->string(255)->defaultValue('')->comment('连接'),
        	'ad_img'=>$this->string(255)->defaultValue(NULL)->comment('图片'),
        	'start_time'=>$this->integer(11)->defaultValue(NULL)->comment('开始时间'),
        	'end_time'=>$this->integer(11)->defaultValue(NULL)->comment('结束时间'),
        	'click_count'=>$this->integer(8)->defaultValue(0)->comment('点击数量'),
        	'ad_price'=>$this->money(10,2)->defaultValue('0.00')->comment('价格'),
        	'enabled'=>$this->integer(3)->defaultValue('1')->unsigned()->comment('启用'),
        	'add_time'=>$this->integer(11)->notNull()->comment('添加时间'),
        	'position_id'=>$this->integer(10)->notNull()->defaultValue(1)->comment('位置'),
        	'sort_order'=>$this->integer(3)->notNull()->defaultValue(255)->comment('排序'),	
        ],$tableOptions);
        
        $this->insert('xcpt_ad',[
        		'ad_id'=>'11', 
        		'ad_name'=>'供应商招募', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/?r=huodong/default/gyshang', 
        		'ad_img'=>'upload/ad/1226/300_81/de9eb1bb074c74287ee4c088312c6a29_300X81.png', 
        		'start_time'=>'1473638400', 
        		'end_time'=>'2147483647', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 
        		'sort_order'=>'255'
        ]);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'17', 
        		'ad_name'=>'五省联合上线', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/?r=projects/zbcg', 
        		'ad_img'=>'upload/ad/0605/300_81/6196822a88d9c940617d9057ce262754_300X81.jpg', 
        		'start_time'=>'1481500800', 
        		'end_time'=>'2017958400', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 
        		'sort_order'=>'255'
        ]);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'3', 
        		'ad_name'=>'富思特', 
        		'ad_link'=>'/?r=s/index&id=299121', 
        		'ad_img'=>'upload/ad/0807//artwork/03ac8be9f7d90a185fb3ab45f3ab9318.jpg', 
        		'start_time'=>'1460073600', 
        		'end_time'=>'2030140800', 
        		'click_count'=>'0', 
        		'ad_price'=>'999.90', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'3', 
        		'sort_order'=>'255'
        ]);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'4', 
        		'ad_name'=>'航标', 
        		'ad_link'=>'/?r=s/index&id=298370', 
        		'ad_img'=>'upload/ad/0807//artwork/d41b9f80758834362abfd88dc816bbeb.jpg', 
        		'start_time'=>'1459814400', 
        		'end_time'=>'1967760000', 
        		'click_count'=>'0', 
        		'ad_price'=>'3999.90', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'3', 'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'9', 
        		'ad_name'=>'索福', 
        		'ad_link'=>'/?r=s/index&id=298470', 
        		'ad_img'=>'upload/ad/0807//artwork/164eab63cedaa99332501088f2bf4a7f.jpg', 
        		'start_time'=>'1471478400', 
        		'end_time'=>'1913241600', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'3', 
        		'sort_order'=>'255'
        ]);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'6', 
        		'ad_name'=>'正典', 
        		'ad_link'=>'/?r=s/index&id=298479', 
        		'ad_img'=>'upload/ad/0807//artwork/5614baa48af4b4da97b3b6d8e74e4f37.jpg', 
        		'start_time'=>'1461110400', 
        		'end_time'=>'1969747200', 
        		'click_count'=>'0', 
        		'ad_price'=>'1999.90', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'3', 
        		'sort_order'=>'255'
        ]);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'7', 
        		'ad_name'=>'指纹密码电子锁 EZ0202A-YB 名门', 
        		'ad_link'=>'50', 
        		'ad_img'=>'upload/ad/1031/300_300/9986d21a5766b16ae6fd0ab532bc0ac1_300X300.jpg', 
        		'start_time'=>'1467244800', 
        		'end_time'=>'1879027200', 
        		'click_count'=>'0', 
        		'ad_price'=>'2000.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'4', 
        		
        'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'8', 
        		'ad_name'=>'入户门 高强EA二代（2050*960防火） 索福', 
        		'ad_link'=>'40', 
        		'ad_img'=>'upload/ad/1031/300_300/251076208278c6d1f4a831e7b40828fe_300X300.jpg', 
        		'start_time'=>'1466726400', 
        		'end_time'=>'1881100800', 
        		'click_count'=>'0', 
        		'ad_price'=>'1060.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'4', 
        		'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'12', 
        		'ad_name'=>'电梯团采活动', 
        		'ad_link'=>'http:/www.xuncaiwangcai.com/index.php?r=huodong/elevator', 
        		'ad_img'=>'upload/ad/0607/300_81/ef7f2444b0d1a3fc6b689d70b348cf86_300X81.png', 
        		'start_time'=>'1476748800', 
        		'end_time'=>'2147472000', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'19', 
        		'ad_name'=>'生命地产', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/index.php?r=life/index', 
        		'ad_img'=>'upload/ad/0607/300_81/716d3a21c373765738587ee92ec852ca_300X81.png', 
        		'start_time'=>'1496620800', 
        		'end_time'=>'2019600000', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'15', 
        		'ad_name'=>'爱而福德', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/index.php?r=s&id=298482', 
        		'ad_img'=>'upload/ad/0807//artwork/00017396ae221c419504f4bf36b52c8c.jpg', 
        		'start_time'=>'1482105600', 
        		'end_time'=>'2113257600', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'3', 'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'18', 
        		'ad_name'=>'中科旅联采购平台', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/index.php?r=channel/zhongke/index&q=zhongke', 
        		'ad_img'=>'upload/ad/0607/300_81/189b3b513d3f3b5d254c8038619b1145_300X81.png', 
        		'start_time'=>'1483228800', 
        		'end_time'=>'2019600000', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00',
        		'enabled'=>'0', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'20', 
        		'ad_name'=>'生命地产开放日', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/?r=news/detail&id=336', 
        		'ad_img'=>'upload/ad/0724/300_81/6042ab479245eafd290db280fc9ee2cb_300X81.jpg', 
        		'start_time'=>'1500768000', 
        		'end_time'=>'2147483647', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 'sort_order'=>'255']);
        $this->insert('xcpt_ad',[
        		'ad_id'=>'21', 
        		'ad_name'=>'创新私懂会', 
        		'ad_link'=>'http://www.xuncaiwangcai.com/?r=news/detail&id=347', 
        		'ad_img'=>'upload/ad/0724/300_81/1927b0a5de3127cd5a211c7815395ded_300X81.jpg', 
        		'start_time'=>'1500768000', 
        		'end_time'=>'2147483647', 
        		'click_count'=>'0', 
        		'ad_price'=>'0.00', 
        		'enabled'=>'1', 
        		'add_time'=>'0', 
        		'position_id'=>'2', 'sort_order'=>'255']); */
        
        $this->renameColumn('xcpt_ad', 'ad_id', 'id');
        $this->renameColumn('xcpt_ad', 'ad_name', 'name');
        $this->renameColumn('xcpt_ad', 'ad_link', 'link');
        $this->renameColumn('xcpt_ad', 'ad_img', 'img');
        $this->renameColumn('xcpt_ad', 'ad_price', 'price');
        $this->renameColumn('xcpt_ad', 'enabled', 'enable');
        $this->renameColumn('xcpt_ad', 'add_time', 'create_time');
        $this->renameColumn('xcpt_ad', 'sort_order', 'sort');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        //$this->dropTable('xcpt_ad');
        
        $this->renameColumn('xcpt_ad', 'id', 'ad_id');
        $this->renameColumn('xcpt_ad', 'name', 'ad_name');
        $this->renameColumn('xcpt_ad', 'link', 'ad_link');
        $this->renameColumn('xcpt_ad', 'img', 'ad_img');
        $this->renameColumn('xcpt_ad', 'price', 'ad_price');
        $this->renameColumn('xcpt_ad', 'enable', 'enabled');
        $this->renameColumn('xcpt_ad', 'create_time', 'add_time');
        $this->renameColumn('xcpt_ad', 'sort', 'sort_order');
    }
}

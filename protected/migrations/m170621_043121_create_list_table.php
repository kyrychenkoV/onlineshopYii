<?php

class m170621_043121_create_list_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_lists', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'date_create'  => 'timestamp',


        ));
	}

	public function down()
	{
        $this->dropTable('tbl_lists');

	}

}
<?php

class m170621_055955_create_posts_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_posts', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'text'  => 'text',
            'id_lists' => 'integer',
            'image' => 'string NOT NULL',
            'date_create'  => 'timestamp',
            'last_status_change'=> 'timestamp',


        ));
        $this->addForeignKey('foreign_key','tbl_posts','id_lists','tbl_lists','id');
	}

	public function down()
	{
        $this->dropTable('tbl_posts');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
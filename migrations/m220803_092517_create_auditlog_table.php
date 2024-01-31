<?php
/**
 * @package    yiisoft\yii2
 * @subpackage kcone87\yii2-auditlog
 * @author     Nikola Haralamov <lisi4ok@gmail.com>
 * @author     Ozan Topoglu <ozantopoglu@yahoo.com>
 * @author     Enock Willy <enokahoyah@gmail.com>
 * @since      2.0.6
 */
namespace kcone87\auditlog\migrations;

use yii\db\Migration;

class m220803_092517_create_auditlog_table extends Migration
{
	CONST TABLE_NAME = 'audit_log';

	public function up()
	{
		$this->createTable(self::TABLE_NAME, [
			'id' => $this->primaryKey(),
			'class_name' => $this->string()->notNull(),
			'model' => $this->string()->notNull(),
			'pk'=> $this->integer()->notNull(),
			'action' => $this->string()->notNull(),
			'old' => $this->text(),
			'new' => $this->text(),
			'at' => $this->dateTime(),
			'by' => $this->integer(),
		]);
	}

	public function down()
	{
		$this->dropTable(self::TABLE_NAME);
	}

	public function safeUp()
	{
		$this->up();
	}

	public function safeDown()
	{
		$this->down();
	}
}

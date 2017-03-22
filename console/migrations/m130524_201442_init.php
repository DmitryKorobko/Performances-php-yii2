<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'role' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('{{%user}}',[
            'username' => 'admin',
            'email'    =>'admin@admin.com',
            'password_hash' =>'$2y$13$0OjTPwh7bt9swXnLE05.IertM0rW0EYrBj7Q..RYZzuJ7BV7zDEJS',
            'auth_key' =>'8IZHRCZN42MceuVUtLXa6SKZ0cG_NpXI',
            'role' =>'20',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}

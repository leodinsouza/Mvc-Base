<?php


use Phinx\Migration\AbstractMigration;

class UsersMigration extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string')
            ->addColumn('fullname', 'string')
            ->addColumn('email', 'string')
            ->addIndex(['email'], ['unique' => true])
            ->addColumn('password', 'string')
            ->addColumn('address', 'text')
            ->addColumn('role', 'string')
            ->addColumn('deleted_at', 'timestamp')
            ->addTimestamps()
            ->create();
        $this->execute('ALTER TABLE `users` MODIFY COLUMN `deleted_at` TIMESTAMP NULL');
    }
}

<?php


use Phinx\Migration\AbstractMigration;

class PaymentsMigration extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('payments');
        $table->addColumn('user_id', 'integer')
            ->addForeignKey('user_id', 'users', 'id')
            ->addColumn('order_number', 'string')
            ->addColumn('amount', 'float')
            ->addColumn('status', 'string')
            ->addColumn('deleted_at', 'timestamp')
            ->addTimestamps()
            ->create();
        $this->execute('ALTER TABLE `payments` MODIFY COLUMN `deleted_at` TIMESTAMP NULL');
    }
}

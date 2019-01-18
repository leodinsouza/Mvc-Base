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
            ->addForeignKey('order_number', 'orders', 'order_number')
            ->addColumn('amount', 'float')
            ->addColumn('status', 'string')
            ->addColumn('deleted_at', 'datetime')
            ->addTimestamps()
            ->create();
    }
}

<?php


use Phinx\Migration\AbstractMigration;

class OrdersMigration extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('orders');
        $table->addColumn('user_id', 'integer')
            ->addForeignKey('user_id', 'users', 'id')
            ->addColumn('product_id', 'integer')
            ->addForeignKey('product_id', 'products', 'id')
            ->addColumn('unit_price', 'float')
            ->addColumn('total', 'float')
            ->addColumn('status', 'string')
            ->addColumn('order_number', 'string')
            ->addColumn('deleted_at', 'datetime')
            ->addTimestamps()
            ->create();
    }
}

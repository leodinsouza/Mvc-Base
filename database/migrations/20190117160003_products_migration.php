<?php


use Phinx\Migration\AbstractMigration;

class ProductsMigration extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string')
            ->addIndex(['name'], ['unique' => true])
            ->addColumn('price', 'float')
            ->addColumn('description', 'float')
            ->addColumn('category_id', 'integer')
            ->addForeignKey('category_id', 'categories', 'id')
            ->addColumn('sub_category_id', 'integer')
            ->addForeignKey('sub_category_id', 'sub_categories', 'id')
            ->addColumn('image_path', 'string')
            ->addColumn('deleted_at', 'datetime')
            ->addTimestamps()
            ->create();
    }
}

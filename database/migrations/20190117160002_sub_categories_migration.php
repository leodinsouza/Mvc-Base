<?php


use Phinx\Migration\AbstractMigration;

class SubCategoriesMigration extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('sub_categories');
        $table->addColumn('name', 'string')
            ->addIndex(['name'], ['unique' => true])
            ->addColumn('slug', 'string')
            ->addColumn('category_id', 'integer')
            ->addForeignKey('category_id', 'categories', 'id')
            ->addColumn('deleted_at', 'timestamp')
            ->addTimestamps()
            ->create();
        $this->execute('ALTER TABLE `sub_categories` MODIFY COLUMN `deleted_at` TIMESTAMP NULL');
    }
}

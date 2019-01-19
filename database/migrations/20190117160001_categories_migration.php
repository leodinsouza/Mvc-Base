<?php


use Phinx\Migration\AbstractMigration;

class CategoriesMigration extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('categories');
        $table->addColumn('name', 'string')
            ->addIndex(['name'], ['unique' => true])
            ->addColumn('slug', 'string')
            ->addColumn('deleted_at', 'timestamp')
            ->addTimestamps()
            ->create();
        $this->execute('ALTER TABLE `categories` MODIFY COLUMN `deleted_at` TIMESTAMP NULL');
    }
}

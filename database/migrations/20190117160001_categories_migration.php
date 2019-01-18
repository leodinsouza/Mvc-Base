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
            ->addColumn('deleted_at', 'datetime')
            ->addTimestamps()
            ->create();
    }
}

<?php

$installer = $this;
$tableGuest = $installer->getTable('gbguest/table_guest');

//die($tableGuest);

$installer->startSetup();

$installer->getConnection()->dropTable($tableGuest);
$table = $installer->getConnection()
    ->newTable($tableGuest)
    ->addColumn('guest_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
        ))
    ->addColumn('message', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
        ))
    ->addColumn('created', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();

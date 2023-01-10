<?php
namespace Brainvire\HelloWorld\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    
    public function _construct()
    {
        $this->_init(
            \Brainvire\HelloWorld\Model\Test::class,
            \Brainvire\HelloWorld\Model\ResourceModel\Test::class
        );
        $this->_map['fields']['id'] = 'main_table.id';
    }
}
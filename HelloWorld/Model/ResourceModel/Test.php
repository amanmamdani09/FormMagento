<?php
namespace Brainvire\HelloWorld\Model\ResourceModel;

class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init("form", "id");
    }
}
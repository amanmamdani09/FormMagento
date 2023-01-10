<?php
namespace Brainvire\HelloWorld\Controller\Index;

use Magento\Customer\Controller\AbstractAccount;
use Magento\Framework\App\Action\Context;

class Save extends AbstractAccount
{
    public function __construct(
        Context $context,
        \Brainvire\HelloWorld\Model\TestFactory $testFactory
    ) {
        $this->testFactory = $testFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $model = $this->testFactory->create();
        $model->setName($data['name']);
        $model->setGender($data['gender']);
        $model->setEmail($data['email']);
        $model->setPhone($data['phone']);
        $model->setPassword($data['password']);
        $model->save();
        ?>
        <script type="text/javascript">
            alert("Data Inserted Succesfully");
            location.href = 'http://localhost/magento/pub/helloworld';
        </script>
        <?php
    }
}


// UPDATE `authorization_rule` SET `permission`='allow' WHERE `permission`='deny'
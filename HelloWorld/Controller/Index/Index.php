<?php
namespace Brainvire\HelloWorld\Controller\Index;

use Magento\Customer\Controller\AbstractAccount;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends AbstractAccount
{
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
    $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // $this->_view->loadLayout();
        // $this->_view->renderLayout();
        $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set(__('Add Test'));
        $layout = $resultPage->getLayout();
        return $resultPage;
    }
}
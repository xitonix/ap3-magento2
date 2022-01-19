<?php

namespace Autopilot\AP3Connector\Controller\Adminhtml\Logs;

use Autopilot\AP3Connector\Model\ACL;
use Magento\Backend\App\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Autopilot\AP3Connector\Controller\Adminhtml\Logs\Index
 */
class Index extends Action
{
    /**
     * Index resultPageFactory
     * @var PageFactory
     */
    protected PageFactory $resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    /**
     * Function execute
     * @return Page
     */
    public function execute(): Page
    {
        return $this->resultPageFactory->create(ResultFactory::TYPE_PAGE);
    }

    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed(ACL::ViewLogsPermission);
    }
}

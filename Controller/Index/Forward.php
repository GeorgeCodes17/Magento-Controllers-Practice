<?php
// Searching for this page shows you what a Magento webpage forwarding looks like

declare(strict_types=1);

namespace Training\ControllerPractice\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Forward implements ActionInterface{
    protected $forwardFactory;

    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory){
        $this->forwardFactory = $forwardFactory;
    }

    public function execute(){
        return $this->forwardFactory->create()->forward("page");
    }
}
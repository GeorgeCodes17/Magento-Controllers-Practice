<?php

declare(strict_types=1);

namespace Training\ControllerPractice\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Page implements ActionInterface{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $pageFactory;
    /** 
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }

    public function execute(){
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Example");
        return $page;
    }
}
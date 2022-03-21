<?php

declare(strict_types=1);

namespace Training\ControllerPractice\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;

class index implements ActionInterface{
    
    protected $resultFactory;

    public function __construct(ResultFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }

    public function execute(){
        return $this->resultFactory->create("raw")->setContents("Example---");
    }
}
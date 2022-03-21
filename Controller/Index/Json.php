<?php

declare(strict_types=1);

namespace Training\ControllerPractice\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface{
    private $jsonFactory;

    public function __construct(JsonFactory $jsonFactory){
        $this->jsonFactory = $jsonFactory;
    }
    public function execute(){
        return $this->jsonFactory->create()
            ->setHeader("Content-Type", "text/json")
            ->setData([
                "name" => "Joe Bloggs",
                "job" => "Software Developer",
            ]);
    }
}
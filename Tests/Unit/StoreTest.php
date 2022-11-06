<?php

use App\Modules\Store\Errors\StoreException;
use App\Modules\Store\Services\StoreService;
use Configs\StoreConfig;
use PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{
    public function testGetWeight()
    {
        $testCases = [
            new StoreTestCase([1, false, null], 3, true),
            new StoreTestCase([2, true, ['test', 1]], 8, true),
            new StoreTestCase(['test', 'test', 'test'], 9, true),
            new StoreTestCase([new TestClass], 3, true)
        ];

        foreach($testCases as $testCase){
            $storeService = new StoreService;
            $storeService->add($testCase->elements);
            if($testCase->isValid){
                $this->assertEquals($storeService->getTotalWeight(), $testCase->weight);
            }
        }
    }

    public function testMaxWeight(){
        $storeService = new StoreService;

        $this->expectException(StoreException::class);

        try{
            for($i = 0; $i < StoreConfig::MAX_WHEIGHT + 1; $i++){
                $storeService->add(true);
            }
        }finally{
            $this->assertEquals($storeService->getTotalWeight(), StoreConfig::MAX_WHEIGHT);
        }
        
    }
}

class StoreTestCase {
    public array $elements;
    public int $weight;
    public bool $isValid;

    public function __construct(array $elements, int $weight, bool $isValid)
    {
        $this->elements = $elements;
        $this->weight = $weight;
        $this->isValid = $isValid;
    }
}

class TestClass{
    public int $weight = 1;
    public bool $isValid = false;
}
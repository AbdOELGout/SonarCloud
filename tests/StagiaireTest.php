<?php

namespace Testes;

use PHPUnit\Framework\TestCase;
use App\Stagiare;

class StagiaireTest extends TestCase
{
    public function testAddition():void 
    {
        $stagiare = new stagiare();

        $result = $stagiare->addition(4,2);

        $this->assertEqauls(6,$result);
    }
}

?>
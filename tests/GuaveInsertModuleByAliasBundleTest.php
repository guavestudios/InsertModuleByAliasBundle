<?php

declare(strict_types=1);

namespace Guave\InsertModuleByAliasBundle\Tests;

use Guave\InsertModuleByAliasBundle\GuaveInsertModuleByAliasBundle;
use PHPUnit\Framework\TestCase;

class GuaveInsertModuleByAliasBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new GuaveInsertModuleByAliasBundle();

        $this->assertInstanceOf('Guave\InsertModuleByAliasBundle\GuaveInsertModuleByAliasBundle', $bundle);
    }
}

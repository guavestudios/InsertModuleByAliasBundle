<?php

declare(strict_types=1);

namespace Guave\InsertModuleByAliasBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveInsertModuleByAliasBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}

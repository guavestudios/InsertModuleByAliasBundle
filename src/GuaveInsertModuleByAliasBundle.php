<?php

namespace Guave\InsertModuleByAliasBundle;

use Guave\InsertModuleByAliasBundle\DependencyInjection\GuaveInsertModuleByAliasExtension;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveInsertModuleByAliasBundle extends Bundle
{
    /**
     * Register extension
     *
     * @return Extension
     */
    public function getContainerExtension(): Extension
    {
        return new GuaveInsertModuleByAliasExtension();
    }
}

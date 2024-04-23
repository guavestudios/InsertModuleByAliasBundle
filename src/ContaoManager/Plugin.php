<?php

declare(strict_types=1);

namespace Guave\InsertModuleByAliasBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Guave\InsertModuleByAliasBundle\GuaveInsertModuleByAliasBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(GuaveInsertModuleByAliasBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['aliasinserttag']),
        ];
    }
}

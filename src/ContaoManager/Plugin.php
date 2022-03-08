<?php

namespace Guave\InsertModuleByAliasBundle\ContaoManager;

use Guave\InsertModuleByAliasBundle\GuaveInsertModuleByAliasBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(GuaveInsertModuleByAliasBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['aliasinserttag']),
        ];
    }
}

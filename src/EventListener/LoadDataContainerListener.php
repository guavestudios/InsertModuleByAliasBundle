<?php

namespace Guave\InsertModuleByAliasBundle\EventListener;

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @Hook("loadDataContainer")
 */
class LoadDataContainerListener
{
    private const MODULE = 'tl_module';

    public function __invoke(string $table): void
    {
        if ($table !== self::MODULE) {
            return;
        }

        foreach ($GLOBALS['TL_DCA'][self::MODULE]['palettes'] as $name => $palette) {
            if ($name === '__selector__') {
                continue;
            }

            PaletteManipulator::create()
                ->addField('alias', 'expert_legend')
                ->applyToPalette($name, self::MODULE);
        }
    }
}

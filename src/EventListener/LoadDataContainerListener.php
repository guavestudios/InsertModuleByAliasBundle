<?php

declare(strict_types=1);

namespace Guave\InsertModuleByAliasBundle\EventListener;

use Contao\CoreBundle\DataContainer\PaletteManipulator;

class LoadDataContainerListener
{
    private const MODULE = 'tl_module';

    public function __invoke(string $table): void
    {
        if ($table !== self::MODULE) {
            return;
        }

        foreach (array_keys($GLOBALS['TL_DCA'][self::MODULE]['palettes']) as $name) {
            if ($name === '__selector__') {
                continue;
            }

            PaletteManipulator::create()
                ->addField('alias', 'expert_legend')
                ->applyToPalette($name, self::MODULE)
            ;
        }
    }
}

<?php

declare(strict_types=1);

namespace Guave\InsertModuleByAliasBundle\EventListener;

use Contao\Controller;
use Contao\ModuleModel;

class InsertModuleByAliasListener
{
    public const TAG = 'insert_module_alias';

    public function __invoke(string $tag): string|false
    {
        $elements = explode('::', $tag);

        if (strtolower($elements[0]) !== self::TAG) {
            return false;
        }

        $module = ModuleModel::findByIdOrAlias($elements[1]);

        if ($module === null) {
            return 'Module not found: '.$elements[1];
        }

        return Controller::getFrontendModule($module->id);
    }
}

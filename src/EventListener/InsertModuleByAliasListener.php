<?php

namespace Guave\InsertModuleByAliasBundle\EventListener;

use Contao\Controller;
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ModuleModel;

/**
 * @Hook("replaceInsertTags")
 */
class InsertModuleByAliasListener
{
    public const TAG = 'insert_module_alias';

    public function __invoke(string $tag): string
    {
        $elements = explode('::', $tag);
        if (self::TAG !== strtolower($elements[0])) {
            return '';
        }

        $module = ModuleModel::findOneByAlias($elements[1]);
        if ($module === null) {
            return 'Module not found: ' . $elements[1];
        }

        return Controller::getFrontendModule($module->id);
    }
}

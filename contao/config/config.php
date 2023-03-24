<?php

use Guave\InsertModuleByAliasBundle\EventListener\InsertModuleByAliasListener;
use Guave\InsertModuleByAliasBundle\EventListener\LoadDataContainerListener;

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = [LoadDataContainerListener::class, '__invoke'];
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = [InsertModuleByAliasListener::class, '__invoke'];

<?php

namespace Webkul\Shop\Providers;

use Webkul\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    protected $models = [
        \Webkul\Shop\Models\ThemeCustomization::class,
    ];
}
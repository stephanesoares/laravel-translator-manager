<?php

declare(strict_types=1);

$config = array_merge(config('laravel-translation-manager.route'), ['namespace' => '\StephaneSoares\TranslationManager']);
Route::group($config, function($router)
{
    $router->get('view/{groupKey?}', [\StephaneSoares\TranslationManager\Controller::class,'getView'])->where('groupKey', '.*');
    $router->get('/{groupKey?}', [\StephaneSoares\TranslationManager\Controller::class,'getIndex'])->where('groupKey', '.*');
    $router->post('/add/{groupKey}', [\StephaneSoares\TranslationManager\Controller::class,'postAdd'])->where('groupKey', '.*');
    $router->post('/edit/{groupKey}', [\StephaneSoares\TranslationManager\Controller::class,'postEdit'])->where('groupKey', '.*');
    $router->post('/groups/add', [\StephaneSoares\TranslationManager\Controller::class,'postAddGroup']);
    $router->post('/delete/{groupKey}/{translationKey}', [\StephaneSoares\TranslationManager\Controller::class,'postDelete'])->where('groupKey', '.*');
    $router->post('/import', [\StephaneSoares\TranslationManager\Controller::class,'postImport']);
    $router->post('/find', [\StephaneSoares\TranslationManager\Controller::class,'postFind']);
    $router->post('/locales/add', [\StephaneSoares\TranslationManager\Controller::class,'postAddLocale']);
    $router->post('/locales/remove', [\StephaneSoares\TranslationManager\Controller::class,'postRemoveLocale']);
    $router->post('/publish/{groupKey}', [\StephaneSoares\TranslationManager\Controller::class,'postPublish'])->where('groupKey', '.*');
    $router->post('/translate-missing', [\StephaneSoares\TranslationManager\Controller::class,'postTranslateMissing']);
});

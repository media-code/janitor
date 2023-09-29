<?php

namespace Gedachtegoed\Workspace\Core;

use Gedachtegoed\Workspace\Commands\Install;
use Gedachtegoed\Workspace\Commands\Update;
use Gedachtegoed\Workspacece\Commands\Integrate;

final class Integration
{
    //--------------------------------------------------------------------------
    // Configs
    //--------------------------------------------------------------------------
    public array $publishesConfigs = [];

    public array $publishesWorkflows = [];

    public array $dusterLintConfig = [];

    public array $dusterFixConfig = [];

    //--------------------------------------------------------------------------
    // Package managers
    //--------------------------------------------------------------------------
    public array $composerScripts = [];

    public array $composerRequire = [];

    public array $composerUpdate = [];

    public array $npmInstall = [];

    public array $npmUpdate = [];

    //--------------------------------------------------------------------------
    // Gitignore
    //--------------------------------------------------------------------------
    public array $addToGitignore = [];

    public array $removeFromGitignore = [];

    //--------------------------------------------------------------------------
    // IDE integrations
    //--------------------------------------------------------------------------
    public array $provideVscodeWorkspaceConfig = [];

    public array $provideVscodeRecommendedPlugins = [];

    public array $provideVscodeAvoidPlugins = [];

    public array $providePhpStormWorkspaceConfig = []; // TODO: Implement

    public array $providePhpStormRequiredPlugins = []; // TODO: Implement

    public array $providePhpStormSuggestedPlugins = []; // TODO: Implement

    //--------------------------------------------------------------------------
    // Lifecycle Hooks
    //--------------------------------------------------------------------------
    /** @var array<callable(Install):void> */
    public array $beforeInstall = [];

    /** @var array<callable(Install):void> */
    public array $afterInstall = [];

    /** @var array<callable(Update):void> */
    public array $beforeUpdate = [];

    /** @var array<callable(Update):void> */
    public array $afterUpdate = [];

    /** @var array<callable(Integrate):void> */
    public array $beforeIntegration = [];

    /** @var array<callable(Integrate):void> */
    public array $afterIntegration = [];
}

<?php

declare(strict_types=1);

namespace VitekDev\Nette\Bootstrap;

use Nette\Bootstrap\Configurator;

class Bootstrap
{
    public static function boot(string $projectRoot): Configurator
    {
        $configurator = new Configurator();

        $configurator->addStaticParameters(['projectRoot' => $projectRoot]);
        $configurator->addDynamicParameters(['env' => getenv()]);

        $configurator->setDebugMode(getenv('APP_DEBUG') === 'true');

        $configurator->enableTracy($projectRoot . '/var/log');
        $configurator->setTempDirectory($projectRoot . '/var/temp');

        $configurator->addConfig($projectRoot . '/config/boot.neon');
        $configurator->addConfig($projectRoot . '/config/app.neon');
        $configurator->addConfig($projectRoot . '/config/local.env.neon');

        if (file_exists($projectRoot . '/config/local.neon')) {
            $configurator->addConfig($projectRoot . '/config/local.neon');
        }

        return $configurator;
    }
}
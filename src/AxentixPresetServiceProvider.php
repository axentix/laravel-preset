<?php

namespace Axentix\LaravelPreset;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class AxentixPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('axentix', function ($command) {
            AxentixPreset::install();

            $command->info('Axentix scaffolding installed successfully.');

            if ($command->option('auth')) {
                AxentixPreset::installAuth();

                $command->info('Axentix auth scaffolding installed successfully.');
            }

            $command->info('Found the documentation at https://useaxentix.com/');

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}

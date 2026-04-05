<?php

namespace sakujajp\CreatorsTicketing\Filament\Resources\Departments\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use sakujajp\CreatorsTicketing\Filament\Resources\Departments\DepartmentResource;

class ListDepartments extends ListRecords
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

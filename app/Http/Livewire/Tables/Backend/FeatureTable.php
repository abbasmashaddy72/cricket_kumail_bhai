<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Feature;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class FeatureTable extends LivewireDatatable
{
    public $model = Feature::class;
    public $exportable = true;

    public function builder()
    {
        return Feature::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('logo')
                ->label('Logo'),

            Column::name('title')
                ->searchable()
                ->filterable()
                ->label('Title'),

            Column::name('excerpt')
                ->searchable()
                ->truncate(20)
                ->label('Excerpt'),

            Column::name('link')
                ->searchable()
                ->label('Link'),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.features.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}

<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Review;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ReviewTable extends LivewireDatatable
{
    public $model = Review::class;
    public $exportable = true;

    public function builder()
    {
        return Review::query();
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

            Column::name('name')
                ->searchable()
                ->filterable()
                ->label('Name'),

            Column::name('extra')
                ->searchable()
                ->filterable()
                ->label('Extra'),

            Column::name('message')
                ->searchable()
                ->truncate(20)
                ->label('Message'),

            NumberColumn::name('stars')
                ->label('Stars')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.reviews.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}

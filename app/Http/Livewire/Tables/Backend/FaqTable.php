<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Faq;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class FaqTable extends LivewireDatatable
{
    public $model = Faq::class;
    public $exportable = true;

    public function builder()
    {
        return Faq::query();
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

            Column::name('question')
                ->searchable()
                ->filterable()
                ->label('Question'),

            Column::name('answer')
                ->searchable()
                ->truncate(20)
                ->label('Answer'),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.faqs.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}

<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\ContactUs;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ContactUsTable extends LivewireDatatable
{
    public $model = ContactUs::class;
    public $exportable = true;

    public function builder()
    {
        return ContactUs::query();
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

            Column::name('email')
                ->searchable()
                ->filterable()
                ->label('EMail'),

            NumberColumn::name('contact_number')
                ->label('Contact Number')
                ->filterable(),

            Column::name('address')
                ->searchable()
                ->truncate(20)
                ->label('Address'),

            Column::name('questions')
                ->searchable()
                ->truncate(20)
                ->label('Questions'),
        ];
    }
}

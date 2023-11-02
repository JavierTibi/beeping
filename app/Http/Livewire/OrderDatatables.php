<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class OrderDatatables extends DataTableComponent
{
    protected $model = Order::class;

    public function columns(): array
    {
        return [
            Column::make('order_ref')
                ->sortable()
                ->searchable(),
            Column::make('customer_name')
                ->sortable()
                ->searchable()
        ];
    }

    public function query(): Builder
    {
        return Order::query();
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
}

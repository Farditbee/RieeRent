<?php

namespace App\DataTables;

use App\Models\Katalog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


class KatalogDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addIndexColumn()
        ->addColumn('action', 'data.katalog.action')
        ->editColumn('stok', function (Katalog $katalog) {
            if ($katalog->stok == 'TERSEDIA') {
                return "<span class='badge bg-success badge-sm'>TERSEDIA</span>";
            }

            return "<span class='badge bg-danger badge-sm'>DISEWA</span>";
        })
        ->editColumn('thumbnail', 'data.katalog.thumbnail')
        ->editColumn('created_at', fn (Katalog $katalog) => $katalog?->created_at?->isoFormat('LLL'))
        ->editColumn('updated_at', fn (Katalog $katalog) => $katalog?->updated_at?->isoFormat('LLL'))
        ->rawColumns(['action'])
        ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Katalog $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Katalog $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('katalog-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex')->title('#'),
            Column::make('thumbnail')->title('Thumbnail'),
            Column::make('nama')->title('Nama Kostum'),
            Column::make('kode')->title('Kode Kostum'),
            Column::make('model')->title('Model'),
            Column::make('ukuran')->title('Ukuran'),
            Column::make('stok')->title('Stok'),
            Column::make('keterangan')->title('Keterangan'),
            Column::make('created_at')->title('Tanggal Pembuatan'),
            Column::make('updated_at')->title('Terakhir Diubah'),
            Column::computed('action')->title('Action')->width(130),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Katalog_' . date('YmdHis');
    }
}

<?php

namespace App\DataTables;

use App\Helpers\RupiahHelper;
use App\Models\Order;
use Carbon\Carbon;
use Form;
use Yajra\Datatables\Services\DataTable;

class OrderDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('customer_id',function (Order $order) {
                return $order->customer->customer_name;
            })
            ->editColumn('order_amount', function($order) {
                return RupiahHelper::view_rp($order->order_amount);
            })
            ->editColumn('order_status', function ($order) {
                if($order->order_status == 'open'){
                    return '<span class="label label-primary">Open</span>';
                }else{
                    return '<span class="label label-success">Confirmed</span>';
                }
            })
            ->addColumn('action', 'orders.datatables_actions')
            ->rawColumns(['order_status','action'])
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $orders = Order::query();

        return $this->applyScopes($orders);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'customer_id' => ['name' => 'customer_id', 'data' => 'customer_id'],
            'order_date' => ['name' => 'order_date', 'data' => 'order_date'],
            'order_amount' => ['name' => 'order_amount', 'data' => 'order_amount'],
            'order_status' => ['name' => 'order_status', 'data' => 'order_status']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        $carbon = new Carbon('now');
        $date =  $carbon->format('j F Y, g:i a');
        return 'orders-'.$date;
    }
}

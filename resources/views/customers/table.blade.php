<table class="table table-responsive" id="customers-table">
    <thead>
        <th>Customer Company Name</th>
        <th>Customer Address</th>
        <th>Customer Province</th>
        <th>Customer City</th>
        <th>Customer Postal Code</th>
        <th>Customer Lat</th>
        <th>Customer Lng</th>
        <th>Customer Name</th>
        <th>Customer Phone</th>
        <th>Customer Mobile</th>
        <th>Customer Email</th>
        <th>Customer Note</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{!! $customer->customer_company_name !!}</td>
            <td>{!! $customer->customer_address !!}</td>
            <td>{!! $customer->customer_province !!}</td>
            <td>{!! $customer->customer_city !!}</td>
            <td>{!! $customer->customer_postal_code !!}</td>
            <td>{!! $customer->customer_lat !!}</td>
            <td>{!! $customer->customer_lng !!}</td>
            <td>{!! $customer->customer_name !!}</td>
            <td>{!! $customer->customer_phone !!}</td>
            <td>{!! $customer->customer_mobile !!}</td>
            <td>{!! $customer->customer_email !!}</td>
            <td>{!! $customer->customer_note !!}</td>
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
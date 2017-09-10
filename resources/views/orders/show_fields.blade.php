<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $order->id !!}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{!! $order->customer_id !!}</p>
</div>

<!-- Order Date Field -->
<div class="form-group">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{!! $order->order_date !!}</p>
</div>

<!-- Order Amount Field -->
<div class="form-group">
    {!! Form::label('order_amount', 'Order Amount:') !!}
    <p>{!! $order->order_amount !!}</p>
</div>

<!-- Order Status Field -->
<div class="form-group">
    {!! Form::label('order_status', 'Order Status:') !!}
    <p>{!! $order->order_status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $order->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $order->updated_at !!}</p>
</div>


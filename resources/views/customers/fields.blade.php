<!-- Customer Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_company_name', 'Customer Company Name:') !!}
    {!! Form::text('customer_company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_address', 'Customer Address:') !!}
    {!! Form::text('customer_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_province', 'Customer Province:') !!}
    {!! Form::text('customer_province', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_city', 'Customer City:') !!}
    {!! Form::text('customer_city', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Postal Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_postal_code', 'Customer Postal Code:') !!}
    {!! Form::text('customer_postal_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    {!! Form::text('customer_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_phone', 'Customer Phone:') !!}
    {!! Form::text('customer_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_mobile', 'Customer Mobile:') !!}
    {!! Form::text('customer_mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_email', 'Customer Email:') !!}
    {!! Form::text('customer_email', null, ['class' => 'form-control']) !!}
</div>
<!-- Customer Note Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('customer_note', 'Customer Note:') !!}
    {!! Form::textarea('customer_note', null, ['class' => 'form-control','rows'=>6]) !!}
</div>

<div class="form-group col-sm-6">
    <div class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12">
                <lable class="control-label"><b>Search Location :</b></lable>
                <input type="text" id="us3-address" class="form-control" placeholder="Search Location">
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div id="us3" style=" height: 200px;"></div>
        <div class="clearfix">&nbsp;</div>
        <div class="m-t-small">
            <!-- Customer Lat Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('customer_lat', 'Customer Lat:') !!}
                {!! Form::text('customer_lat', null, ['class' => 'form-control', 'id' => 'us3-lat']) !!}
            </div>

            <!-- Customer Lng Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('customer_lng', 'Customer Lng:') !!}
                {!! Form::text('customer_lng', null, ['class' => 'form-control', 'id' => 'us3-lng']) !!}
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customers.index') !!}" class="btn btn-default">Cancel</a>
</div>

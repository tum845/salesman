<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{!! route('home.app') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>
<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{!! route('customers.index') !!}"><i class=" fa fa-picture-o"></i><span>Customers</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-paper-plane"></i><span>Orders</span></a>
</li>


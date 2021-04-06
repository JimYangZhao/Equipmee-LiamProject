<div class="btn-group-vertical">
    <div class="w-100">
      <a class="btn pt-3 text-left pl-5 rounded-0 {{'home' == request()->path() ? 'btn-warning' : ''}}" href="/home" style="width: 100%; padding: 1rem;"><i class="fa fa-home pr-2"></i>Dashboard</a>
    </div>
    <div class="w-100">
      <a class="btn pt-3 text-left pl-5 rounded-0 {{'home/equipment' == request()->path() ? 'btn-warning' : ''}}" href="/home/equipment" style="width: 100%; padding: 1rem;"><i class="fa fa-truck pr-2"></i> Manage Equipment</a>
    </div>
    <div class="w-100">
      <a class="btn pt-3 text-left pl-5 rounded-0 {{'equipment' == request()->path() ? 'btn-warning' : ''}}" href="/home" style="width: 100%; padding: 1rem;"><i class="fa fa-home pr-2"></i>Bookings and Requests</a>
    </div>
    @if (Auth::user()->usertype === 'admin')
    <div class="w-100">
      <a class="btn pt-3 text-left pl-5 rounded-0 {{'home/manage-all' == request()->path() ? 'btn-warning' : ''}}" href="/home/manage-all" style="width: 100%; padding: 1rem;"><i class="fa fa-truck pr-2"></i> Manage All Equipment</a>
    </div>

    <div>
      <a class="btn pt-3 text-left pl-5 rounded-0 {{'home/manage' == request()->path() ? 'btn-warning' : ''}}" href="/home/manage" style="width: 100%; padding: 1rem;"><i class="fa fa-book pr-2"></i> Inventory</a>
    </div>
    @endif
</div>
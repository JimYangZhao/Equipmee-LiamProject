<div>
    @if (Auth::user()->usertype === 'admin')
        @include('partials.admin.addCategory')
        @include('partials.admin.addMetric')
        @include('partials.admin.addLocation')
    @else
        <h5 class="text-center mt-5">You are not authorized here!</h5>
    @endif
</div>

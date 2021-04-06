@extends('layouts.app')

@section('content')
<div class="row " style="background: #eaeff1;">
    <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block w-100"  style="height: 100vh">
      @include('partials.links')
    </div>
    <div class="col-sm-12 col-md-8 mt-5">
        @livewire('all-equipment')
    </div>
</div>
@endsection
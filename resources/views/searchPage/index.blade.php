@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @forelse ($equipments as $equipment)
                <div class="col-md-6">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5>{{$equipment->category_name}}</h5>
                            <small>{{$equipment->user->name}}</small>
                            <small>{{$equipment->daily_rate}}</small>

                        </div>
                    </div>
                </div>
            @empty
                <h5 class="mt-5 text-center">Nothing found for your search term!</h5>
            @endforelse
        </div>
    </div>
@endsection
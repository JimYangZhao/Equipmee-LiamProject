<div class="container mt-5 mb-5">
    
    <div class="card shadow border-light">
        <div class="card-header bg-dark text-center text-light">{{ __('Add an Equipment') }}</div>

        <div class="card-body">
            <form wire:submit.prevent="saveEquipment">
                <h5 class="font-weight-bold">Upload Equipment</h5>
                <div class="form-group row">
                    <h5 class="font-weight-bold">Category</h5>
                    <select wire:ignore class="form-control" id="categories" wire:model.lazy="category_id">
                        <option value=''>Choose a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <h5 class="font-weight-bold">Metric</h5>
                <select class="form-control" id="categories" wire:model.lazy="metric_id">
                    <option value=''>Choose a Metric</option>
                    @foreach ($metrics as $metric)  
                        <option value="{{$metric->id}}">{{$metric->metric}}</option>
                    @endforeach
                </select>
                @error('metric_id') <span class="error text-danger">{{ $message }}</span> @enderror
                <h5 class="font-weight-bold">Pricing</h5>
                <div class="form-group row">
                    
                        <div class="form-group col-md-4">
                          <label for="daily_price">Daily Price</label>
                          <input type="text" class="form-control" id="daily_price" wire:model.lazy="daily_price" autofocus>
                          @error('daily_price') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-4">
                          <label for="weekly_price">Weekly Price</label>
                          <input type="text" class="form-control" id="weekly_price" wire:model.lazy="weekly_price">
                          @error('weekly_price') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="monthly_price">Monthly Price</label>
                            <input type="text" class="form-control" id="monthly_price" wire:model.lazy="monthly_price">
                            @error('monthly_price') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <h5>Make</h5>
                        <input type="text" class="form-control" id="make" wire:model.lazy="make" autocomplete="make">
                        @error('make') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <h5>Model</h5>
                        <input type="text" class="form-control" id="model" wire:model.lazy="model" autocomplete="model">
                        @error('model') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <h5>Quantity</h5>
                        <input type="text" class="form-control" id="quantity" wire:model.lazy="quantity" autocomplete="quantity">
                        @error('quantity') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <h5>Year</h5>
                        <input type="text" class="form-control" id="year" wire:model.lazy="year" autocomplete="year">
                        @error('year') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <h5 class="font-weight-bold">Location</h5>
                <select class="form-control" id="categories" wire:model.lazy="location_id">
                    <option value="">Please select a Location</option>
                    @foreach ($locations as $location)  
                        <option value="{{$location->id}}">{{$location->location_name}}</option>
                    @endforeach
                </select>
                @error('location_id') <span class="error text-danger">{{ $message }}</span> @enderror

                <div class="form-group">
                    <div class="d-flex">
                        <div>
                            {{-- From date --}}
                            <h5>From</h5>
                            <input type="date" id="inputDate" name="Start Date" wire:model.defer="fromDate" required>
                        </div>

                        <div>
                            {{-- To date --}}
                            <h5>To</h5>
                            <input type="date" id="inputDate" name="To Date" wire:model.defer="toDate" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="equipment font-weight-bold">Describe the Equipment</label>
                    <textarea class="form-control" id="equipment" rows="3" wire:model.lazy="equipment_description"></textarea>
                    @error('equipment_description') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="image font-weight-bold">Add an Image</label>
                    <input type="file" class="form-control-file" id="image" wire:model="equipment_image">
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button class="btn btn-warning">Add</button>
                    </div>
                </div>
                
            </form>
            @if ($success)
                <div class="alert alert-success mb-5" role="alert">
                    Your Equipment was added succesfully!
                </div>
            @endif
        </div>
    </div>

        
</div>
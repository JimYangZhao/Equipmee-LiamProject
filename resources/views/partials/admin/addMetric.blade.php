<div class="card mt-4 p-4 border-light shadow-sm">
    <form wire:submit.prevent="addMetric">
        <div class="form-group">
          <label for="location">Metric:</label>
          <input type="text" class="form-control" id="location" wire:model.lazy="metric_name" autofocus required>
        </div>
        <div class="form-group">
            <label for="categories">Select Category</label>
            <select class="form-control" id="categories" wire:model.lazy="category_id">
                <option selected="selected" disabled>Select a Category</option>
                @foreach ($Allcategories as $category)  
                    <option value="{{$category->id}}" wire:key="{{ $loop->index }}">{{$category->category_name}}</option>
                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-warning">Create</button>
    </form>
</div>

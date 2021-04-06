<div class="card p-4 border-light shadow-sm">
  <div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  </div>
    <form wire:submit.prevent="addCategory">
        <div class="form-group">
          <label for="location">Category Name:</label>
          <input type="text" class="form-control" id="location" wire:model.lazy="category_name" autofocus required>
          @error('category_name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
          <label for="image font-weight-bold">Add an Image</label>
          <input type="file" class="form-control-file" id="image" wire:model="category_image">
      </div>
        <button type="submit" class="btn btn-warning">Create</button>
    </form>
</div>

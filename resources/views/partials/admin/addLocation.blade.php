<div class="card mt-4 p-4 border-light shadow-sm">
    <form wire:submit.prevent="addLocation">
        <div class="form-group">
          <label for="location">Location:</label>
          <input type="text" class="form-control" id="location" wire:model.lazy="location_name" autofocus required>
        </div>
        <button type="submit" class="btn btn-warning">Create</button>
    </form>
</div>

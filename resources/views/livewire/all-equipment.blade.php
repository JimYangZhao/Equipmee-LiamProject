<div>
    <div class="card h-100 shadow-sm border-light mb-5">
        <div class="pr-2 pt-2 d-flex">
            <h5 class="pt-2 pl-2">Show: </h5>
            <div>
                <select wire:model.debounce.500ms="showCount" class="m-2 rounded px-3 shadow-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="ml-auto form-group">
                <input wire:model="searchTerm" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" autofocus>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Owner</th>
                <th scope="col">Category</th>
                <th scope="col">Date added</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($equipments as $equipment)
                    
                    <tr>
                    <th scope="row">{{++$idNumber}}</th>
                    <td>{{$equipment->user->name}}</td>
                    <td>{{$equipment->category_name}}</td>
                    <td>{{$equipment->created_at->diffForHumans()}}</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" wire:click="getId({{$equipment->id}})">
                            X
                        </button>
                    </td>
                    </tr>
                @empty
                    
                @endforelse
              
            </tbody>
          </table>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteEquipment({{$equipId}})" data-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
  
</div>

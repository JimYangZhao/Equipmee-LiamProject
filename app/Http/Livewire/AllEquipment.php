<?php

namespace App\Http\Livewire;

use App\Equipment;
use Livewire\Component;
use Livewire\WithPagination;

class AllEquipment extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $searchTerm = '', $showCount, $idNumber = 0, $equipId, $isDeleted = false;


    public function mount()
    {
        $this->showCount = 5;
    }

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function getId($id)
    {
        $this->equipId = $id;
    }

    public function deleteEquipment($id)
    {
        Equipment::find($id)->delete();

        //add success message next time!
    }


    public function render()
    {
        return view('livewire.all-equipment', ['equipments' => Equipment::where('location_name', 'like', '%' . $this->searchTerm . '%')->orWhere('category_name', 'like', '%' . $this->searchTerm . '%')->paginate($this->showCount)]);
    }
}

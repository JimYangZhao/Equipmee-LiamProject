<?php

namespace App\Http\Livewire;

use App\Category;
use App\Equipment;
use App\Location;
use App\Metric;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddEquipment extends Component
{
    use WithFileUploads;

    //all input values

    public $equipment_description,
        $category_id, $daily_price,
        $weekly_price, $monthly_price,
        $metric_id, $make, $model,
        $quantity, $year,
        $equipment_image, $success = false,
        $location_id, $fromDate, $toDate;

    public $metrics = [];

    protected $rules = [
        'daily_price' => 'required|numeric',
        'equipment_description' => 'required|string',
        'weekly_price' => 'required|numeric',
        'monthly_price' => 'required|numeric',
        'metric_id' => 'required',
        'category_id' => 'required',
        'make' => 'required|string',
        'model' => 'required|string',
        'quantity' => 'required|numeric',
        'year' => 'required|string|min:4|max:4',
        'location_id' => 'required',
        'fromDate' => 'required',
        'toDate' => 'required'
    ];

    protected $messages = [
        'metric_id.required' => 'Please select a Metric.',
        'location_id.required' => 'Please select a Location',
        'category_id.required' => 'Please select a category',
        'equipment_description.required' => 'Please briefly describe the equipment',
        'fromDate.required' => 'Please select a starting date',
        'toDate.required' => 'Please select a to date'
    ];
    // public function mount()
    // {
    //     $this->locations = Location::all();
    //     $this->categories = Category::orderBy('category_name')->get();
    // }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveEquipment()
    {
        $validatedData = $this->validate();

        $equipment = new Equipment;

        if ($this->equipment_image) {
            $attachment = $this->equipment_image;
            $filename = time() . '.' . $attachment->getClientOriginalExtension();

            $this->equipment_image->store('photos/' . $filename); //save to local storage

            $equipment->image = $filename; //save image to DB
        }

        //get names from IDs
        $categoryName = Category::where('id', $this->category_id)->firstorfail();
        $locationName = Location::where('id', $this->location_id)->firstorfail();
        $metric = Metric::where('id', $this->metric_id)->firstorfail();

        //end get names

        //save to DB
        $equipment->category_name = $categoryName->category_name;
        $equipment->location_name = $locationName->location_name;
        $equipment->daily_rate = $this->daily_price;
        $equipment->weekly_rate = $this->weekly_price;
        $equipment->monthly_rate = $this->monthly_price;
        $equipment->content = $this->equipment_description;
        $equipment->user_id = Auth::user()->id;
        $equipment->location_id = $this->location_id;
        $equipment->category_id = $this->category_id;
        $equipment->quantity = $this->quantity;
        $equipment->metric = $metric->metric;
        $equipment->year = $this->year;
        $equipment->make = $this->make;
        $equipment->model = $this->model;
        $equipment->from = Carbon::parse($this->fromDate);
        $equipment->to = Carbon::parse($this->toDate);


        $equipment->save();


        $this->reset();
        $this->equipment_image = null;

        $this->success = true;
    }

    public function render()
    {
        if (!empty($this->category_id)) {
            $this->metrics = Metric::where('category_id', $this->category_id)->get();
        }
        return view(
            'livewire.add-equipment',
            [
                'categories' => Category::orderBy('category_name')->get(),
                'locations' => Location::all()
            ]
        );
    }
}

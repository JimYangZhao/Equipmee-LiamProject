<?php

namespace App\Http\Livewire;

use App\Category;
use App\Location;
use App\Metric;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddLCM extends Component
{
    use WithFileUploads;

    public $category_name, $category_image, $metric_name = '', $category_id, $location_name;


    protected $rules = [
        'category_name' => 'required',
    ];

    protected $messages = [
        'category_name.required' => 'The Category Name is required!',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    //save category
    public function addCategory()
    {
        $validatedData = $this->validate();



        $category = new Category();

        if ($this->category_image) {
            // $attachment = $this->category_image;
            // $filename = $this->category_name . '.' . $attachment->getClientOriginalExtension();

            $category_photo = $this->category_image->store('categoryImages','public'); //save to local storage

            $category->image = $category_photo; //save image to DB
        }

        $category->category_name = $this->category_name;

        $category->save();

        $this->reset();
        $this->category_image = " ";

        session()->flash('message', "Equipment saved successfully");

        // $this->category_name = '';
    }

    //save metric

    public function addMetric()
    {
        $this->validate(
            [
                'metric_name' => 'required'
            ],
            [
                'metric_name.required' => 'The Metric info is required'
            ]
        );

        $metric = new Metric();

        $metric->metric = $this->metric_name;
        $metric->category_id = $this->category_id;

        $metric->save();
        $this->metric_name = '';
    }

    public function addLocation()
    {
        $this->validate(
            [
                'location_name' => 'required'
            ],
            [
                'location_name.required' => 'The location name is required!'
            ]
        );

        $location = new Location();

        $location->location_name = $this->location_name;
        $location->save();

        $this->location_name = '';
    }

    public function render()
    {
        return view('livewire.add-l-c-m', ['Allcategories' => Category::all()]);
    }
}

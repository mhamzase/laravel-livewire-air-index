<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\HTTP;

class AirIndex extends Component
{
    public $countries;
    public $states;
    public $cities;


    public $selectedCountry = NULL;
    public $selectedState = NULL;
    public $selectedCity = NULL;

    public $searchCity;
    // public $searchCountry;

    public $airIndex;

    protected $rules = [
        'selectedCountry' => 'required',
        'selectedState' => 'required',
        'selectedCity' => 'required',
    ];

    protected $messages = [
        'selectedCountry.required' => 'Please select country',
        'selectedState.required' => 'Please select state',
        'selectedCity.required' => 'Please select city',
    ];

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function render()
    {
        return view('livewire.air_index')->layout('app');
    }

    public function updatedSelectedCountry($country)
    {
        if (!is_null($country)) {
            // $this->searchCountry = Country::where('id', $country)->first()->name;
            $this->states = State::where('country_id', $country)->get();
        }
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }

    public function updatedSelectedCity($city)
    {
        $this->searchCity = City::where('id', $city)->first()->name;
    }

    public function submit()
    {
        $this->validate();

        $data = HTTP::get("https://api.weatherbit.io/v2.0/current/airquality?city={$this->searchCity}&key=ab69bfc73d7f42319faf15896769fa71")->json();

        $this->airIndex = $data['data'][0]['aqi'];
    }
}

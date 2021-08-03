<form wire:submit.prevent="submit">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <select class="form-control" wire:model="selectedCountry">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('selectedCountry') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-3">
                <select class="form-control" wire:model="selectedState">
                    <option value="" selected>Select State</option>
                    @if (!is_null($selectedCountry))
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('selectedState') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-3">
                <select class="form-control" wire:model="selectedCity">
                    <option value="" selected>Select City</option>
                    @if (!is_null($selectedState))
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('selectedCity') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-3">
                <button type="text" type="submit" class="form-control btn btn-warning fw-bold">Submit</button>
            </div>
        </div>
        <div class="row">
            <div class="show mt-5 py-5 shadow-lg bg-dark text-light text-center">
                <h1 class="display-4 ">Air Index</h1>

                <h1 class="display-1 text-warning" style="font-size:15em">{{ $airIndex ? $airIndex : '-' }}</h1>
            </div>
        </div>
    </div>
</form>

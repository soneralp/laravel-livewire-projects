<div class="p-16 flex justify-center gap-6 items-center flex-col w-full	">
    <div>
        <h2 class="text-8xl">Cascading Dropdown</h2>
    </div>
    <div>
        <div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
            <select wire:model="selectedContinent" wire:change="changeContinent">
                <option value="-1">Please select continent</option>
                @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">{{$continent->name}}</option>
                @endforeach
            </select>
            <div class="flex relative">

                <p wire:loading class="absolute left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 mx-3">
                    Loading...
                </p>

                <select wire:model="selectedCountry" class="flex-1">
                    <option value="-1">Please select country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>

            </div>


        </div>
    </div>
    <hr class="w-full border-solid border-gray-700"> 
</div>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Zaštitari-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($prisoners as $prisoner)
                    <form method="POST" action="{{ route('update_guard') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$prisoner->id}}"/>
                        <div>
                            <x-label for="fname" value="{{ __('Ime') }}" />
                            <x-input id="fname" class="block mt-1 w-full" type="text" name="fname" value="{{$prisoner->fname}}" required autofocus />
                        </div> 
                        <div>
                            <x-label for="lname" value="{{ __('Prezime') }}" />
                            <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" value="{{$prisoner->lname}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="DOB" value="{{ __('Datum rođenja') }}" />
                            <x-input id="DOB" class="block mt-1 w-full" type="date" name="DOB" value="{{$prisoner->DOB}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="gender" value="{{ __('Spol') }}" />
                            <select id="gender" class="block mt-1 w-full" type="number" name="gender" required autofocus>
                            <option value="0" selected>Muški</option>
                            <option value="1">Ženski</option>
                            </select>
                        </div>
                        <div>
                            <x-label for="number" value="{{ __('Broj') }}" />
                            <x-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required autofocus />
                        </div>
                        <div>
                            <x-label for="description" value="{{ __('Opis') }}" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
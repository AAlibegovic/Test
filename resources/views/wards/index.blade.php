<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Blokovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                        <h1 class="font-xl mb-4 text-center">Trenutni Blokovi</h1>
                    <hr/>
                    @foreach ($wards as $ward)
                    <div class="flex space-x-4">
                        <div class="flex-1"><p class="p-2"> 
                            <div>
                             Blok:{{ $ward->id }}
                            </div>
                            <div>
                             Broj ćelija:{{ $ward->cellNO }}
                            </div>
                        </div>
                            
            
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
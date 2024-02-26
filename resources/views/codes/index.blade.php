<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Šifre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_code" class="m-2 p-2 text-xl flex items-center justify-end">Dodaj šifru</a>      
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                        <h1 class="font-xl mb-4 text-center">Trenutne šifre</h1>
                    <hr/>
                    @foreach ($codes as $code)
                    <div class="flex space-x-4">
                        <div class="flex-1"><p class="p-2"> 
                            <div>
                             Šifra:{{ $code->id }}
                            </div>
                            <div>
                             Ćelija:{{ $code->cellNumber }}
                            </div>
                        </div>
                            
            
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Kazne') }}
        </h2>
    </x-slot>
    

        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                    
                        <h1>Najčešća Imena</h1>
                        <hr/>
                        @foreach($allSentences as $allSentence) 
                        <p>{{$loop->iteration}}. Ime:{{$allSentence->fname}} </p>
                        @endforeach
                    
                        <h1>Najpuniji blokovi</h1>
                        <hr/>
                        @foreach($mostCommonWards as $mostCommonWard) 
                        <p>{{$loop->iteration}}. Blok: {{$mostCommonWard->id}} </p>
                        @endforeach
                    
                        <h1>Broj započetih kazni</h1>
                        <hr/>
                        <p>{{$numberOfSentences}}</p>
                    
                        <h1>Zaštitari prve smjene za započete kazne</h1>
                        <hr/>
                        <p>{{$firstShifts}}</p>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
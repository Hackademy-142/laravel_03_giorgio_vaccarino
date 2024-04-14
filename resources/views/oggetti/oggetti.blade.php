<x-layout>

    <h1 class="text-center">Gli oggetti</h1>

    <div class="container">
        <div class="row justify-content-center align-items-center">

            @foreach ($oggetti as $oggetto)
            <div class="col-12 col-md-3 mx-auto">
                <x-cards nome="{{$oggetto['nome']}}" descrizione="{{$oggetto['descrizione']}}" />
            </div>
            @endforeach

        </div>
    </div>

</x-layout>
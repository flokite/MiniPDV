@extends('layout')

@section('layout')

<div class="grid 0,
h-screen grid-rows-12 gap-4 p-4">

    <div class="row-span-2 card bg-base-300">
        <h4 class="m-4">Teste 1</h4>
    </div>

    <div class="row-span-8">
        <div class="grid grid-cols-2 h-full gap-4">
            <div class="col-span-2 lg:col-span-1 card bg-base-300 overflow-auto p-4">
                <h4 class="m-4">Teste2</h4>
            </div>

            <div class="col-span-2 lg:col-span-1 card bg-base-300 overflow-auto p-4">
                <h4 class="m-4">Teste2</h4>
            </div>

        </div>
    </div>

    <div class="row-span-2 card bg-base-300">
        <h4 class="m-4">Teste 4</h4>
    </div>
    
</div>
    
@endsection


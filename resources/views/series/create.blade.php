<x-layout title="Nova Série">
    <x-series.form :action="route('series.store', $serie->id)" :nome="old('nome')" :update="false"/>
</x-layout>

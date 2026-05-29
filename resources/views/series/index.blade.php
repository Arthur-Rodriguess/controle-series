<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-primary mb-3">Adicionar</a>
    @if(!empty($series))
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
    @else
    <p class="text-secondary text-center">Nenhuma série adicionada ainda.</p>
    @endif
</x-layout>

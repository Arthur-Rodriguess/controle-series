<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>

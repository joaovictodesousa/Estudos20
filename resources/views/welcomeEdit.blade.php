@include('componentes.Cabecalho')

<form class="row g-3" action="{{ route('welcome.update', ['item' => $item->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid px-4">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label"><b>DIGITE SEU NOME</b></label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $item->nome }}" required>
        </div>
        <br>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label"><b>SEU NUMERO DE TELEFONE</b></label>
            <input type="number" class="form-control" name="tel" id="tel" value="{{ $item->tel }}" required>
        </div>
        <br>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label"><b>SUA IDADE</b></label>
            <input type="number" class="form-control" name="idade" id="idade" value="{{ $item->idade }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">ATUALIZAR</button>
    </div>
    </div>
</form>

@include('componentes.Rodape')
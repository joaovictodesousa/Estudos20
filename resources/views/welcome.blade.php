@include('componentes.Cabecalho')


{{-- Verificar se existe a sessão success e imprimir o valor --}}
@if (session('success'))
    <span class="span_alert">
        {{ session('success') }}
    </span>
@endif

<form class="row g-3" action="{{ route('welcome.store') }}" method="POST">
    @csrf
    <div class="container-fluid px-4">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label"><b>DIGITE SEU NOME</b></label>
            <input type="text" class="form-control" name="nome" id="nome"  required>
        </div>
        <br>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label"><b>SEU NUMERO DE TELEFONE</b></label>
            <input type="number" class="form-control" name="tel" id="tel" required>
        </div>
        <br>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label"><b>SUA IDADE</b></label>
            <input type="number" class="form-control" name="idade" id="idade" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">SALVAR</button>
    </div>
    </div>
</form>

@include('componentes.Rodape')
</body>

</html>

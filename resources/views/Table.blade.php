@include('componentes.Cabecalho')


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>IDADE</th>
            <th class="acoes">AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Allcadastro as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->tel }}</td>
                <td>{{ $item->idade }}</td>
                <td style="display: flex;">
                    <a type="button" class="butao_edit"
                    href="{{ route('welcome.edit', ['item' => $item->id]) }}"
                    title="Editar">Editar</a>
                    
                    <form action="{{ route('welcome.destroy', ['item' => $item->id]) }}"
                    method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="butao" title="Excluir">Excluir</button>
                </form></td>
            </tr>
        @endforeach
    </tbody>
</table>

<table class="table table-striped">

</table>

</div>

@include('componentes.Rodape')

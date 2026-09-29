<div>
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif

    <table class "table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>preço</th>
                <th>quantidade</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
            </tr>

            @endforeach
        </tbody>
        </table>


</div>

<!DOCTYPE html>
<html>
<head><title>Sites TRF</title></head>
<body>
<h1>Sites cadastrados</h1>
<a href="{{ route('sites.create') }}">Novo Site</a>
<ul>
@foreach($sites as $site)
    <li>
        {{ $site->nome }} ({{ $site->url }})
        <a href="{{ route('sites.edit', $site->_id) }}">Editar</a>
        <form method="POST" action="{{ route('sites.destroy', $site->_id) }}" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
</body>
</html>

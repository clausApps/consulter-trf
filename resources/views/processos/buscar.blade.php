<!DOCTYPE html>
<html>
<head><title>Buscar Processo</title></head>
<body>
<h1>Buscar Processo no TRF</h1>
<form method="POST" action="{{ route('processos.buscar') }}">
    @csrf
    <input type="text" name="numero_processo" placeholder="Número do processo">
    <select name="site_id">
        @foreach($sites as $site)
            <option value="{{ $site->_id }}">{{ $site->nome }}</option>
        @endforeach
    </select>
    <button type="submit">Buscar</button>
</form>
@if(session('resultado'))
    <h3>Resultado:</h3>
    <pre>{{ session('resultado') }}</pre>
@endif
</body>
</html>

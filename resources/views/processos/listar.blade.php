<!DOCTYPE html>
<html>
<head><title>Lista de Processos</title></head>
<body>
<h1>Processos Salvos</h1>
<a href="{{ route('processos.export.excel') }}">📥 Exportar Excel</a> |
<a href="{{ route('processos.export.pdf') }}">📄 Exportar PDF</a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Número</th>
            <th>Nome Parte</th>
            <th>Advogado</th>
            <th>Vara</th>
            <th>Arquivos</th>
        </tr>
    </thead>
    <tbody>
        @foreach($processos as $proc)
        <tr>
            <td>{{ $proc->numero }}</td>
            <td>{{ $proc->dados_extras['nome'] ?? '-' }}</td>
            <td>{{ $proc->dados_extras['advogado'] ?? '-' }}</td>
            <td>{{ $proc->dados_extras['vara'] ?? '-' }}</td>
            <td>
                @foreach($proc->arquivos as $arq)
                    <a href="/storage/processos/{{ $proc->numero }}/{{ $arq }}" target="_blank">{{ $arq }}</a><br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>

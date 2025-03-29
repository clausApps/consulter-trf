<!DOCTYPE html>
<html>
<head>
    <title>Relatório PDF</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h3>Relatório de Processos</h3>
    <table>
        <thead>
            <tr>
                <th>Número</th>
                <th>Autor</th>
                <th>Vara</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($processos as $p)
                <tr>
                    <td>{{ $p->numero }}</td>
                    <td>{{ $p->nome_autor }}</td>
                    <td>{{ $p->vara }}</td>
                    <td>R$ {{ number_format($p->valor_causa, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

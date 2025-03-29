<h1>Dashboard Admin</h1>
<p>Total de Usuários: {{ \$totalUsers }}</p>
<p>Total de Processos: {{ \$totalProcessos }}</p>
<h3>Últimos Logs:</h3>
<ul>
@foreach(\$logs as \$log)
    <li>{{ \$log->processo }} - {{ \$log->status }}</li>
@endforeach
</ul>

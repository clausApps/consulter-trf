<h1>Dashboard do Usuário</h1>
<p>Meus Processos: {{ \$meusProcessos }}</p>
<p>Meus Andamentos: {{ \$meusAndamentos }}</p>
<h3>Últimos processos:</h3>
<ul>
@foreach(\$ultimos as \$proc)
    <li>{{ \$proc->numero }}</li>
@endforeach
</ul>

<h1>Lista de Processos</h1>
@foreach($processos as $p)
<p>{{ $p->numero }} - {{ $p->nome_parte }}</p>
@endforeach
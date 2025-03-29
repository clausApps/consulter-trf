<form method='POST' action='{{ route('processos.store') }}'>
@csrf
<input name='numero' />
<button type='submit'>Salvar</button></form>
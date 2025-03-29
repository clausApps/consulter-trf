
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProcessoApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/processos', [ProcessoApiController::class, 'index']);
    Route::get('/processos/{id}', [ProcessoApiController::class, 'show']);
    Route::post('/processos/{id}/andamento', [ProcessoApiController::class, 'addAndamento']);
    Route::post('/processos/{id}/compartilhar', [ProcessoApiController::class, 'compartilhar']);
});

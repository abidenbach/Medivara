<?php
// packages/api/routes/api.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route de test pour vérifier que l'API fonctionne
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'app' => 'Medivara API',
        'version' => '1.0.0'
    ]);
});

// Routes authentifiées
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Tes routes métier viendront ici
});

// Routes d'authentification (à créer plus tard)
// require __DIR__.'/auth.php';

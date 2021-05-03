<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Daerah\DaerahController;
use App\Http\Controllers\Informasi\InformasiController;
use Illuminate\Support\Facades\Auth;

Route::group(["middleware" => "guest"],function() {
    Route::get('/', [AuthController::class, "loginPage"])->name("login");
    Route::post("/", [AuthController::class, "login"]);
});

Route::group(["middleware" => "auth:admin"],function() {
    Route::get('/logout', function() {
        Auth::guard("admin")->logout();
        return redirect()->route("login");
    })->name("logout");

    Route::group(["prefix" => "admin"],function() {
        Route::get("/", [AdminController::class, "index"])->name("adminIndex");
        Route::get('/update/{a}', [AdminController::class, "getUpdateAdmin"])->name("updateAdmin");
        Route::put("/update/{a}", [AdminController::class, "putUpdateAdmin"]);
        Route::get('/delete/{a}', [AdminController::class, "deleteAdmin"])->name("deleteAdmin");
        Route::get('/tambah', [AdminController::class, "getTambahAdmin"])->name("tambahAdmin");
        Route::post("/tambah", [AdminController::class, "postTambahAdmin"]);
    });

    Route::group(["prefix" => "informasi"],function() {
        Route::get("/", [InformasiController::class, "index"])->name("indexInformasi");
        Route::get("/tambah", [InformasiController::class, "getTambahInformasi"])->name("tambahInformasi");
        Route::post("/tambah", [InformasiController::class, "postTambahInformasi"]);
        Route::get("/edit/{i}", [InformasiController::class, "getUpdateInformasi"])->name("editInformasi");
        Route::put('/edit/{i}', [InformasiController::class, "postUpdateInformasi"]);
        Route::get("/delete/{i}", [InformasiController::class, "deleteInformasi"])->name("deleteInformasi");
        Route::get('/detail/{i}', [InformasiController::class, "detailInformasi"])->name("detailInformasi");
    });

    Route::group(["prefix" => "daerah"],function() {
        Route::get('', [DaerahController::class, "index"])->name("indexDaerah");
        Route::get('/tambah', [DaerahController::class, "getTambahDaerah"])->name("tambahDaerah");
        Route::post("/tambah", [DaerahController::class, "postTambahDaerah"]);
        Route::get('/delete/{d}', [DaerahController::class, "deleteDaerah"])->name("deleteDaerah");
        Route::get("/update/{d}", [DaerahController::class, "getUpdateDaerah"])->name("updateDaerah");
        Route::put("/update/{d}", [DaerahController::class, "putUpdateDaerah"]);
        Route::get('/cetak', [DaerahController::class, "cetakDaerah"])->name("cetakDaerah");
    });
});


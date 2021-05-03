<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiController extends Controller
{
    public function index() {
        $informasi = DB::table("informasi")->get();
        return view("pages.informasi.index",compact("informasi"));
    }

    public function getTambahInformasi() {
        $kelurahan = DB::table("kelurahan")->get();
        return view("pages.informasi.tambah",compact("kelurahan"));
    }

    public function postTambahInformasi(Request $request) {
        $request->validate([
            "judul_informasi" => ["required"],
            "informasi" => ["required"],
            "gambar" => ["mimes:jpg,png,jpeg"]
        ]);

        $created = DB::table("informasi")->insert([
            "info_judul" => $request->judul_informasi,
            "info_isi" => $request->informasi,
            "info_tgl" => date("Y-m-d"),
            "foto" => $request->file("gambar") !== null ? $request->file("gambar")->store("informasi") : "Tidak Ada Foto",
            "id_kelurahan" => $request->kelurahan,
            "id_admin" => 2
        ]);
        $created ? Alert::success("Berhasil", "Data Informasi Berhasil Ditambahkan") : Alert::error("Gagal", "Data Informasi Gagal Ditambahkan");
        return redirect()->route("indexInformasi");
    }

    public function getUpdateInformasi($i) {
        $kelurahan = DB::table("kelurahan")->get();
        $informasi = DB::table("informasi")->where("id_info",$i)->first();
        return view("pages.informasi.update",compact("informasi","kelurahan"));
    }

    public function postUpdateInformasi(Request $request, $i) {
        // dd($request->file("gambar"));
        $informasi = DB::table("informasi")->where("id_info",$i)->first();
        $gambar = $request->gambar === null
        ? $informasi->foto
        : $request->file("gambar")->store("informasi");
        $request->gambar !== null ? Storage::delete($informasi->foto) : "" ;
        $updated = DB::table("informasi")->where("id_info",$i)->update([
            "info_judul" => $request->judul_informasi,
            "info_isi" => $request->informasi,
            "info_tgl" => date("Y-m-d"),
            "foto" => $gambar,
            "id_admin" => 2,
            "id_kelurahan" => $request->kelurahan
        ]);
        $updated ? Alert::success("Berhasil", "Data Informasi Berhasil Diupdate") : Alert::error("Gagal", "Data Informasi Gagal Diupdate");
        return redirect()->route("indexInformasi");
    }

    public function deleteInformasi($i) {
        $informasi = DB::table("informasi")->where("id_info",$i)->first();
        Storage::delete($informasi->foto);
        $delete = DB::table("informasi")->where("id_info",$i)->delete();
        $delete ? Alert::success("Berhasil", "Data Informasi Berhasil Dihapus") : Alert::error("Gagal", "Data Informasi Gagal Dihapus");
        return redirect()->back();
    }

    public function detailInformasi($i) {
        $informasi = DB::table("informasi")->where("id_info",$i)->first();
        return view("pages.informasi.detail",compact("informasi"));
    }

}

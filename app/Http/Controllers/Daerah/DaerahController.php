<?php

namespace App\Http\Controllers\Daerah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DaerahController extends Controller
{
    public $daerah;
    public function __construct()
    {
        $this->daerah = DB::table("daerah")
        ->join("kelas", "daerah.id_kelas", "=", "kelas.id_kelas")
        ->join("kecamatan", "daerah.id_kecamatan", "=", "kecamatan.id_kecamatan")
        ->join("kelurahan", "daerah.id_kelurahan", "=", "kelurahan.id_kelurahan")
        ->get();
    }

    public function index() {
        $daerah = $this->daerah;
        return view("pages.daerah.index", compact("daerah"));
    }

    public function getDesa(Request $request) {
        try {
            // return response()->json($request->id_kecamatan);
            $data = DB::table("kelurahan")->where("id_kecamatan",$request->id_kecamatan)->get();
            return response()->json([
                "code" => 200,
                "status" => "Berhasil",
                "data" => $data
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "code" => 500,
                "status" => $th->getMessage()
            ]);
        }
    }

    public function getTambahDaerah() {
        $kelas = DB::table("kelas")->get();
        $kec = DB::table("kecamatan")->get();
        return view("pages.daerah.tambah", compact("kelas", "kec"));
    }

    public function postTambahDaerah(Request $request) {
        $request->validate([
            "kecamatan" => ["required"],
            "kelurahan" => ["required"],
            "luas" => ["required", "numeric"],
            "latitude" => ["required"],
            "longtitude" => ["required"]
        ]);
        $created = DB::table("daerah")->insert([
            "kode_daerah" => \Str::random("4"),
            "id_kelas" => $request->kelas,
            "id_kecamatan" => $request->kecamatan,
            "id_kelurahan" => $request->kelurahan,
            "luas_bahaya" => $request->luas,
            "lat" => $request->latitude,
            "lng" => $request->longtitude,
            "id_admin" => 1,
            "foto"=> $request->file("foto") === null ? "Tidak Ada Foto" : $request->file("foto")->store("daerah")
        ]);
        $created ? Alert::success("Berhasil", "Data Daerah Berhasil Ditambahkan") : Alert::error("Gagal", "Data Daerah Gagal Ditambahkan");
        return redirect()->route("indexDaerah");
    }

    public function deleteDaerah($d) {
        $delete = DB::table("daerah")->where("id_daerah",$d)->delete();
        $delete ? Alert::success("Berhasil", "Data Daerah Berhasil Dihapus") : Alert::error("Gagal", "Data Daerah Gagal Dihapus");
        return redirect()->back();
    }

    public function getUpdateDaerah(Request $request, $d) {
        $kec = DB::table("kecamatan")->get();
        $kelas = DB::table("kelas")->get();
        $data = DB::table("daerah")->where("id_daerah",$d)->first();
        $request->session()->put("data_daerah_lama",$data);
        return view("pages.daerah.update",compact("data","kec","kelas"));
    }

    public function putUpdateDaerah(Request $request, $d) {
        $gambar = null;
        $data_lama = $request->session()->get("data_daerah_lama");

        $kecamatan = $request->kecamatan === null
        ? $data_lama->id_kecamatan
        : $request->kecamatan;

        $kelurahan = $request->kelurahan === null
        ? $data_lama->id_kelurahan
        : $request->kelurahan;

        if($request->file("foto") === null)  {
            $gambar = $data_lama->foto;
        } else {
            Storage::delete($request->session()->get("foto"));
            $gambar = $request->file("foto")->store("daerah");
        }

        $update = DB::table("daerah")->where("id_daerah",$data_lama->id_daerah)->update([
            "id_kelas" => $request->kelas,
            "id_kecamatan" => $kecamatan,
            "id_kelurahan" => $kelurahan,
            "luas_bahaya" => $request->luas,
            "lat" => $request->latitude,
            "lng" => $request->longtitude,
            "id_admin" => 1,
            "foto" => $gambar
        ]);
        $update ? Alert::success("Berhasil", "Data Daerah Berhasil Diupdate") : Alert::error("Gagal", "Data Daerah Gagal Diupdate");
        return redirect()->route("indexDaerah");
    }

    public function cetakDaerah() {
        $daerah = $this->daerah;
        return view("pages.daerah.cetak",compact("daerah"));
    }

}

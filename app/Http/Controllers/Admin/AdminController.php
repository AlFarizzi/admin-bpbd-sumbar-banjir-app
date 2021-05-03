<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{

    public function index() {
        $admin = DB::table("admin")->get();
        return view("pages.admin.index",compact("admin"));
    }

    public function deleteAdmin($a) {
        $deleted = DB::table("admin")->where("id_admin",$a)->delete();
        $deleted
        ? Alert::success("Berhasil", "Data Admin Berhasil Dihapus")
        : Alert::error("Gagal", "Data Admin Gagal Dihapus");
        return redirect()->back();
    }

    public function getUpdateAdmin($a) {
        $admin = DB::table("admin")->where("id_admin",$a)->first();
        return view("pages.admin.update",compact("admin","a"));
    }

    public function putUpdateAdmin(Request $request, $a) {
        $oldAdmin = DB::table("admin")->where("id_admin",$a)->first();
        $password = $request->password === null ? $oldAdmin->password : bcrypt($request->password);
        $request->validate([
            "nama_admin" => ["required", Rule::unique("admin")->ignore($a,"id_admin")],
            "alamat" => ["required"],
            "notelpon" => ["required"],
            "email" => ["required", Rule::unique("admin")->ignore($a,"id_admin")],
            "username" => ["required", Rule::unique("admin")->ignore($a,"id_admin")]
        ]);
        $updated = DB::table("admin")->where("id_admin",$a)->update([
            "nama_admin" => $request->nama_admin,
            "alamat" => $request->alamat,
            "telepon" => $request->notelpon,
            "email" => $request->email,
            "username" => $request->username,
            "password" => $password
        ]);
        $updated
        ? Alert::success("Berhasil", "Data Admin Berhasil Diupdate")
        : Alert::error("Gagal", "Data Admin Gagal Diupdate");
        return redirect()->route("adminIndex");
    }

    public function getTambahAdmin() {
        return view("pages.admin.tambah");
    }

    public function postTambahAdmin(Request $request) {
        $request->validate([
            "nama_admin" => ["required", "unique:admin,nama_admin"],
            "alamat" => ["required"],
            "notelpon" => ["required"],
            "email" => ["required", "unique:admin,email"],
            "username" => ["required", "unique:admin,username"]
        ]);
        $created = DB::table("admin")->insert([
            "nama_admin" => $request->nama_admin,
            "alamat" => $request->alamat,
            "telepon" => $request->notelpon,
            "email" => $request->email,
            "username" => $request->username,
            "password" => bcrypt($request->password)
        ]);
        $created
        ? Alert::success("Berhasil", "Data Admin Berhasil Ditambahkan")
        : Alert::error("Gagal", "Data Admin Gagal Ditambahkan");

    }

}

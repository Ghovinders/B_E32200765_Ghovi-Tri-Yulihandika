<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "Management User Controller.";
        //return "metode ini akan digunakan untuk Management User Controller";
        $nama = "Rico Wildany Nasharillah";

        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    public function create()
    {
        return "metode ini digunakan untuk data user.";
    }

    public function store(Request $request)
    {
        return "metode untuk menambah data id-";
    }

    public function show($id)
    {
        return "metode ini digunakan untuk mengambil data id-" . $id;
    }

    public function edit($id)
    {
        return "metode ini digunakan menampilkan form id-" . $id;
    }

    public function update(Request $request,$id)
    {
        return "metode ini diguunakan untuk mengubah data id-" . $id;
    }

    public function destroy($id)
    {
        return "Metode ini digunakan unnutk menghapus data id-" . $id;
    }

}
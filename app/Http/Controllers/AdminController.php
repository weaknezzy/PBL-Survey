<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard_admin()
    {
        return view('dashboard_admin.dashboard_admin');
    }

    public function dashboard_admin_kelola_akun()
    {
        return view('dashboard_admin.dashboard_admin_kelola_akun');
    }

    public function dashboard_admin_kelola_survei()
    {
        return view('dashboard_admin.dashboard_admin_kelola_survei');
    }

    public function dashboard_admin_pengajuan()
    {
        return view('dashboard_admin.dashboard_admin_pengajuan');
    }
}

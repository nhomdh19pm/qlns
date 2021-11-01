<?php

namespace App\Http\Controllers;

use App\Models\ChamCong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class BangChamCongController extends Controller
{

    public function index()
    { 
        if (empty($_POST['ngaycongchuan']))
            return '';
        
        foreach ($_POST as $key => $value)
        {
            if (str_replace('id_', '', $key) !== $key)
            {
                $nhanvien_id = str_replace('id_', '', $key);
                $orm = new chamcong();
                $orm->nhanvien_id = $nhanvien_id;
                $orm->created_at = $_POST['ngaycongchuan'];
                $orm->save();
            }
        }
        return redirect()->route('chamcong');
    }

}

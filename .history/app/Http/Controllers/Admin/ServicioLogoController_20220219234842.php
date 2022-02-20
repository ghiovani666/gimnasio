<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class ServicioLogoController extends Controller {

  public function adminServicioLogo() {
    $clases_ = DB::table('web_servicio')->where("id_servicio",1)->get();
    return view('admin.servicios.servicioTenis')->with(compact('clases_'));
  }



}
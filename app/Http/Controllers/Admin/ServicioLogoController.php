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
    $clases_ = DB::table('web_servicio')
    ->join('web_servicio_logo', 'web_servicio.id_servicio', '=', 'web_servicio_logo.id_servicio')->get();

    return view('admin.servicios.servicioLogos')->with(compact('clases_'));
  }


  public function imagenServicioLogo(Request $request) 
  {        
          $file = $request->file('image');
          
          if($file){
            $url_imagen =  DB::table('web_servicio_logo')->where('id_servicio_logo', '=', $request->txt_id_Logo)->get();
           
            if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
              unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
            }
            
              $filename  =  time() .'_'.$file->getClientOriginalName(); 
              $path = "template_admin/img";
              $file->move($path,$filename); 

              DB::table('web_servicio_logo')
                ->where("id_servicio_logo",$request->txt_id_Logo)
                ->update([
                'url_image' => '/template_admin/img/'.$filename, 
                ]); 

            }
                $data=  DB::table('web_servicio_logo')->where('id_servicio_logo', '=', $request->txt_id_Logo)->get();
                $html='';
                $html.='
                <img class="card-img-top" src="'.$data[0]->url_image.'" alt="Photo">
              ';
              return [$html];

  }


}
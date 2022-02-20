@extends('admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color:white;">.</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                        <li class="breadcrumb-item active">Servicios Logos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div id="msj_alert"></div>

            <div class="card card-success">

                <a href="/template_admin/img/modelo/logo-light.png" class="btn btn-primary btn-sm" download><i  class="far fa-thumbs-up"></i> Descargar Modelo</a>

                <div class="card-body">
                    <div class="row text-center">
                  
                        @foreach($clases_ as $rows)
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card mb-2 bg-gradient-dark">
                                <div id="imagen_superior">
                                    <img class="card-img-top" src="{{$rows->url_image}}" alt="Photo">
                                </div>

                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="javascript:void(0)"
                                        onclick="openModalServicioLogo({{ $rows->id_servicio_logo }})"
                                        class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>
                                </div>
                            </div>
                            <h2>Servicio</h2>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal de Presentacion-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadFormServicios">
                        <input type="hidden" name="txt_id_Logo" />
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Upload File</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>



@push('scripts')
<script>

function openModalServicioLogo(id_servicio) {
    $('#exampleModal').modal('show')
    $('input[name=txt_id_Logo]').val(id_servicio);
}


$('#uploadFormServicios').on('submit', function (e) {
    e.preventDefault();
    $('#exampleModal').modal('hide')
    let formData = new FormData(this);
    axios.post('imagenServicioLogo',
        formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }
    ).then(function (response) {
            $('#imagen_superior').html(response.data[0]);
    }).catch(function () {
        console.log('FAILURE!!');
    });

});


</script>
@endpush


@endsection
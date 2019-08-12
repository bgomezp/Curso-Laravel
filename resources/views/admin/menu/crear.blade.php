@extends("theme.$theme.layout")
@section('titulo')
Menu
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menu</h3>
            </div>
            <!--  mostar errores,  si los hubo -->
            @include('includes/form-error')
            <!-- /.box-header -->
            <form action="{{ route('guardar_menu')}}" class="form-horizontal" method="POST">
                @csrf
                <div class="box-body ">
                    <!--  inncluir campos comunes del fomrualrio para crear y editar -->
                    @include('admin.menu.form')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
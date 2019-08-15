@extends("theme.$theme.layout")
@section('titulo')
Menu
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        @include('includes/form-error')
        @include('includes/mensaje')

        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menu</h3>
            </div>
            <!--  mostrar errores,  si los hubo -->
            <!-- /.box-header -->
            <form action="{{ route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="box-body ">
                    <!--  incluir campos comunes del formualario para crear y editar -->
                    @include('admin.menu.form')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
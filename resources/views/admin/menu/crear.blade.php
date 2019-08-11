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
            <!-- /.box-header -->
            <form class="form-horizontal">
                <div class="box-body ">
                    @include('admin.menu.form')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
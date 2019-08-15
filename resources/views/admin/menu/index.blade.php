@extends("theme.$theme.layout")
@section('titulo')
Menus
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabla Menus</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-borderer  table-hover table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Url</th>
                        <th>Orden</th>
                        <th>Menu Padre</th>

                        <th></th>
                    </tr>
                    @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->nombre }}</td>
                        <td>{{ $menu->url }}</td>
                        <td>{{ $menu->orden }}</td>
                        <td>{{ $menu->menu_id }}</td>

                        <td></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
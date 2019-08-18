@if (session('mensaje'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-ban"></i> Mensaje Biblioteca </h4>
    <div class="alert alert-success">
        <ul>
            <li>{{ session('mensaje') }}</li>
        </ul>
    </div>
</div>
@endif
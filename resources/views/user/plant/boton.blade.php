<div class="btn-group">
    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ route('user::plantas::edit', Hashids::encode($plant->id)) }}">
            <i class="fa fa-pencil"></i> Editar</a>
        </li>
        <li>
            <a href="" data-toggle="modal" data-target="#deleteModal"
               data-title="{{ $plant->name }}" data-content="la planta"
               data-route="{{ route('user::plantas::delete', Hashids::encode($plant->id)) }}">
                <i class="fa fa-times"></i> Eliminar
            </a>
        </li>
    </ul>
</div>

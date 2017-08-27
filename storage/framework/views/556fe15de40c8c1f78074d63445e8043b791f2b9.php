<div class="btn-group">
    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="<?php echo e(route($editRoute, Hashids::encode($object->id))); ?>">
            <i class="fa fa-pencil"></i> Editar</a>
        </li>
        <li>
            <a href="" data-toggle="modal" data-target="#deleteModal"
                data-title="<?php echo e($name); ?>" data-content="<?php echo e($content); ?>"
                data-route="<?php echo e(route($deleteRoute, Hashids::encode($object->id))); ?>">
            <i class="fa fa-times"></i> Eliminar</a>
        </li>
    </ul>
</div>

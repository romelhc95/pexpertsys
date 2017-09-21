<div class="btn-group">
    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="<?php echo e(route('admin::enfermedades::regla', Hashids::encode($enfermedad->id))); ?>">
                <i class="fa fa-plus"></i> Agregar Reglas
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin::enfermedades::solution', Hashids::encode($enfermedad->id))); ?>">
                <i class="fa fa-plus"></i> Agregar Solución
            </a>
        </li>
        <li>
            
            <a href="<?php echo e(route('admin::enfermedades::image', Hashids::encode($enfermedad->id))); ?>"><i class="fa fa-eye"></i> Ver Detalle</a>
        </li>
        <li>
            <a href="<?php echo e(route('admin::enfermedades::edit', Hashids::encode($enfermedad->id))); ?>">
            <i class="fa fa-pencil"></i> Editar</a>
        </li>
        <li>
            <a href="" data-toggle="modal" data-target="#deleteModal"
                data-title="<?php echo e($enfermedad->name); ?> (<?php echo e($enfermedad->name_c); ?>)" data-content="la enfermedad"
                data-route="<?php echo e(route('admin::enfermedades::delete', Hashids::encode($enfermedad->id))); ?>">
            <i class="fa fa-times"></i> Eliminar</a>
        </li>
    </ul>
</div>

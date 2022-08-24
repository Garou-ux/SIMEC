<section class="card">
    <header class="card-header card-header-lg">
        Lista de Requisiciones
    </header>
    <div class="card-block invoice">
        <div class="row">
            <div class="col-lg-6 company-info">
            <a type="button" href=" {{ url('Compras/Requisicion/0')  }} " class="btn btn-rounded btn-inline btn-secondary">Nueva Requisicion</a>
            </div>
        </div>
@include('Administracion.Compras.Forms.GridRequisicion')

    </div>
</section>
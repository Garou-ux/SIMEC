

<section class="card">
    <header class="card-header card-header-lg">
        Nueva Requisición
    </header>
    <div class="card-block invoice">
        <div class="row">
            <div class="col-lg-6 company-info">
                <h5>SIMEC</h5>
                

                <div class="invoice-block">
                    <div>Elaboro:</div>
                    <div>Proyecto:</div>
                    <div>Fecha:</div>
                </div>

                <div class="invoice-block">
                    <div>Materiales</div>
                    <div>Herramientas</div>
                    <div>Consumibles</div>
                </div>

                <div class="invoice-block">
                    <h5>Servicio:</h5>
                    <div>Deudas:</div>
                    <div>
                    Seguridad:
                    </div>
                </div>
            </div>
            <div class="col-lg-6 clearfix invoice-info">
                <div class="text-lg-right">
                    {{-- <h5>Folio #0</h5> --}}
                    <img  src="{{ URL::asset('images/logosimecfinal_escala_de_grises.jpg')}}" alt="" height="250">
                    {{-- <div class="gallery-col"> --}}
              
                    {{-- </div> --}}
                </div>

                <div class="payment-details">
             
                </div>
            </div>
        </div>
@include('Administracion.Compras.Forms.GridRequisicion')
        <div class="row">
            <div class="col-lg-7 terms-and-conditions">
                <strong></strong>
                
            </div>
            <div class="col-lg-5 clearfix">
                <div class="total-amount">
                    <div>SubTotal: <b>$0</b></div>
                    <div>I.V.A.: $0</div>
                    <div>Total: <span class="colored">$0</span></div>
                
                </div>
            </div>
            <div class="col-lg-5">
                <div class="actions">
                    <button class="btn btn-rounded btn-inline">Guardar</button>
                    {{-- <button class="btn btn-inline btn-secondary btn-rounded">Print</button> --}}
                </div>
            </div>
        </div>
    </div>
</section>
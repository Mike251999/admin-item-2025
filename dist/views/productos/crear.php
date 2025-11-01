<?php
    include("../../layout/views/header.html")
?>
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-6">
                <!-- Default box -->
                <div class="card">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Registrar</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form>
                    <!--begin::Body-->
                    <form action="#" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre" class="form-label">Producto</label>
                                    <input type="text" class="form-control" id="nombre"/>
                                </div>
                                <div class="mb-3 col-3">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="text" class="form-control" id="precio"/>
                                </div>
                                <div class="mb-3 col-3">
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="text" class="form-control" id="stock"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="categoria" class="form-label">Categoría</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="categoria"
                                    />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" />
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
        </div>
        <!--end::App Content-->
<?php
    include("../../layout/views/footer.html")
?>      
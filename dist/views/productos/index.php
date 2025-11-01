<?php
    include("../../layout/views/header.html")
?>
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Lista</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">ID</th>
                          <th>Producto</th>
                          <th>Precio</th>
                          <th>Categoría</th>
                          <th style="width: 200px;">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1</td>
                          <td>Coca cola</td>
                          <td>20</td>
                          <td>Refresco</td>
                          <td>
                            <div class="row">
                                <button class="btn btn-success btn-small col-6">Editar</span>
                                <button class="btn btn-danger btn-small col-6">Eliminar</span>
                            </div>
                        </td>
                        </tr>
                        <tr class="align-middle">
                          <td>2</td>
                          <td>Sabritas</td>
                          <td>15</td>
                          <td>Botanas</td>
                          <td>
                            <div class="row">
                                <button class="btn btn-success btn-small col-6">Editar</span>
                                <button class="btn btn-danger btn-small col-6">Eliminar</span>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>3</td>
                          <td>Suavitel</td>
                          <td>60</td>
                          <td>Jabones</td>
                          <td>
                            <div class="row">
                                <button class="btn btn-success btn-small col-6">Editar</span>
                                <button class="btn btn-danger btn-small col-6">Eliminar</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                   <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
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
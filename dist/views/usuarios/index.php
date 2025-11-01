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
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th style="width: 200px;">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1</td>
                          <td>Juan</td>
                          <td>Uribe</td>
                          <td>juan@email.com</td>
                          <td>
                            <div class="row">
                                <button class="btn btn-success btn-small col-6">Editar</span>
                                <button class="btn btn-danger btn-small col-6">Eliminar</span>
                            </div>
                        </td>
                        </tr>
                        <tr class="align-middle">
                          <td>2</td>
                          <td>Jonathan</td>
                          <td>Perez</td>
                          <td>jonathan@email.com</td>
                          <td>
                            <div class="row">
                                <button class="btn btn-success btn-small col-6">Editar</span>
                                <button class="btn btn-danger btn-small col-6">Eliminar</span>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>3</td>
                          <td>Rosa</td>
                          <td>Flores</td>
                          <td>rosa@email.com</td>
                          <td>
                            <div class="row">
                                <button class="btn btn-success btn-small col-6">Editar</span>
                                <button class="btn btn-danger btn-small col-6">Eliminar</span>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>4</td>
                          <td>Claudia</td>
                          <td>Torres</td>
                          <td>claudia@email.com</td>
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
      
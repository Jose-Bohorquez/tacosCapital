<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
      aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
      <a class="navbar-brand col-lg-3 me-0" href="?C=Landing&A=inicio">Tacos Capital</a>
      <ul class="navbar-nav col-lg-6 justify-content-lg-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?C=Landing&A=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?C=Landing&A=servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?C=Landing&A=productos">Productos</a>
        </li>
      </ul>
      <div class="d-lg-flex col-lg-3 justify-content-lg-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Admin
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- Vertically centered scrollable modal -->
    <div class="modal-dialog modal-dialog-start modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ingreso al Sistema de Tacos Capital</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
              <div class="modal-body">
                  <div class="container">
                    <div class="mb-3">
                      <label for="">Usuario</label>
                      <input class="form-control" type="text" placeholder="Ejemplo@example.com" name="usu_ing" required>
                    </div>
                    <div class="mb-3">
                      <label for="">Contraseña</label>
                      <input class="form-control" type="text" placeholder="xxxxxx" name="pas_ing" required>
                    </div>
                  </div>
              </div>
              <div class="modal-footer d-flex justify-content-between">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <a href="?C=Login&A=index" type="submit" class="btn btn-primary">Ingresar</a>
              </div>
            </form>
        </div>
    </div>
</div>
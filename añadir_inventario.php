<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/añadir_inventario.css">
</head>
<body>
    <header class="bg-warning p-3 d-flex justify-content-between align-items-center">
        <div class="logo">Game <span class="text-dark">Shop</span></div>
        <h1 class="text-center mb-0">Inventario</h1>
    </header>
    <main class="container mt-4">
        <h2>Artículos</h2>
        <p>Selección de artículos</p>

        <div class="row mb-3">
            <div class="col-md-8">
                <!-- Artículo 1 -->
                <div class="d-flex align-items-center border rounded p-3 mb-3 bg-light">
                    <img src="control-negro.png" alt="PowerA Control" class="me-3" style="width: 80px; height: auto;">
                    <div>
                        <h5>PowerA control alámbrico negro para Xbox Serie X|S</h5>
                        <p class="text-muted">$621.47</p>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-danger btn-sm me-2">Eliminar</button>
                        <button class="btn btn-warning btn-sm">Editar</button>
                    </div>
                </div>
                <!-- Artículo 2 -->
                <div class="d-flex align-items-center border rounded p-3 mb-3 bg-light">
                    <img src="xbox-console.png" alt="Xbox Series X" class="me-3" style="width: 80px; height: auto;">
                    <div>
                        <h5>Xbox Series X 1TB Consola</h5>
                        <p class="text-muted">$11,497.00</p>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-danger btn-sm me-2">Eliminar</button>
                        <button class="btn btn-warning btn-sm">Editar</button>
                    </div>
                </div>
                <!-- Artículo 3 -->
                <div class="d-flex align-items-center border rounded p-3 bg-light">
                    <img src="razer-control.png" alt="Razer Wolverine V2" class="me-3" style="width: 80px; height: auto;">
                    <div>
                        <h5>Razer Wolverine V2 - Control con cable para Xbox Series X|S</h5>
                        <p class="text-muted">$1,529.25</p>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-danger btn-sm me-2">Eliminar</button>
                        <button class="btn btn-warning btn-sm">Editar</button>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Agregar Productos al sistema</h5>
                        <img src="add-product.png" alt="Agregar producto" class="img-fluid mb-3" style="max-width: 120px;">
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addProductModal">Añadir</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Agregar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Producto</label>
                                <input type="text" class="form-control" id="productName" placeholder="Nombre del producto">
                            </div>
                            <div class="col-md-6">
                                <label for="productBrand" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="productBrand" placeholder="Marca">
                            </div>
                            <div class="col-md-6">
                                <label for="productPrice" class="form-label">Precio</label>
                                <input type="number" class="form-control" id="productPrice" placeholder="Precio">
                            </div>
                            <div class="col-md-6">
                                <label for="productCategory" class="form-label">Categoría</label>
                                <select id="productCategory" class="form-select">
                                    <option value="" selected>Seleccione</option>
                                    <option value="consolas">Consolas</option>
                                    <option value="accesorios">Accesorios</option>
                                    <option value="juegos">Juegos</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="productImage" class="form-label">Imagen del producto</label>
                                <input type="text" class="form-control" id="productImage" placeholder="URL de la imagen">
                            </div>
                            <div class="col-12">
                                <label for="productDescription" class="form-label">Descripción del producto</label>
                                <textarea class="form-control" id="productDescription" rows="3" placeholder="Descripción"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning">Agregar producto</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

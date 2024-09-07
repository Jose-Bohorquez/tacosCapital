    <div class="container pb-5">
        <main class="px-5">
            <div class="py-5 text-center">
                <h2>Formulario de Pago</h2>
                <p class="lead">Diligencie los campos y revise los datos, ya que serán utilizados para el envío.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Tu carrito</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Nombre del producto</h6>
                                <small class="text-body-secondary">Descripción breve</small>
                            </div>
                            <span class="text-body-secondary">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Segundo producto</h6>
                                <small class="text-body-secondary">Descripción breve</small>
                            </div>
                            <span class="text-body-secondary">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Tercer artículo</h6>
                                <small class="text-body-secondary">Descripción breve</small>
                            </div>
                            <span class="text-body-secondary">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Código promocional</h6>
                                <small>CODIGOEXAMPLE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Código promocional">
                            <button type="submit" class="btn btn-secondary">Canjear</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Dirección de facturación</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Se requiere un nombre válido.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Se requiere un apellido válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" required>
                                    <div class="invalid-feedback">
                                        Se requiere un nombre de usuario.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Correo electrónico <span class="text-body-secondary">(Opcional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="tucorreo@example.com">
                                <div class="invalid-feedback">
                                    Por favor, ingrese una dirección de correo electrónico válida para actualizaciones del envío.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Calle Principal" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese su dirección de envío.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Dirección 2 <span class="text-body-secondary">(Opcional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartamento o suite">
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">País</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Elija...</option>
                                    <option>Estados Unidos</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, seleccione un país válido.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">Estado</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Elija...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, proporcione un estado válido.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Código postal</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Se requiere el código postal.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Guardar esta información para la próxima vez</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Pago</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Tarjeta de crédito</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Tarjeta de débito</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Nombre en la tarjeta</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-body-secondary">Nombre completo tal como aparece en la tarjeta</small>
                                <div class="invalid-feedback">
                                    Se requiere el nombre en la tarjeta
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Número de tarjeta de crédito</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Se requiere el número de la tarjeta de crédito
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Fecha de vencimiento</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Se requiere la fecha de vencimiento
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Se requiere el código de seguridad
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar con el pago</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
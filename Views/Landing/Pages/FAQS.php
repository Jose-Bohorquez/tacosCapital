    <div class="container mt-5">
        <div class="container m-3 p-3">
            <div class="row">
                <div class="col-3">
                    <h1 class="text-center">FAQS</h1>
                </div>
                <div class="col-9">


                    <div class="container">
                        <!-- Buscador -->
                        <div class="mb-4">
                            <div class="m-1 p-1">
                                <p>Puedes buscar por palabras clave</p>
                            </div>
                            <input type="text" id="faqSearch" class="form-control" placeholder="Buscar en las FAQs (preguntas Frecuentes)...">
                        </div>

                        <!-- Acordeón de FAQs -->
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Que son las FAQS
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Las FAQS son Preguntas Frecuentes (del inglés "Frequently Asked Questions"). Son
                                        una sección común en sitios web, documentos y servicios en línea que proporciona
                                        respuestas a las preguntas que los usuarios o clientes suelen hacer con
                                        frecuencia. La sección de FAQs se utiliza para ofrecer información útil y
                                        resolver problemas comunes sin necesidad de que los usuarios tengan que
                                        contactar directamente al soporte o servicio al cliente.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Cómo puedo restablecer mi contraseña?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Para restablecer su contraseña, haga clic en "Olvidé mi contraseña" en la página
                                        de inicio de sesión. Siga las instrucciones para restablecer su contraseña a
                                        través de su correo electrónico.
                                    </div>
                                </div>
                            </div>
                            <!-- Añadir más preguntas y respuestas aquí -->
                        </div>
                    </div>

                    <!-- Incluye Bootstrap JS y Popper.js -->
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js">
                    </script>
                    <!-- Script para el buscador de FAQs -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const searchInput = document.getElementById('faqSearch');
                            const accordionItems = document.querySelectorAll('.accordion-item');

                            searchInput.addEventListener('input', function () {
                                const searchTerm = searchInput.value.toLowerCase();
                                accordionItems.forEach(item => {
                                    const question = item.querySelector('.accordion-button')
                                        .textContent.toLowerCase();
                                    if (question.includes(searchTerm)) {
                                        item.style.display = 'block';
                                    } else {
                                        item.style.display = 'none';
                                    }
                                });
                            });
                        });
                    </script>


                </div>
            </div>
        </div>


    </div>
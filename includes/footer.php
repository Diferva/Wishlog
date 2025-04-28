        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                        </a>
                    </div>
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <i class="fa-brands fa-discord"></i>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fa-brands fa-x-twitter">
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fa-brands fa-tiktok"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                        </a>
                    </div>
                </div>       
            </div>
                    <div>
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-12 mb-lg-0 mb-4">
                                <div class="copyright text-center text-sm text-lg-center text-white">
                                    © <script>document.write(new Date().getFullYear())</script>, Derechos reservados
                                </div>
                            </div>
                        </div>
                    </div>
        </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
  // Seleccionar todos los grupos de input con floating label
  const inputGroups = document.querySelectorAll('.input-group');
  
  // Añadir eventos a cada input
  inputGroups.forEach(group => {
    const input = group.querySelector('.form-input');
    const label = group.querySelector('.input-label');
    
    // Manejar el evento focus
    input.addEventListener('focus', () => {
      label.classList.add('active');
    });
    
    // Manejar el evento blur (cuando pierde el foco)
    input.addEventListener('blur', () => {
      if (!input.value) {
        label.classList.remove('active');
      }
    });
    
    // Inicializar estado si ya tiene valor
    if (input.value) {
      label.classList.add('active');
    }
  });
});
</script>

    </body>

</html>
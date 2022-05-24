
<div class="card bg-light mb-5">
    <div class="card-body">
        <h4 class="text-center">Seja bem vindo(a) <?= $dadosuser->name; ?> !</h4>
    </div>
</div>

<div class="card bg-light mb-5">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md">
                <div class="d-flex border border-dark">
                    <div class="bg-danger text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fas fa-book-open fa-3x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">LIVROS LIDOS</p>
                        <h3 class="font-weight-bold mb-0">
                            <?php echo "TOTAL:" . " " . $total_livros; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border border-dark">
                    <div class="bg-info text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="far fa-file-alt fa-3x "></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">PÁGINAS LIDAS</p>
                        <h3 class="font-weight-bold mb-0">
                            <?= "TOTAL:" . " ". implode($total_paginas); ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .list-group-item.active {
        background-color: #216191;
        border-color: #01255E;
    }

    .list-group{
        border-radius:0px; /* Remove a borda de todos os itens */
    }

    h1{
        color: #216191;
    }

    .corLogo{
        color : #216191;
    }

    .bgCorLogo{
        background:#216191;
    }

    a{
        text-decoration:none;
    }

    .submenu{
        z-index:999;
    }
</style>
<div class="content p-2">
    <div class="row">
    <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">História</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Parlamentares</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Conselhos Municipais</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Organograma</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-expresidentes" role="tab" aria-controls="list-expresidentes">Ex Presidentes e Ex Vereadores</a>
        </div>
    </div>
    <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/florisvaldo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Florisvaldo Diniz</h5>
                            <p class="card-text">Presidente</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/anderson.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Anderson Cavralho Pereira</h5>
                            <p class="card-text">Vice-Presidente</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/marcio.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Márcio Oliveira Rodrigues - Secretário</h5>
                            <p class="card-text">Secretário</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/antonio.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Antônio José Bastos</h5>
                            <p class="card-text">Vereador</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/artur.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Artur Ferreira Neto</h5>
                            <p class="card-text">Vereador</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/fernando.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Fernando Alvarenga Costa</h5>
                            <p class="card-text">Vereador</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/helton.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Helton Vicente de Souza</h5>
                            <p class="card-text">Vereador</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/marcos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marcos Tadeu de Carvalho</h5>
                            <p class="card-text">Vereador</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="vereadores/telles.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Thelles Vitor Ferreira</h5>
                            <p class="card-text">Vereador</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

            </div>
            <div class="tab-pane fade" id="list-expresidentes" role="tabpanel" aria-labelledby="list-settings-list">

            </div>
        </div>
    </div>
    </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const tabela = document.querySelector(".table-modalidades tbody");
    const linhas = Array.from(tabela.querySelectorAll("tr"));

    linhas.sort((a, b) => {
      const textoA = a.querySelector("td").textContent.trim().toLowerCase();
      const textoB = b.querySelector("td").textContent.trim().toLowerCase();
      return textoA.localeCompare(textoB);
    });

    // Remove linhas antigas e reinsere na ordem correta
    linhas.forEach(linha => tabela.appendChild(linha));
  });
</script>
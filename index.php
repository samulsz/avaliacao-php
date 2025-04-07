<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Evento ETech 2026</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#palestrantes">Palestrantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#agenda">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#patrocinadores">Patrocinadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#inscricoes">Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="container mt-4">
    <section id="sobre" class="mb-5">
        <h1>Evento ETech 2026</h1>
        <p><strong>Data:</strong> 15 de Outubro de 2026</p>
        <p><strong>Local:</strong> Centro de Convenções, São Paulo, SP</p>
        <p>O Evento ETech 2026 é uma conferência dedicada às novas tecnologias e inovações no setor de tecnologia da informação. Venha aprender com os melhores palestrantes e se conectar com profissionais da área!</p>
    </section>

    <section id="palestrantes" class="mb-5">
        <h2>Palestrantes Confirmados</h2>
        <ul class="list-group">
            <?php
            $palestrantes = [
                ['nome' => 'João Silva', 'status' => true],
                ['nome' => 'Maria Oliveira', 'status' => false],
                ['nome' => 'Carlos Pereira', 'status' => true],
                ['nome' => 'Ana Costa', 'status' => false],
                ['nome' => 'Lucas Santos', 'status' => true]
            ];

            foreach ($palestrantes as $palestrante) {
                echo "<li class='list-group-item'>";
                echo $palestrante['nome'];
                if (!$palestrante['status']) {
                    echo " <span class='badge badge-warning'>Em Breve!</span>";
                }
                echo "</li>";
            }
            ?>
        </ul>
    </section>

    <section id="agenda" class="mb-5">
        <h2>Agenda do Evento</h2>
        <ul class="list-group">
            <li class="list-group-item">09:00 - Abertura do Evento</li>
            <li class="list-group-item">10:00 - Palestra: Inovações em IA - João Silva</li>
            <li class="list-group-item">11:00 - Palestra: Desenvolvimento Ágil - Maria Oliveira</li>
            <li class="list-group-item">12:00 - Almoço</li>
            <li class="list-group-item">13:30 - Workshop: Criando APIs com PHP - Carlos Pereira</li>
            <li class="list-group-item">15:00 - Palestra: Segurança em Aplicações Web - Ana Costa</li>
            <li class="list-group-item">16:00 - Painel de Discussão: O Futuro da Tecnologia - Lucas Santos</li>
            <li class="list-group-item">17:00 - Encerramento</li>
        </ul>
    </section>

    <section id="patrocinadores" class="mb-5">
        <h2>Patrocinadores</h2>
        <ul class="list-group">
            <li class="list-group-item">TechCorp</li>
            <li class="list-group-item">InovaTech</li>
            <li class="list-group-item">DevSolutions</li>
            <li class="list-group-item">WebMasters</li>
            <li class="list-group-item">CodeFactory</li>
        </ul>
    </section>

    <section id="inscricoes" class="mb-5">
        <h2>Inscrições</h2>
        <p>As inscrições para o Evento ETech 2026 estão abertas! Para se inscrever, clique no botão abaixo:</p>
        <a href="https://www.etech2026.com/inscricao" class="btn btn-primary">Inscreva-se Aqui</a>
    </section>

    <section id="faq" class="mb-5">
        <h2>Perguntas Frequentes (FAQ)</h2>
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Qual é o custo da inscrição?
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        O custo da inscrição é de R$ 150,00. Estudantes têm 50% de desconto.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Haverá certificado de participação?
                        </button>
                    </h5>
                </div>
                <div class="card-body">
                    Sim, todos os participantes receberão um certificado de participação ao final do evento.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        O evento será transmitido online?
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                <div class="card-body">
                    Sim, haverá uma transmissão ao vivo para aqueles que não puderem comparecer presencialmente.
                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<footer class="text-muted text-center mt-5">
    <p>&copy; 2026 Evento ETech. Todos os direitos reservados.</p>
    <p>Contato: contato@etech2026.com</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS personalizado -->
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

    <section id="palestrantes">
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
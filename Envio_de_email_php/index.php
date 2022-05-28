<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
    <title>Fotos do Sport Club Internacional</title>
    <link rel="stylesheet" href="./estilo/estilo.css" />
</head>

<body>
    <nav>
        <a href="#">Fotos do Sport Club Internacional</a>
        <ul>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#serviços">Serviços</a></li>
            <li><a href="#fotos">Fotos</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
    <header id="topo">
        <h1>Fotos do Sport Club Internacional</h1>
        <p>As melhores fotos relacionadas ao Sport Club Internacional são encontradas nesse site. Fotos sobre jogadores, torcida, estádio,
            tudo que nos faz amar, o maior e melhor clube do Rio Grande do Sul.
        </p>
        <a href="porque" class="botao">Ver mais</a>
    </header>
    <section id="sobre">
        <h2>Sobre</h2>
        <p>O Sport Club Internacional é um clube multiesportivo brasileiro
            com sede na cidade de Porto Alegre, capital do Rio Grande do Sul.
            Foi fundado em 4 de abril de 1909, pelos irmãos Poppe,
            com o objetivo de ser uma instituição democrática e sem preconceitos.
            Tem como suas cores o vermelho e o branco e seus torcedores são conhecidos como colorados.</p>
        <a href="#contato" class="botao">Contatar agora</a>
    </section>
    <section id="serviços">
        <h2>Serviços</h2>
        <div>
            <img src="img/p1.png" alt="p1">
            <h3>Imagens bonitas</h3>
            <p>Imagens bonitas para o torcedor colorado.</p>

        </div>
        <div>
            <img src="img/inter.png" alt="inter">
            <h3>Só fotos do Inter</h3>
            <p>Aqui você encontra somente fotos do Inter. </p>

        </div>
        <div>
            <img src="img/p4.png" alt="p4">
            <h3>Imagens nítidas</h3>
            <p>Imagens sem distorção, na resolução perfeita.</p>

        </div>
        <div>
            <img src="img/torcida.png" alt="torcida">
            <h3>Tudo sobre o Inter</h3>
            <p>Imagens de jogadores, torcida e estádio. </p>
        </div>
    </section>
    <section id="fotos">
        <h2>Fotos</h2>
        <img src="img/beirario1.jpg" alt="beirario1">
        <img src="img/bandeirainter.jpg" alt="bandeirainter">
        <img src="img/mauricio.jpg" alt="mauricio">
        <img src="img/brasileirao.jpg" alt="brasileirao">
        <img src="img/torcida2.jpg" alt="torcida2">
        <img src="img/sinalizador.jpg" alt="sinalizador">
    </section>
    <section id="contato">
        <h2>Contato</h2>
        <p>Fale com a gente</p>
        <form action="executar.php" method="post">
            <label for="">Nome</label><br>
            <input type="text" name="nome" id="" required><br>
            <label for="">Assunto</label><br>
            <input type="text" name="assunto" id="" required><br>
            <label for="">Mensagem</label><br>
            <textarea name="mensagem" id="textarea" cols="30" rows="10" required></textarea><br><br>
            <input class="botao" type="submit" value="Enviar">
        </form>
    </section>

    <footer>
        <a href="#topo">VOLTAR</a>
        <p>Desenvolvido para você torcedor colorado</p>
    </footer>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php
$hora_atual = date('H:i:s');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="controller/controleHome.js?hora=" <?php echo $hora_atual;  ?>></script>
    <link rel="shortcut icon" type="assets/images/logo2.png" href="assets/images/logo2.png">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Apps Tecnologia</title>
</head>

<body id='body' class="bg-light bg-gradient">

    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
        <div class="container align-items-center">
            <a class="navbar-brand" href="https://appstecnologia.com/"><img src="assets/images/logo.png" alt="" width="150vh"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <div class="col-12">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-6">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id='sobrenosmenu' href="#">Sobre a Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id='servicosmenu' href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id='aplicacoesmenu' href="#">Aplicações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id='contatomenu' href="#">Contato</a>
                        </li>
                        <li class="nav-item" style="display: none;" id='admmenu'>
                            <a class="nav-link active" aria-current="page" id='contatomenu' href="https://admin.appstecnologia.com"> Admin Apps </a>
                        </li>

                        <li class="nav-item" style="display: none;" id='hmlmenu'>
                            <a class="nav-link active" aria-current="page" id='contatomenu' href="https://admin.appstecnologia.com"> Homologação Apps </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <div class="container">
        <div id='sobrenos'>
            <div class="row align-items-center mt-3">
                <div class="col apps" style="width:100vh;">
                    <h5 class="mt-3">APPS Tecnologia</h5>
                    <p>A APPS Tecnologia tem como objetivo propor uma consultoria de estratégia e gestão focada em soluções implementáveis, <br>
                        alavancando organizações, equipes e indivíduos, além de prover soluções em tecnologia para agregar a Softwares de Gestão,<br>
                        trazendo mais eficiência, segurança e produtividade às empresas.</p>

                    <p class="paaaa">Acreditamos no poder de unir conhecimento técnico com know-how.</p>

                    <p>Nos organizamos para ajudar sua empresa a alcançar crescimento, eficiência e ambição de transformação.</p>

                    <p>Os softwares produzidos pela APPS Tecnologia, atendem a pequenas, médias e grandes empresas ofertando <br> diferenciais competitivos entre os diversos segmentos como varejo, atacado, indústria e prestadores de serviço.</p>

                    <p>Oferecemos soluções com total integração e aderência aos Softwares já utilizados pelas empresas, permitindo <br>
                        investimentos progressivos de acordo com as condições e tamanho de cada empresa.</p>

                    <h5>Nossa Missão</h5>
                    <p>Dar ao cliente uma gestão mais eficaz e melhores resultados.</p>

                    <h5>Visão</h5>
                    <p>Nossas soluções são inspiradas nos desafios e oportunidades que o mercado busca. Somos movidos pela inovação,<br>
                        transformando ideias em ações, possibilitando eficiência e eficácia na tomada de decisão.</p>
                </div>
                <!-- <div class='col-3 m-3'>
                    <img src="assets/images/logo.png" alt="" width="350vh">
                </div> -->
            </div>
        </div>

        <div id='servicos' style="display: none;">
            <div class="row align-items-center mt-3">
                <div class="col apps" style="width:100vh;">
                    <h5 class="mt-3">APPS Tecnologia</h5>
                    <p>Todos os nossos serviços e aplicações são baseados e pensados na necessidade dos nossos clientes, utilizamos nosso<br>
                        know-how para oferecer a melhor solução e o melhor custo benefício. Solicite uma apresentação e saiba mais sobre <br>
                        nossas aplicações disponíveis.
                    </p>

                    <p>
                    <ul>

                        <li><b>Integrações</b>
                            <p>Integramos seus dados com qualquer plataforma. Nos apresente sua necessidade e com certeza teremos uma solução. <br>
                            </p>
                        </li>

                        <li><b>Softwares Personalizados</b>
                            <p>Sabe aquele software que atenderia perfeitamente a sua necessidade e você não sabe onde encontrar ? <br>
                                A Apps tem a solução para você, nossa consutoria com certeza apresentará uma ótima solução e você terá <br>
                                o seu software unico e personalizado do seu jeitinho. Se não existe a Gente faz .
                            </p>
                        </li>

                    </ul>
                    </p>
                </div>
                <!-- <div class='col-3 m-3'>
                    <img src="assets/images/logo.png" alt="" width="350vh">
                </div> -->
            </div>
        </div>
        <div class="align-items-center border-top " id='aplicacoes' style="display: none;">
            <div class="row align-items-center mt-3">
                <div class="col apps" style="width:100vh;">
                    <h5 class="mt-3">APPS Tecnologia</h5>
                    <p>Todos os nossos serviços e aplicações são baseados e pensados na necessidade dos nossos clientes, utilizamos nosso<br>
                        know-how para oferecer a melhor solução e o melhor custo benefício. Solicite uma apresentação e saiba mais sobre <br>
                        nossas aplicações disponíveis.
                    </p>

                    <p>
                    <ul>
                        <li><b>Inventário</b>
                            <p>Ferramenta de inventário que possibilita a realização de pré contagens, avaliação de produtividade, resultado <br>
                                parcial em tempo real, reconferencia de divergencias e valoração de resultado. Entrega relatórios e <br>
                                dashboard para futuras apresentações.
                            </p>
                        </li>
                        <li><b>Dashboard Comercial</b>
                            <p>Ferramenta de apresentação de resultados em tempo real. Acompanhe a venda da sua empresa de qualquer lugar do <br>
                                Planeta com acesso a internet, avalie o seu ticket médio, a sua frequencia, o potencial de alcance de metas e etc.<br>
                                Tome decisões baseadas em resultados com essa ferramente que permite você <b>Gestor</b> está sempre acompanhando <br>
                                suas vendas de perto.
                            </p>
                        </li>

                        <li><b>Gestão de Fila de Vendedor</b>
                            <p>Controle total dos seus atendimentos em tempo real na palma da mão do seu vendedor. <br>
                            </p>
                        </li>


                    </ul>
                    </p>
                </div>
                <!-- <div class='col-3 m-3'>
                    <img src="assets/images/logo.png" alt="" width="350vh">
                </div> -->
            </div>
        </div>
        <div class="align-items-center border-top " id='contato' style="display: none;">
            <div class="row align-items-center mt-3">

                <div class="col apps" style="width:100vh;">
                    <h5 class="mt-3">Formulário de Cadastro</h5>
                    <form>
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="empresa">Empresa:</label>
                            <input type="text" class="form-control" id="empresa" placeholder="Digite o nome da empresa" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="tel" class="form-control" id="telefone" placeholder="Digite o seu telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite o seu email" required>
                        </div>
                        <button type="submit" class="btn btn-primary m-2" style="background-color: #65b6a5; border: solid black 1px; margin: 5px;">Cadastrar</button>
                    </form>
                </div>
                <!-- <div class='col-2 m-3'>
                    <img src="assets/images/logo.png" alt="" width="350vh">
                </div> -->
            </div>
        </div>
    </div>

    <div class="align-items-center border-top" style="background-color: white;" id='footer'>
        <div class="row">
            <div class="col-md-6 align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <img src="assets/images/logo2.png" alt="" width="20vh">
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">Copyright &copy; 2023 <a href="https://appstecnologia.com/">AppsTecnologia</a>.</span>
            </div>

            <ul class="nav col-md-6 justify-content-center list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-linkedin"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class='bi bi-twitter-x'></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"></i></a></li>

            </ul>

        </div>

    </div>
</body>


</html>
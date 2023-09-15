<?php
include_once '../controller/LfController.php';
$servico = filter_input(INPUT_GET, 'sevico');
$controller = new LfController();
$controller->solicitarServico();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LF SPORT - GESTÃO DESPORTIVA</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/Social-Icons.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
<nav class="navbar navbar-light navbar-expand-sm fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="../index.php">LF SPORT</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#header">INÍCIO</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">SOBRE NÓS</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">SERVIÇOS</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">CONTACTOS</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="text-center text-white d-flex masthead" id="header" style="background-image: url('../assets/img/fotografia-de-uma-linda-mulher-jogando-futebol.jpg');background-repeat: no-repeat;">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase"><strong>LF SPORT - GESTÃO DESPORTIVA&nbsp;</strong></h1>
                <hr>
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <h5 class="text-faded mb-5" style="font-weight: bold;">Pretendemos trabalhar com<br>atletas e treinadores de diferentes modalidades desportiva,<br>pretendemos trazer no mercado uma solução diferenciada de<br>gestão de carreiras desportivas, através de soluções modernas,<br>como:<br>• Gestão Familiar<br>• Gestão Patrimonial<br>• Planeamento Financeiro<br>• Assessoria Fiscal e Jurídica<br><br></h5><a class="btn btn-primary btn-xl" role="button" href="#services">SAIBA MAIS</a>
        </div>
    </div>
</header>
<section id="about" class="bg-verde-escuro p-3">
    <div class="container">
        <div class="row">
            <div class="col offset-lg-8 text-center mx-auto">
                <h2 class="section-heading section-title">APRESENTAÇÃO</h2>
                <hr class="light my-4">
                <p class="text-start text-faded mb-4">Permita-nos, antes de mais, que lhe enderecemos os nossos mais respeitosos cumprimentos, agradecendo de antemão a atenção dispensada ao tema que lhe subscrevemos.<br>A LF SPORT - GESTÃO DESPORTIVA LDA, é uma empresa de direito angolano dedicada na gestão de carreiras de profissionais desportistas, tem igualmente como objecto social a organização e promoção de eventos desportivos. É uma empresa jovem e dinâmica que trabalha todos os dias na busca das melhores soluções para os seus clientes, parceiros e clubes, sempre de forma séria, credível e responsável Pretendemos trabalhar com atletas e treinadores de diferentes modalidades desportiva,<br>pretendemos trazer no mercado uma solução diferenciada de gestão de carreiras desportivas, através de soluções modernas, como:<br><br>• Gestão Familiar.<br>• Gestão Patrimonial.<br>• Planeamento Financeiro.<br>• Assessoria Fiscal e Jurídica.<br><br>Acompanhamento pormenorizados, de todas<br>as facetas dos atletas e treinadores, desde as<br>componentes desportivas, sociais e financeira,<br>bem como a apresentação de soluções de<br>investimentos e poupanças.<br></p>
                <div class="row">
                    <div class="col"><img class="img-fluid pb-2" src="../assets/img/logo2.jpeg" height="150" width="350" loading="lazy"></div>
                </div>
            </div>
            <div class="col offset-lg-8 text-center mx-auto">
                <h2 class="section-heading section-title">QUEM SOMOS</h2>
                <hr class="light my-4">
                <p class="text-start text-faded mb-4">LF SPORT - GESTÃO DESPORTIVA LDA, é uma empresa de direito angolano dedicada na gestão de carreiras de profissionais desportistas, tem igualmente como objecto social a organização e promoção de eventos desportivos.<br>É uma empresa jovem e dinâmica que trabalha todos os dias na busca das melhores soluções para os seus clientes e parceiros sempre de forma séria, credível e responsável.<br></p>
                <h2 class="section-heading section-title">MISSÃO, VISÃO E VALORES</h2>
                <hr class="light my-4">
                <p class="text-start text-faded mb-4">• Missão: “Existimos para criar resultados” através de negócios realizados, sempre dentro dos parâmetros da ética e da legalidade, procurando com isso satisfazer os atletas, clubes, empresas, parceiros, fornecedores e demais comunidade onde nos inserimos.<br><br>• Visão: Ser uma referência na área de gestão de carreiras, gerar valor e acumular conhecimentos visando melhorias contínuas na qualidade dos serviços prestados e no relacionamento com os<br>parceiros.<br><br>• Valores: Ética, Credibilidade, Respeito, Valorização da pessoa, Confiança, Crença, Humildade e Integridade.<br></p>
                <div class="row">
                    <div class="col">
                        <p class="section-title">DEIXE A SUA CARREIRA NAS MÃOS DE QUEM<br>CONHECE O DESPORTO<br><br></p>
                    </div>
                </div>
            </div>
            <div class="col offset-lg-8 text-center mx-auto">
                <h2 class="section-heading section-title">PLANEAMENTO FINANCEIRO</h2>
                <hr class="light my-4">
                <p class="text-start text-faded mb-4">Para que um atleta tenha equilíbrio emocional e possa focar 100% em seu desempenho dentro de campo, é fundamental que seu team fora de campo esteja fazendo um bom trabalho.<br>O planeamento financeiro tanto permite que o jogador se prepare adequadamente para a sua reforma com serenidade e segurança, quanto atende às necessidades imediatas de:<br><br>• Delegar tarefas para que sua família esteja bem assistida diariamente.<br>• Proteger e aumentar seus activos.<br>• Estar munido de informações específicas e actualizadas para tomar decisões assertivas em qualquer compra, investimento ou negócio<br></p>
                <div class="row">
                    <div class="col"><img class="img-fluid pb-2" src="../assets/img/logo2.jpeg" height="150" width="350" loading="lazy"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-verde-escuro p-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center section-title">NOSSOS SERVIÇOS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-soccer-ball-o m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Gestão integrada de carreira desportiva de atletas e treinadores<br><br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Gestao+integrada+de+carreira+desportiva+de+atletas+e+treinadores">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-money m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Gestão, Apoio e aconselhamento Financeiro de atletas e<br>treinadores<br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Gestao+Apoio+e+aconselhamento+fincanceiro+de+atletas+e+treinadores">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-soccer-ball-o m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Agenciamento de jogadores profissionais e não só<br><br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Agenciamento+de+jogadores+profissionais+e+nao+so">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-star m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Assessoria de Comunicação, Imprensa e Imagem<br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Assessoria+de+Comunicacao+Imprensa+e+Imagem">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-star m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Acompanhamento jurídico e fiscal<br><br><br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Acompanhamento+jurídico+e+fiscal">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-star m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Acompanhamento técnico especializado<br><br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Acompanhamento+técnico+especializado">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col text-center"><i class="fa fa-star m-2" style="font-size: 150px;text-align: center;"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-heading section-title">Organização e promoção de eventos desportivos<br></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><a class="btn btn-primary btn-xl m-2" role="button" href="#contact?servico=Organização+e+promoção+de+eventos+desportivos">SOLICITAR SERVIÇO</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section id="portfolio" class="p-0">
    <div class="container-fluid p-0">
        <div class="row g-0 popup-gallery">
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="../assets/img/fullsize/1.jpg"><img class="img-fluid" src="../assets/img/thumbnails/1.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="../assets/img/fullsize/2.jpg"><img class="img-fluid" src="../assets/img/thumbnails/2.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="../assets/img/fullsize/3.jpg"><img class="img-fluid" src="../assets/img/thumbnails/3.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="../assets/img/fullsize/4.jpg"><img class="img-fluid" src="../assets/img/thumbnails/4.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="../assets/img/fullsize/5.jpg"><img class="img-fluid" src="../assets/img/thumbnails/5.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="../assets/img/fullsize/6.jpg"><img class="img-fluid" src="../assets/img/thumbnails/6.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>
</section>
-->
<section id="contact" class="container-fluid bg-verde-escuro p-3">
    <div class="row">
        <div class="col text-center text-center" id="colunaComImagem">
            <p><br><br><br><br><br><br><br><br><br><br><br><br></p><img class="img-fluid d-xxl-flex pb-3" src="../assets/img/logo2.jpeg" loading="lazy">
        </div>
        <div class="col">
            <div class="container">
                <section class="contact-clean mt-5 mb-5">
                    <form method="post">
                        <h2 class="text-center">SOLICITAR SERVIÇO / INFORMAÇÃO</h2>
                        <div class="mb-3"><input class="form-control" type="text" name="nome" placeholder="Nome*" required=""></div>
                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email*" required=""></div>
                        <div class="mb-3"><input class="form-control" type="text" name="telefone" placeholder="Telefone*" required=""></div>
                        <div class="mb-3"><input class="form-control" type="text" name="assunto" value="<?php echo $servico; ?>" placeholder="Assunto"></div>
                        <div class="mb-3"><textarea class="form-control" name="mensagem" placeholder="Mensagem*" rows="15" required=""></textarea></div>
                        <div class="mb-3"><span>CAMPOS OBRIGATÓRIOS ASSINALADOS COM *</span></div>
                        <div class="text-center mb-3"><button name="solicitacao" value="sim"  class="btn btn-primary btn-lg" type="submit">SOLICITAR</button></div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center col1">
            <h2 class="text-center section-title pt-5"><br>A NOSSA ESTRUTURA<br><br><br><br></h2>
            <div class="row">
                <div class="col-lg-12"><img class="img-fluid shadow-lg flex-grow-1 visible" src="../assets/img/organograma-removebg-preview.png" loading="lazy"></div>
            </div>
            <h5 class="text-center text-white"><br><br><br><br><br><br>DEIXE A SUA CARREIRA NAS MÃOS DE QUEM<br>CONHECE O DESPORTO<br></h5>
        </div>
        <div class="col-md-4 bg-verde-escuro">
            <h2 class="text-center text-white section-heading section-title" id="contactos"><br><br><br><br><br><br><br>CONTACTOS</h2>
            <hr class="light my-4">
            <p class="text-center text-faded mb-4"><br>Morada<br>Viana, Zango 1 – Luanda. Angola<br>Telefone<br>+244 939 387 845<br>+244 923 762 662<br>+244 929 977 027<br></p>
            <div class="row">
                <div class="col">
                    <footer class="footer-dark bg-verde-escuro">
                        <div class="container">
                            <div class="row">
                                <div class="col item social m-0"><a href="https://www.facebook.com/profile.php?id=61550716316734&amp;mibextid=2JQ9oc"><i class="icon ion-social-facebook"></i></a><a href="https://instagram.com/lfsport.ao?utm_source=qr&amp;igshid=MzNlNGNkZWQ4Mg=="><i class="icon ion-social-instagram"></i></a><a href="https://instagram.com/lfsport.ao?utm_source=qr&amp;igshid=MzNlNGNkZWQ4Mg=="><i class="icon ion-social-whatsapp-outline"></i></a></div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <p class="text-center text-faded mb-4"><br>Lf Sport - Gestão Desportiva<br>@lfsport.ao<br>www.lfsport.ao<br>geral.lfsport@gmail.com<br></p>
        </div>
        <div class="col-md-4 text-center col3"><img class="img-fluid pt-5" src="../assets/img/logo2.jpeg" width="430" height="150">
            <h5 class="text-center text-white"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>DEIXE A SUA CARREIRA NAS MÃOS DE QUEM<br>CONHECE O DESPORTO<br></h5>
        </div>
    </div>
</section>
<footer class="footer-basic bg-verde-escuro">
    <ul class="list-inline">
        <li class="list-inline-item"><a class="text-white" href="#header">INÍCIO</a></li>
        <!--<li class="list-inline-item"></li>-->
        <li class="list-inline-item"><a class="text-white" href="#about">SOBRE NÓS</a></li>
        <li class="list-inline-item"><a class="text-white" href="#services">SERVIÇOS</a></li>
        <!--<li class="list-inline-item"></li>-->
    </ul>
    <p class="copyright">Direitos de autor reservados ao <a href="https://www.instagram.com/anthony_ngola" target="_blank"> António Ngola </a> © 2023</p>
</footer>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="../assets/js/creative.js"></script>
</body>

</html>
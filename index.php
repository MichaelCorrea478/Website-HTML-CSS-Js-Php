<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="descrição do meu website">
    <meta name="keywords" content="palavras chave">
    <link rel="stylesheet" href="./estilo/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./estilo/style.css">
    <title>Projeto 01</title>
</head>
<body>

<header>
    <div class="center">
        <div class="logo left">
            <a href="/">Logomarca</a>
        </div> <!-- logo -->
        <nav class="desktop right">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Serviços</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fas fa-bars"></i>
            </div> <!-- botao-menu-mobile -->
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Serviços</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div> <!-- center -->
</header>

<section class="banner-principal">
    <div class="overlay"></div> <!-- overlay -->
    <div class="center">
        <form action="">
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar">
        </form>
    </div> <!-- center -->
</section> <!-- banner-principal -->

<section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
            <h2>Sobre o autor</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus excepturi tenetur placeat quis debitis, aperiam esse ab ipsum delectus hic explicabo quo consequatur, iusto libero tempore eveniet reiciendis dignissimos molestiae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis natus minus dicta, similique voluptas modi earum facilis veritatis numquam cupiditate, nulla voluptatibus, labore cum ratione odit vero est. Aperiam, dolorem.Aperiam vel voluptate velit nobis quod omnis, soluta voluptatem molestiae debitis labore maxime, nesciunt exercitationem, veniam rerum consequatur facere impedit assumenda nihil. Mollitia animi velit fugiat saepe eos sint a.</p>
        </div> <!-- w50 -->
        <div class="w50 left">
            <img class="right" src="./imagens/marcus-aurelius.jpg" alt="autor">
        </div> <!-- w50 -->
        <div class="clear"></div>
    </div> <!-- center -->
</section> <!-- descricao-autor -->

<section class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="fab fa-css3-alt"></i></h3>
            <h4>CSS 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptates quibusdam quod dolore. Eum repellendus alias quos beatae obcaecati explicabo provident, voluptate quas quis distinctio saepe vel ut consequatur enim!Officiis doloremque praesentium ea culpa nobis adipisci quam nesciunt quis cumque tenetur alias iste quidem ex corporis esse sunt voluptas voluptates dicta, voluptatum quod tempore incidunt. Quo nisi beatae pariatur!</p>
        </div> <!-- box-especialidade -->
        <div class="w33 left box-especialidade">
            <h3><i class="fab fa-html5"></i></h3>
            <h4>HTML</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptates quibusdam quod dolore. Eum repellendus alias quos beatae obcaecati explicabo provident, voluptate quas quis distinctio saepe vel ut consequatur enim!Officiis doloremque praesentium ea culpa nobis adipisci quam nesciunt quis cumque tenetur alias iste quidem ex corporis esse sunt voluptas voluptates dicta, voluptatum quod tempore incidunt. Quo nisi beatae pariatur!</p>
        </div> <!-- box-especialidade -->
        <div class="w33 left box-especialidade">
            <h3><i class="fab fa-js-square"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptates quibusdam quod dolore. Eum repellendus alias quos beatae obcaecati explicabo provident, voluptate quas quis distinctio saepe vel ut consequatur enim!Officiis doloremque praesentium ea culpa nobis adipisci quam nesciunt quis cumque tenetur alias iste quidem ex corporis esse sunt voluptas voluptates dicta, voluptatum quod tempore incidunt. Quo nisi beatae pariatur!</p>
        </div> <!-- box-especialidade -->
        <div class="clear"></div>
    </div> <!-- center -->
</section><!-- especialidades -->

<section class="extras">
    <div class="center">
        <div class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos</h2>
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non voluptas dignissimos esse? Odit dicta architecto sit qui. Consequuntur repellendus harum fugit, delectus ratione iste magni optio, quam provident sunt eaque.Facere dicta fuga laudantium quis aliquid, voluptas vero repellendus eligendi magnam, excepturi obcaecati incidunt veniam hic labore deserunt libero saepe odio. Adipisci, numquam repellendus maiores natus illo facilis quibusdam iusto.</p>
                <p class="nome-autor">Lorem Ipsum</p>
            </div> <!-- depoimento-single -->
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non voluptas dignissimos esse? Odit dicta architecto sit qui. Consequuntur repellendus harum fugit, delectus ratione iste magni optio, quam provident sunt eaque.Facere dicta fuga laudantium quis aliquid, voluptas vero repellendus eligendi magnam, excepturi obcaecati incidunt veniam hic labore deserunt libero saepe odio. Adipisci, numquam repellendus maiores natus illo facilis quibusdam iusto.</p>
                <p class="nome-autor">Lorem Ipsum</p>
            </div> <!-- depoimento-single -->
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non voluptas dignissimos esse? Odit dicta architecto sit qui. Consequuntur repellendus harum fugit, delectus ratione iste magni optio, quam provident sunt eaque.Facere dicta fuga laudantium quis aliquid, voluptas vero repellendus eligendi magnam, excepturi obcaecati incidunt veniam hic labore deserunt libero saepe odio. Adipisci, numquam repellendus maiores natus illo facilis quibusdam iusto.</p>
                <p class="nome-autor">Lorem Ipsum</p>
            </div> <!-- depoimento-single -->
        </div> <!-- w50 -->
        <div class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis adipisci aperiam rerum voluptatem neque voluptate, dolores assumenda, ipsam debitis distinctio veritatis maxime recusandae. Perspiciatis ipsa vero impedit vitae nulla!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis sunt voluptatum similique officiis molestiae laborum, fugiat deleniti voluptas dolorum quibusdam nulla consequatur dolorem unde veniam minus quia suscipit totam delectus.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe commodi deleniti similique voluptatibus, amet modi molestiae quas ipsum hic facilis omnis vero corrupti nobis velit impedit. Eligendi sit pariatur quas!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi perferendis hic reprehenderit aperiam corrupti atque ullam tenetur optio, rem repudiandae, recusandae, officiis non beatae vel magni labore veritatis distinctio nostrum.</li>
                </ul>
            </div> <!-- servicos -->
        </div> <!-- w50 -->
        <div class="clear"></div>
    </div> <!-- center -->
</section> <!-- extras -->

<footer>
    <div class="center">
        <p>Todos os direitos reservados.</p>
    </div> <!-- center -->
</footer>
    
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/jquery-ui.js"></script>
<script src="./js/script.js"></script>

</body>
</html>
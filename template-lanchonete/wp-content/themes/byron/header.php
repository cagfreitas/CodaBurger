<!--
    Arquivo para o código do header da página,
    header = cabeçalho do site
-->

<?php
// Inserir: caso tenha alterado o nome da variavel do redux, alterar o nome aqui tbm
if (class_exists('Redux')) {
    global $redux_fields;
}

$home = get_page_by_title('Home');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php get_bloginfo('name');?> </title>
    <meta name="description" content="<?php get_bloginfo('description');?>">
    <link rel="icon" type="image/png" href="">

    <!-- Apple Web App Meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <?php wp_head();?>

</head>
<body>
    <header id="inicio"> 
        <!-- Inserir: Insira o conteúdo do Header da página -->
        
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="center-align hide-on-med-and-down">
                    <li><a href="#inicio"><p>Home</p></a></li>
                    <li><a href="#cardapio"><p>Cardápio</p></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/codalogo.png" alt=""></a></li>
                    <li><a href="#contato"><p>Contato</p></a></li>
                    <li><a href="#" class="dropdown-trigger" id="drop1" data-target='dropdown1'><p>Redes Sociais</p></a>
                        <ul id='dropdown1' class='dropdown-content'>
                            <li class="arrow-up"></li>
                            <li><a class="social-color" href="https://www.facebook.com/coda.burger/" id="face">FACEBOOK</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li><a class="social-color" href="https://www.instagram.com/coda.burger/" id="insta">INSTAGRAM</a></li> 
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <ul id="slide-out" class="sidenav">
            <li><a href="#inicio">Home</a></li>
            <li><a href="#cardapio">Cardápio</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#" class="dropdown-trigger" id="drop2" data-target='dropdown2'>Redes Sociais</a></li>
            <ul>
                <li class="social-nav"><a href="https://www.facebook.com/coda.burger/">Facebook</a></li>
                <li class="social-nav"><a href="https://www.instagram.com/coda.burger/">Instagram</a></li>
            </ul>
        </ul>

        <div class="parallax-container">
            <div class="header_button">
                <a class="waves-effect waves-light btn-large hoverable z-depth-2" href="https://api.whatsapp.com/send?1=pt_BR&phone=5535998041483" target="_blank">Fazer um pedido</a>
            </div>
        </div>

    </header>
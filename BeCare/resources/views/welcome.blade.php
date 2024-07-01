<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeCare</title>
    <link rel="icon" type="image/png" href="images/iconbecare.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    
</head>
<body>
    <header> 
        <nav id="navbar">
            <a href="#" class="navbar-logo">
                <img src="images/iconbecare.png" alt="Logo BeCare">
                <i class="nome">BeCare</i>
            </a>
            <div id="busca">
                <input type="text" id="txtBusca" placeholder="Busque aqui pelo seu produto ideal..."/>
                <button id="btnBusca">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="icons-header">
                <button id="btnCarrinho">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                <button id="btnFavoritos">
                    <i class="fa-solid fa-heart"></i>
                </button>
                <button id="btnUsuario">
                    <i class="fa-solid fa-user"></i>
                    <a href="login.html"></a>
                </button>
                
            </div>
        </nav>
    </header>
    
    <nav id="menu">
        <div class="categorias">
            <a href="#">Bruna Tavares</a>
            <a href="#">Eudora</a>
            <a href="#">Boca Rosa</a>
            <a href="#">Ruby Rose</a>
            <a href="#">FRAN</a>
            <a href="#">MAC</a>
            <a href="#">Mary Kay</a>
            <a href="#">Océane</a>
            <a href="#">Oboticário</a>
            <a href="#">Avon</a>
        </div>
    
    </nav>

    <h2>Todos os produtos:</h2>

    <section class="products">
        <div class="product">
            <div class="row">
                <img src="images/products/1.png" alt="">
            </div>
            <div class="heart-icon">
                <i class="fa-regular fa-heart"></i>
            </div>
            <div class="price">
                <h4>FRAN BY FRANCINY EHLKE Chocochilli Edição Limitada</h4>
                <p>R$51,90</p>
            </div>
            <button class="btnComprar">
                <i class="fa-solid fa-cart-plus"></i> 
            </button>
        </div>

        <div class="product">
            <div class="row">
                <img src="images/products/3.png" alt="">
            </div>
            <div class="heart-icon">
                <i class="fa-regular fa-heart"></i>
            </div>
            <div class="price">
                <h4>Blush em Bastão Pêssego Larissa Manoela</h4>
                <p>R$45,90</p>
            </div>
            <button class="btnComprar">
                <i class="fa-solid fa-cart-plus"></i> 
            </button>
        </div>

        <div class="product">
            <div class="row">
                <img src="images/products/2.png" alt="">
            </div>
            <div class="heart-icon">
                <i class="fa-regular fa-heart"></i>
            </div>
            <div class="price">
                <h4>OCÉANE Esponja De Maquiagem Flat Blend Vinho Mariana Saad</h4>
                <p>R$63,50</p>
            </div>
            <button class="btnComprar">
                <i class="fa-solid fa-cart-plus"></i> 
            </button>
        </div>

        <div class="product">
            <div class="row">
                <img src="images/products/5.png" alt="">
            </div>
            <div class="heart-icon">
                <i class="fa-regular fa-heart"></i>
            </div>
            <div class="price">
                <h4>NIINA SECRETS BASE HIDRA GLOW COR 05 30ml</h4>
                <p>R$79,99</p>
            </div>
            <button class="btnComprar">
                <i class="fa-solid fa-cart-plus"></i> 
            </button>
        </div>

        <div class="product">
            <div class="row">
                <img src="images/products/4.png" alt="">
            </div>
            <div class="heart-icon">
                <i class="fa-regular fa-heart"></i>
            </div>
            <div class="price">
                <h4>orretivo Líquido Eraser Instant Age Rewind 120 Light</h4>
                <p>R$85,49</p>
            </div>
            <button class="btnComprar">
                <i class="fa-solid fa-cart-plus"></i> 
            </button>
        </div>

        <div class="product">
            <div class="row">
                <img src="images/products/6.png" alt="">
            </div>
            <div class="heart-icon">
                <i class="fa-regular fa-heart"></i>
            </div>
            <div class="price">
                <h4>Maybelline NY Batom Líquido Matte Ink SuperStay</h4>
                <p>R$55,90</p>
            </div>
            <button class="btnComprar">
                <i class="fa-solid fa-cart-plus"></i> 
            </button>
        </div>
        
    </section>

    <footer>
        <p>&copy; 2024 Bruna Letícia Monteiro Santos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
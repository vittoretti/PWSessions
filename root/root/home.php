 <?php require_once "sessao.php"
 ?>
 <!-- Array para consulta de dados, simulando um Banco de Dados real -->
    <?php
$produtos = [
    [
        "id" => 1,
        "titulo" => "Darkforge: Moon Lord - Terraria",
        "preco"  => "R$ 430,00",
        "thumb" => "/assets/productthumbs/Mlfigalt.png",
    ],
    [
        "id" => 2,
        "titulo" => "Darkforge: Olho do Cthulhu - Terraria",
        "preco" => "R$ 335,00",
        "thumb" => "/assets/productthumbs/Eocfigalt.png",
    ],
    [
        "id" => 3,
        "titulo" => "McFarlaneToys: The Protagonist - Persona 3 Reload (Elite Edition)",
        "preco" => "R$ 980,00",
        "thumb" => "/assets/productthumbs/P3MC_IMG1.png",
    ],
    [
        "id" => 4,
        "titulo" => "Lucrea: Joker - Persona 5 Royal",
        "preco" => "R$ 780,00",
        "thumb" => "/assets/productthumbs/P5MC_IMG1.png",
    ],
    [
        "id" => 5,
        "titulo" => "MegaHouse: Game Characters Collection DX: Izanagi - Persona 4 Golden (Ver.2)",
        "preco" => "R$ 800,00",
        "thumb" => "/assets/productthumbs/izanagiimg1.png",
    ],
    [
        "id" => 6,
        "titulo" => "Messtoys: Spider Man Symbiote Suit",
        "preco" => "R$ 420,00",
        "thumb" => "/assets/productthumbs/SpiderManalt.png",
    ],
    [
        "id" => 7,
        "titulo" => "S.H Figuarts: Yuji Itadori (Sukuna's Vessel) - Jujutsu Kaisen",
        "preco" => "R$ 600,00",
        "thumb" => "/assets/productthumbs/Itadorithumb.png",
    ],
    [
        "id" => 8,
        "titulo" => "SA-MAXIMUM: Red Hair Pirates Chief: Red-Haired Shanks \"Divine Departure\" - One Piece",
        "preco" => "R$ 900,00",
        "thumb" => "/assets/productthumbs/Shanksthumb.png",
    ]
];
    ?>
<!DOCTYPE html>
<head>
  <!-- Define os caracteres para Português-BR (para suportar acentos e outras pontuações da língua) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CasaDasFigures - Página inicial</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Exporta a biblioteca de estilização do bootstrap da pasta "css" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Exporta as classes CSS do arquivo de estilização -->
    <link rel="stylesheet" href="/root/root/styles.css">
</head>
<body>
  <!-- Define um cabeçalho para o site -->
  <header>
    <img src="/assets/logo/CasaDasFigures.svg" class="headerlogo">
  </header>

  <!-- Carrosel principal do site -->
 <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-10">
        <div id="fotos" class="carousel slide" data-bs-ride="carousel" data-bs-touch="false" data-bs-pause="false">
            <div class="carousel-inner maincarousel-inner">
                <div class="carousel-item maincarousel-item active" data-bs-interval="3000">
                    <img src="/assets/maincarousel/img1.jpg" alt="ML Figure" class="d-block w-100">              
                </div>
                <div class="carousel-item maincarousel-item" data-bs-interval="3000">
                    <img src="/assets/maincarousel/img2.jpg" alt="EoC figure" class="d-block w-100">
                </div>
                <div class="carousel-item maincarousel-item" data-bs-interval="3000">
                    <img src="/assets/maincarousel/img3.png" alt="P5MC action figure" class="d-block w-100">
                </div>
                <div class="carousel-item maincarousel-item" data-bs-interval="3000">
                   <img src="/assets/maincarousel/img4.jpg" alt="Shanks action figure" class="d-block w-100">
                </div>
                <div class="carousel-item maincarousel-item" data-bs-interval="3000">
                    <img src="/assets/maincarousel/img5.jpg" alt="P3MC action figure" class="d-block w-100">
                </div>
                <div class="carousel-item maincarousel-item" data-bs-interval="3000">
                    <img src="/assets/maincarousel/Img6.png" alt="Spider Man action figure" class="d-block w-100">
                </div>
            </div>           
        </div>
    </div>
   </div> 
 </div>  
    <div class="container">
        <div class="row">
          <?php foreach ($produtos as $produto):?>
            <!-- Define uma "caixa" para a descrição e imagem do produto, usando um loop "forearch" para ler o array de bloco em bloco -->
            <div class="col-md-3">
                <!-- Uso de PHP em conjunto com as classes CSS para mostrar as informações dos produtos de forma adequada, por ID -->
                <div class="descricao" onclick="pressfunction(<?php echo $produto['id']; ?>)">
                    <img src="<?php echo $produto['thumb']?>" class="fotoproduto">
                    <h1 class="tituloitem"><?php  echo $produto['titulo']?></h1>
                    <h1 class="preco"><?php echo $produto['preco']?></h1>
                </div>
            </div>        
             <!-- Encerramento do loop forearch -->
          <?php endforeach;?> 
        </div>
    </div>
    <!-- Define um rodapé para o site, junto da logo e informações necessárias -->
    <footer>
      <img src="/assets/logo/CasaDasFigures.svg" class="footerlogo">
       <p class="footertext">©2026 CasaDasFigures. Todos os Direitos Reservados.</p>
       <p class="footertext">E-mail Profissional:Casadasfigs@gmail.com</p>
    </footer>
        
    <!-- Exporta as funções de JavaScript do Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Script que transforma as "caixas" dos produtos em um botão pressionável para levar a outra tela -->
     <script>
        function pressfunction(id){
            window.location.assign("descricao_item.php?id=" + id);
        }
     </script>
</body>
</html>
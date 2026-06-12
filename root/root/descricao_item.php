<?php require_once "sessao.php"?>
<!-- Array para consulta de dados, simulando um Banco de Dados real -->
<?php 
  $produtos = [
    [
        "id" => 1,
        "titulo" => "Darkforge: Moon Lord - Terraria",
        "preco"  => "R$ 430,00",
        "thumb" => "/assets/productthumbs/Mlfigalt.png",
        "imagens" => [
            "/assets/productassets/ML/Mlfig1.jpg",
            "/assets/productassets/ML/mlfig2.jpg",
            "/assets/productassets/ML/mlfigcaixa.jpg"
        ],
        "descricao" => "“Uma desgraça iminente se aproxima…”

Uma representação aterrorizante e altamente detalhada do todo-poderoso Moon Lord. Com 19 cm de altura e detalhes que brilham no escuro!"
    ],
    [
        "id" => 2,
        "titulo" => "Darkforge: Olho do Cthulhu - Terraria",
        "preco" => "R$ 335,00",
        "thumb" => "/assets/productthumbs/Eocfigalt.png",
        "imagens" => [
            "/assets/productassets/EoC/eocfig1.jpg",
            "/assets/productassets/EoC/EoC_Caixa.jpg"
        ],
        "descricao" =>"“Você sente uma presença maligna observando você…”

O terrível Olho de Cthulhu, com os dentes à mostra, descendo para atacar! Com uma base transparente que cria um efeito de flutuação, esta estatueta de 15 cm é uma adição imponente a qualquer mesa ou prateleira."
    ],
    [
        "id" => 3,
        "titulo" => "McFarlaneToys: The Protagonist - Persona 3 Reload (Elite Edition)",
        "preco" => "R$ 980,00",
        "thumb" => "/assets/productthumbs/P3MC_IMG1.png",
        "imagens" => [
            "/assets/productassets/P3MC/P3MC_IMG2.jpg",
            "/assets/productassets/P3MC/P3MC_IMG3.jpg",
            "/assets/productassets/P3MC/P3MC_IMG4.jpg",
            "/assets/productassets/P3MC/P3MC_IMG5.jpg",
            "/assets/productassets/P3MC/P3MC_IMG6.jpg",
            "/assets/productassets/P3MC/P3MC_IMG7.jpg",
            "/assets/productassets/P3MC/P3MC_IMG8.jpg",
            "/assets/productassets/P3MC/P3MC_IMG9.jpg",
            "/assets/productassets/P3MC/P3MC_Thumb.jpg"
        ],
        "descricao" =>"
Série: McFarlane Elite Edition

Makoto Yuki, o protagonista, passa de um adolescente órfão a um herói dotado de Persona. Após se transferir para a Escola Secundária Gekkoukan, ele vivencia a Hora Negra, um evento sobrenatural, e desperta seu poder Persona. Sua personalidade, frequentemente mal interpretada como malvada, é ambivalente e apática.

Características do produto:

A figura de ação da MCFARLANE ELITE EDITION apresenta uma escultura incrivelmente detalhada com aplicações de pintura premium;
Projetada com Ultra Articulação, com até 22 partes móveis para uma gama completa de poses;
Inclui 3 placas faciais intercambiáveis, 5 mãos extras, Evoker, espada, suporte de voo e suporte para cartão;
Inclui um cartão ELITE POINTS e um cartão de arte colecionável. Os Elite Points podem ser usados para resgatar recompensas incríveis e protótipos exclusivos. Visite McFarlane.com para mais detalhes;
Apresentado em embalagem tipo vitrine da McFarlane Elite Edition com detalhes em folha de ouro;
"
    ],
    [
        "id" => 4,
        "titulo" => "Lucrea: Joker - Persona 5 Royal",
        "preco" => "R$ 780,00",
        "thumb" => "/assets/productthumbs/P5MC_IMG1.png",
        "imagens" => [
            "/assets/productassets/P5MC/P5MC_IMG2.png",
            "/assets/productassets/P5MC/P5MC_IMG3.png",
            "/assets/productassets/P5MC/P5MC_IMG4.png",
            "/assets/productassets/P5MC/P5MC_IMG5.png",
            "/assets/productassets/P5MC/P5MC_IMG6.png"
        ],
        "descricao" =>"De Persona 5: Royal vem uma Action Figure Lucrea do Joker! Medindo cerca de 23 cm de altura, o Joker pode ser exibido mascarado e desmascarado, e inclui um acessório de arma removível!
        Categoria: Pré-pintado
        Origem: Persona 5 The Royal
        Personagem: Joker
        Empresa: MegaHouse (fabricante)
        Artista: Inui (escultor), Ekoshi (colorista)
        Lançamento: 27/12/2022
        Materiais: ABS, PVC
        Dimensões: A = 235 mm (9,17 pol.)"
    ],
    [
        "id" => 5,
        "titulo" => "MegaHouse: Game Characters Collection DX: Izanagi - Persona 4 Golden (Ver.2)",
        "preco" => "R$ 800,00",
        "thumb" => "/assets/productthumbs/izanagiimg1.png",
        "imagens" => [
            "/assets/productassets/Izanagi/izanagiimg2.png",
            "/assets/productassets/Izanagi/izanagiimg3.png",
            "/assets/productassets/Izanagi/izanagiimg4.png",
            "/assets/productassets/Izanagi/izanagiimg5.png",
            "/assets/productassets/Izanagi/izanagiimg6.png"
        ],
        "descricao" => "Do popular RPG “Persona 4 Golden”, chega uma nova escultura da Persona do protagonista, “Izanagi”, como parte da coleção Game Characters Collection DX!
Esta segunda versão de Izanagi tem uma altura total de aproximadamente 190 mm, apresentando um volume verdadeiramente impressionante, além de escultura e pintura realistas.

O charme de Izanagi é perfeitamente capturado em sua pose poderosa, pronto para se juntar à sua coleção!

Informações adicionais: 
Figura pré-pintada. Aproximadamente 190 mm de altura e 260 mm de comprimento.
©ATLUS ©SEGA Todos os direitos reservados.
Data de lançamento:
Março de 2024   "
    ],
    [
        "id" => 6,
        "titulo" => "Messtoys: Spider Man Symbiote Suit",
        "preco" => "R$ 420,00",
        "thumb" => "/assets/productthumbs/SpiderManalt.png",
        "imagens" => [
            "/assets/productassets/SM/Spidermanimg1.png",
            "/assets/productassets/SM/Spidermanimg2.png",
            "/assets/productassets/SM/Spidermanimg3.png",
            "/assets/productassets/SM/Spidermanimg4.png",
            "/assets/productassets/SM/Spidermanimg5.png",
            "/assets/productassets/SM/Spidermanimg6.png",
            "/assets/productassets/SM/Spidermanimg7.png",
            "/assets/productassets/SM/Spidermanimg8.png",
            "/assets/productassets/SM/Spidermanimg9.png",
        ],
        "descricao" =>"Apresentamos a figura do Homem-Aranha Symbiote (Vizinho de Traje Preto) da Mess Toys, uma nova divisão da CT Toys especializada em figuras personalizadas. Com lançamento previsto para junho, esta impressionante figura tem aproximadamente 160 mm de altura e é fabricada em PVC, ABS e POM de alta qualidade.

Exclusivamente da Mess Toys, ela captura o visual icônico do Homem-Aranha Symbiote, como visto em The Amazing Spider-Man #25. Com atenção meticulosa aos detalhes e articulação impressionante, esta figura incorpora autenticamente a agilidade e o espírito heróico de Peter Parker. Perfeita tanto para fãs dedicados quanto para colecionadores exigentes, este Homem-Aranha de Traje Preto é uma adição indispensável à sua coleção."
    ],
    [
        "id" => 7,
        "titulo" => "S.H Figuarts: Yuji Itadori (Sukuna's Vessel) - Jujutsu Kaisen",
        "preco" => "R$ 600,00",
        "thumb" => "/assets/productthumbs/Itadorithumb.png",
        "imagens" => [
            "/assets/productassets/Yuji/Itadoriimg1.jpg",
            "/assets/productassets/Yuji/Itadoriimg2.jpg",
            "/assets/productassets/Yuji/Itadoriimg3.jpg",
            "/assets/productassets/Yuji/Itadoriimg4.jpg",
            "/assets/productassets/Yuji/Itadoriimg5.jpg",
            "/assets/productassets/Yuji/Itadoriimg6.jpg",
        ],
        "descricao" =>"YUJI ITADORI retorna à série S.H.Figuarts Jujutsu Kaisen com um novo visual! 

Da série de TV “Jujutsu Kaisen: Culling Game”, YUJI ITADORI junta-se à série S.H.Figuarts com um novo visual. Com articulação e modelagem totalmente redesenhadas, é possível criar poses mais dinâmicas. Este conjunto inclui várias peças intercambiáveis para o rosto e as mãos.

Conteúdo do conjunto:

Corpo principal.
4 pares de mãos intercambiáveis.
4 peças de expressão intercambiáveis.
Conjunto de cabelo intercambiável.
Peças opcionais.
A caixa do produto apresentará uma etiqueta de aviso da Bandai Namco, que serve como prova de que você está adquirindo um produto oficialmente licenciado."
    ],
    [
        "id" => 8,
        "titulo" => "SA-MAXIMUM: Red Hair Pirates Chief: Red-Haired Shanks \"Divine Departure\" - One Piece",
        "preco" => "R$ 900,00",
        "thumb" => "/assets/productthumbs/Shanksthumb.png",
        "imagens" => [
            "/assets/productassets/Shanks/Shanksimg1.png",
            "/assets/productassets/Shanks/Shanksimg2.png",
            "/assets/productassets/Shanks/Shanksimg3.png",
            "/assets/productassets/Shanks/Shanksimg4.png",
            "/assets/productassets/Shanks/Shanksimg5.png",
            "/assets/productassets/Shanks/Shanksimg6.png",
            "/assets/productassets/Shanks/Shanksimg7.png",
            "/assets/productassets/Shanks/Shanksimg8.png",
        ],
        "descricao" =>"Shanks, o ruivo, chefe da Tripulação dos Piratas do Cabelo Vermelho e um dos Quatro Imperadores do Mar, finalmente se junta à série P.O.P MAXIMUM!

A figura é baseada na técnica “Divine Departure”, que derrubou Eustass Kid e seu canhão elétrico com um único golpe. Ela ganhou vida com a verdadeira qualidade MAXIMUM, apresentando uma expressão galante, escultura dinâmica e pintura em várias camadas que realça as texturas e os efeitos.

Com os Quatro Imperadores originais finalmente reunidos na série MAXIMUM, esta é uma obra-prima que atrai a atenção dos fãs de ONE PIECE e P.O.P em todo o mundo!

Informações adicionais
Figura pré-pintada. Aproximadamente 250 mm de altura (170 mm até a cabeça), 310 mm de largura, 300 mm de profundidade.
Data de lançamento
Agosto de 2026"
    ]
];
  
  if (isset($_GET['id'])){
    $id_produto = $_GET['id'];
  }
  else{
    $id_produto = 0;
  }
  $produto_atual = null;
  foreach($produtos as $p)
    if($p['id'] == $id_produto){
        $produto_atual = $p;    
        break;
    }
    if (!$produto_atual) {
      $produto_atual = [
          "titulo" => "Produto não encontrado",
          "preco" => "R$ 0,00",
          "imagens" => ["/assets/default.png"],
          "descricao" => "O produto solicitado não existe ou foi removido de nossa loja."
      ];
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto_atual['titulo']?></title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Exporta a biblioteca de estilização do bootstrap da pasta "css" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Exporta as classes CSS do arquivo de estilização -->
    <link rel="stylesheet" href="/root/root/styles.css">
</head>
<body>
    <!-- Cabeçalho do site -->
      <header>
        <img src="/assets/logo/CasaDasFigures.svg">
      </header>

    <div class="container">
        <div class="row">
            <!-- Define uma "caixa" para a descrição e imagem do produto, usando um loop "forearch" para ler o array de bloco em bloco -->
            <div class="col-md-6">
                <div class="descricao">
                  <div id="fotosProduto" class="carousel slide" data-bs-ride="pause">
                    <!-- Código em PHP para associar as imagens do array com um loop forearch para leitura ao carrosel -->
                    <div class="carousel-inner carousel-inner2">
                        <?php foreach($produto_atual['imagens'] as $index => $imagem):?>
                        <div class="carousel-item carousel-item2  <?php echo $index === 0? 'active' : ''; ?>">
                           <img src="<?php echo $imagem; ?>" class="fotoscarousel d-block w-100">
                        </div> 
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-indicators">
                        <!-- Declaração de um loop forearch para ler as imagens do index através da var "$produto_atual" -->
                        <?php foreach($produto_atual['imagens'] as $index => $imagem): ?>
                            <!-- echo do php para fazer que o botão do carrosel vá para a imagem indexada, e definindo a imagem com index "0" como ativa (primeira imagem do carrosel)-->
                            <button type="button"
                            data-bs-target="#fotosProduto"
                            data-bs-slide-to="<?php  echo $index; ?>"
                            class="<?php echo $index === 0? 'active' : ''; ?>" >
                            <img src="<?php echo $imagem; ?>">
                            </button>
                        <?php endforeach; ?>    
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                     <h1 class="titulodesc"><?php echo $produto_atual['titulo'] ?></h1>
                     <h1 class="precodesc"><?php echo $produto_atual['preco']?></h1>
                     <p class="textodesc"><?php echo nl2br($produto_atual['descricao']) ?></p>
                        <button class="btncomprar">Comprar Agora</button>
                </div>
            </div>        
        </div>
    </div>
    <!-- Divsórias do modal para cadastro de dados -->
    <div class="modal" id="modalCadastro">
          <div class="modal-content">
            <div id="msgErro" class="alert alert-danger d-none"></div>
            <div id="msgErroCpf" class="alert alert-danger d-none"></div>
            <form id="formCadastro">
                <!-- Labels e inputs do modal -->
            <div class="form-group-custom">
                <label>Por favor, insira seus dados para finalizar a compra:</label>
            </div> 
            <div class="form-group-custom">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" required placeholder="Fulano Cicrano da Silva">
                </div>

                <div class="form-group-custom">
                    <label for="data">Data de Nascimento</label>
                    <input type="date" id="data" required min="1920-01-01">
                </div>

                <div class="form-group-custom">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" required placeholder="000.000.000-00" maxlength="14">
                </div>

                <div class="form-group-custom">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" required placeholder="Rua - Número - Bairro - Cidade">
                </div>

                <div class="form-group-custom">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" required placeholder="00000-000" maxlength="9">
                </div>

             <button type="submit" class="btnenviar">Enviar Dados</button>
            </form>
          </div>
         </div>
    <!-- Rodapé do site  -->
    <footer>
      <img src="/assets/logo/CasaDasFigures.svg" class="footerlogo">
       <p class="footertext">©2026 CasaDasFigures. Todos os Direitos Reservados.</p>
       <p class="footertext">E-mail Profissional:Casadasfigs@gmail.com</p>
    </footer>
    <!-- Exporta as funções de JavaScript do Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Script em Java para aplicar um zoom no ponteiro do mouse enquanto observa as imagens -->
    <script>
        $(document).ready(function() { 
            $('.carousel-item2').on('mousemove', function(e){
                const $img = $(this).find('img');
                
                const offset = $(this).offset();
                const width = $(this).width();
                const height = $(this).height();

                const mouseX = ((e.pageX - offset.left) / width) * 100;
                const mouseY = ((e.pageY - offset.top) / height) * 100;

                $img.css('transform-origin', mouseX + '% ' + mouseY + '% ');
            });
         
        }); 
    </script>
    <!-- Máscara de CPF, CEP e validação de idade, além da funcionalidade do modal -->
    <script>
        $(document).ready(function () {
      
       $('#cpf').on('input', function() {
        let v = $(this).val().replace(/\D/g, '');
        v = v.replace(/(\d{3})(\d)/, '$1.$2');
        v = v.replace(/(\d{3})(\d)/, '$1.$2');
        v = v.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        $(this).val(v);
    });
      
       $('#cep').on('input', function(){
         let v = $(this).val().replace(/\D/g, '');
         v = v.replace(/(\d{5})(\d)/,'$1-$2');
         $(this).val(v);
       });
       
        $('.btncomprar').on('click', function() {
        $('#modalCadastro').fadeIn(200);
    });

    $('.close, #modalCadastro').on('click', function(e) {
        if ($(e.target).is('#modalCadastro') || $(e.target).is('.close')) {
            $('#modalCadastro').fadeOut(200);
        }
    });
    

       $("#formCadastro").on("submit", function (e) {
        e.preventDefault();
        
        $('#msgErro').addClass('d-none').text('');
        $('#msgErroCpf').addClass('d-none').text('');
        let nome = $("#nome").val().trim();
        let endereco = $("#endereco").val().trim();
        let cep = $("#cep").val().trim();
        
        const data = new Date($('#data').val());
        const dataatual = new Date();
        let idade = dataatual.getFullYear() - data.getFullYear();
        const m = dataatual.getMonth() - data.getMonth();
        if (m < 0 || (m === 0 && dataatual.getDate() < data.getDate())) idade--;

        if (idade < 18) {
            $('#msgErro').text('Você deve ter no mínimo 18 anos para realizar essa compra.').removeClass('d-none');
            return;
        }
        const cpf = $('#cpf').val().replace(/\D/g, '');
        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
            $('#msgErroCpf').text('CPF Inválido!').removeClass('d-none');
            return;
        }
        alert('Compra concluída! \n\nEm breve mandaremos um e-mail para prosseguir com a forma de pagamento.');
        $('#modalCadastro').fadeOut(200);
        $(this)[0].reset();
    });

});
    </script>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sobre a Mirror Fashion</title>
    <link rel="stylesheet" href="css/sobre.css">
    <!--Apontando para pasta do CSS-SOBRE-->

    <style>
        h1 {
            padding: 10px;
        }
        
        h2 {
            margin-top: 30px;
        }
        
        p {
            padding: 0 45px;
            text-indent: 15px;
        }
        
        figure {
            padding: 15px;
            margin: 30px;
        }
        
        figcaption {
            margin-top: 10px;
        }
        /*bordas para cada elemento do CSS (Resumido o código)*/
        /*ABRINDO - text-align: right (todos os parágrafos ficam ao lado direito (RIGHT))*/
        /*p { text-align: right; } /*FECHANDO a tag*/
        /*p { line-height: 3px; /* tamanho da altura de cada linha */
        /*letter-spacing: 3px; /* tamanho do espaço entre
        cada letra */
        /*word-spacing: 5px; /* tamanho do espaço entre cada palavra */
        /*text-indent: 30px; /* tamanho da margem da primeira linha do texto */
        /*Permite indicar um arquivo de imagem para ser exibido ao fundo do elemento. Com essa declaração,
        o navegador vai requisitar um arquivo sobre-background.jpg , que deve estar na mesma pasta do arquivo CSS onde consta essa declaração.*/
        /*h1 { background-image: url(sobre-background.jpg); }*/
    </style>

</head>

<body>

    <p>
        <img src="img/logo.png" alt="Logo da Mirror Fashion">
        <h1>A Mirror Fashion</h1>



        <p><strong> A Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada em 1932, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.</p>

        <p>Nosso centro de distribuição fica em
            <a href="https://maps.google.com.br/?q=Jacarezinho">
                Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:</p>
        <figure id="centro-distribuicao">
            <img src="img/centro-distribuicao.png" alt="Foto do centro de distribuição da Mirror Fashion">
            <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
        </figure>

        <p>Compre suas roupas e acessórios na Mirror Fashion. Acesse
            <!--Repare como apenas envolvemos o texto a ser linkado usando a tag <a>--><a href="index.html">nossa loja</a> ou entre em contato se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.</p>



        <h2 id="historia">História</h2>
        <figure id="familia-pelho">
            <img src="img/familia-pelho.jpg" alt="Foto da família Pelho">
            <figcaption>Família Pelho</figcaption>
        </figure>


        <p>A Fundada há <?php print date("Y"); ?> anos,ocorreu no momento da descoberta econônica do interior do Paraná. A família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>,
            dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.</p>

        <p>O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes pedidos.</p>

        <p>O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890 mil brasileiros
            nas instalações de Jacarezinho e nos escritórios em todo país.</p>

        <p>Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror Fashion, além de presidentes da União Européia,
            Ásia e o secretário-geral da ONU.</p>

    </p>
    <iframe width="420" height="315" src="http://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allowfullscreen></iframe>

    <h2 id="diferenciais">Diferenciais</h2>

    <ul>
        <li>Menor preço do varejo, garantido</li>
        <li>Se você achar uma loja mais barata, leva o produto de graça</li>
        <li>Pague em reais, dólares, euros ou bitcoins</li>
        <li>Todas as compras com frete grátis para o mundo todo</li>
        <li>Maior comércio eletrônico de moda do mundo</li>
        <li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
        <li>Presente em 124 países</li>
        <li>Mais de um milhão de funcionários em todo o mundo</li>
    </ul>

    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=Jacarezinho&amp;output=embed">
     </iframe>

    <div id="rodape">
        <img src="img/logo.png" alt="Logo da Mirror Fashion"> &copy; Copyright Mirror Fashion
    </div>
</body>

</html>
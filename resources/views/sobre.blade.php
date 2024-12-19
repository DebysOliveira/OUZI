<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Blog sobre arquitetura e design por Ouzi By Karine. Exploramos a criação de espaços únicos e funcionais." />
    <title>Sobre - Ouzi By Karine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    /* FONTE ROBOTO */ 
    .roboto-thin {
  font-family: "Roboto", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.roboto-light {
  font-family: "Roboto", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.roboto-regular {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.roboto-medium {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.roboto-bold {
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.roboto-black {
  font-family: "Roboto", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.roboto-thin-italic {
  font-family: "Roboto", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.roboto-light-italic {
  font-family: "Roboto", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.roboto-regular-italic {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.roboto-medium-italic {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.roboto-bold-italic {
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.roboto-black-italic {
  font-family: "Roboto", sans-serif;
  font-weight: 900;
  font-style: italic;
}
    </style>
    @livewireStyles
</head>

<body class="roboto-regular text-xs tracking-widest antialiased min-h-screen">

    <x-navbar/>

    <main class="container mx-auto w-full flex-grow px-4">
        <div class="flex flex-col lg:flex-row lg:space-x-6">
            
            <!-- Seção de Texto -->
            <div class="leading-loose w-full lg:w-1/2 space-y-6 text-justify mb-6 lg:mb-0">
                <p class="text-2xl lg:text-4xl text-center lg:text-left">
                    <b>SOBRE A OUZI</b>
                </p>
                <p>FUNDADA EM 2016 POR <b>KARINE FERREIRA</b>, <b>A OUZI ARQUITETURA</b> SE ESTABELECEU EM MOSSORÓ/RN, OFERECENDO DESIGN E SOLUÇÕES CRIATIVAS QUE EQUILIBRAM ELEGÂNCIA E FUNCIONALIDADE.</p>
                <p>A OUZI SE DEDICA A CRIAR PROJETOS QUE ATENDEM ÀS NECESSIDADES E AO ESTILO DE SEUS CLIENTES COM SENSIBILIDADE E PRECISÃO.</p>
                <p>EM 2017, A OUZI EXPANDIU OS SEUS HORIZONTES AO INCORPORAR A CURADORIA DE DECORAÇÃO, PROPORCIONANDO SOLUÇÕES PERSONALIZADAS QUE COMBINAM A RIQUEZA LOCAL COM UMA VISÃO COSMOPOLITA, CONTEMPORÂNEA E SOFISTICADA.</p>
            </div>
            
            <!-- Seção de Imagem -->
            <div class="w-full lg:w-1/2">
                <img alt="Foto de Karine Ferreira" loading="lazy" class="w-full h-auto" src="images/YUR05838.jpg"/>
            </div>
        </div>
    </main>

    <x-footer/>
    @livewireScripts
</body>




</html>
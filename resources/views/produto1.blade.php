<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Blog sobre arquitetura e design por Ouzi By Karine. Exploramos a criação de espaços únicos e funcionais." />
    <title>Projetos - Ouzi By Karine</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        .roboto-regular {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    @livewireStyles
</head>

<body class="roboto-regular text-xs tracking-widest antialiased min-h-screen">

    <x-navbar/>

    <main class="container mx-auto flex-grow w-full">
   <div class="flex flex-col lg:flex-row">
    <!-- Left Section -->
    <div class="lg:w-1/2 p-4">
     <div class="relative">
      <img alt="Decorative wall with a quote and furniture" class="w-full" src="https://placehold.co/600x400"/>
     </div>
    </div>
    <!-- Right Section -->
    <div class="lg:w-1/2 p-4 uppercase leading-loose flex flex-col justify-between text-justify">
     <h1 class="text-2xl font-bold mb-2">
     DREAM BIG MAKE IT HAPPEN
     </h1>
     <p class="text-gray-800 mb-4">
     EM TOM HOLOGRÁFICO, REFLETE A DETERMINAÇÃO E A INOVAÇÃO. SUAS CORES DANÇANTES, QUE MUDAM COM A LUZ, SÃO UM CONVITE CONSTANTE PARA SONHAR ALTO E TRANSFORMAR ESSES SONHOS EM CONQUISTAS.</p>
     <p class="text-gray-800 mb-4">ARTE EM ACRÍLICO HOLOGRÁFICO.</p>
     <div class="mb-4">
      <p class="font-bold mb-2">
      TAMANHO (AXLXP): 30,5 X 30,5 X 4,5CM
    </p>
      <div class="text-xl font-bold mb-2">
      R$266,00
     </div>
     </div>
     <button class="bg-black text-white px-4 py-2 w-full uppercase mt-auto">
      Comprar
     </button>
    </div>
   </div>
  </div>
    </main>




    <x-footer/>
    @livewireScripts
</body>
</html>

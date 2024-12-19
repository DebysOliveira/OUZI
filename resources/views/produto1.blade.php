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

    <main class="container mx-auto w-full flex-grow text-xs px-4">
        <div>
            <p class="text-xl lg:text-2xl text-center uppercase tracking-wide mb-6">
                DREAM BIG MAKE IT HAPPEN
            </p>
        </div>
        
        <div class="flex flex-col lg:flex-row lg:space-x-6">
            <div class="flex lg:w-1/2 items-center justify-center lg:justify-start">
                <img 
                    src="https://placehold.co/500x500" 
                    alt="Holographic acrylic art piece with the text 'Dream Big Make It Happen' displayed in a modern interior setting" 
                    class="mx-auto w-full max-h-[500px]">
            </div>

            <div class="leading-loose lg:w-1/2 w-full space-y-10 text-justify mb-6 lg:mb-0">
                <div class="space-y-4">
                    <p>EM TOM HOLOGRÁFICO, REFLETE A DETERMINAÇÃO E A INOVAÇÃO.</p>
                    <p>SUAS CORES DANÇANTES, QUE MUDAM COM A LUZ, SÃO UM CONVITE CONSTANTE PARA SONHAR ALTO E TRANSFORMAR ESSES SONHOS EM CONQUISTAS.</p>
                    <p>ARTE EM ACRÍLICO HOLOGRÁFICO.</p>
                    <p>TAMANHO (AXLXP): 30,5 X 30,5 X 4,5CM</p>
                    <p>Valor: <span>R$ 679</span></p>
                </div>

                <div class="flex justify-center lg:justify-start mt-4 lg:mt-6 pt-10 lg:pt-36">
                    <a href="https://wa.me/SEU_NUMERO_DE_TELEFONE" 
                       target="_blank" 
                       class="px-6 py-2 bg-black text-white font-semibold rounded-md hover:bg-gray-900 transition">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>
    @livewireScripts
</body>
</html>

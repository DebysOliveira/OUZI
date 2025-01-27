<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Blog sobre arquitetura e design por Ouzi By Karine. Exploramos a criação de espaços únicos e funcionais." />
    <title>Projetos - Ouzi By Karine</title>
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

    <main class="container mx-auto max-w-6xl flex-grow uppercase px-4 sm:px-6 lg:px-8">
        <section class="text-center mb-10">
            <h2 class="text-sm text-gray-500 uppercase">
                Minutos Ouzi
            </h2>
            <h1 class="text-2xl sm:text-3xl font-bold mt-2">
                Ressignificar – Ouzi By Karine
            </h1>
            <div class="flex items-center justify-center mt-4">
                <img alt="Imagem de Perfil de Karine" class="w-12 h-12 rounded-full" height="50" src="https://yt3.googleusercontent.com/FLQdtSYASiTKwUX4pQJvCoYrTKaJojkbV9JFpf0LQdet83mOiORbhp1HnbQ6h8PxFX7nB0uhzE0=s160-c-k-c0x00ffffff-no-rj" width="50"/>
                <div class="ml-4 text-left">
                    <p class="text-gray-800">
                        Karine Ferreira
                    </p>
                    <p class="text-gray-500 text-sm">
                        <i class="far fa-calendar-alt"></i>
                        16/05/2023
                    </p>
                </div>
            </div>
        </section>

        <!-- Seção do vídeo -->
        <div class="w-full bg-white rounded-lg shadow-lg mb-4">
            <!-- Frame do vídeo do YouTube -->
            <div class="relative" style="padding-top: 56.25%;">
                <iframe class="absolute top-0 left-0 w-full h-full rounded-sm" src="https://www.youtube.com/embed/-1R7oKcNhyQ" 
                    title="YouTube Video" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
            </div>
        </div>

        <section class="text-justify leading-relaxed mt-8">
            <p class="mb-4">
                Ressignificar é o processo de dar um novo significado a algo, seja uma experiência, uma relação ou até mesmo um objeto. Quando ressignificamos, não estamos apenas mudando a forma como vemos algo; estamos transformando nossa percepção e, consequentemente, a nossa relação com isso. Esse conceito é particularmente poderoso em momentos de adversidade, onde a capacidade de ressignificar pode nos ajudar a superar desafios e encontrar crescimento pessoal.
            </p>
            <p class="mb-4">
                Por exemplo, uma experiência difícil pode ser vista como uma oportunidade de aprendizado, em vez de uma simples fonte de dor. Da mesma forma, ao ressignificar antigas crenças, podemos abrir espaço para novas perspectivas e formas de viver mais alinhadas com quem realmente somos.
            </p>
            <p>
                Ressignificar é, em essência, um ato de empoderamento. Ele nos permite tomar controle sobre nossas narrativas e escolher como queremos interpretá-las, criando novas possibilidades e abrindo caminho para um futuro mais positivo e significativo.
            </p>
        </section>
    </main>

    <x-footer/>
    @livewireScripts
</body>

</html>

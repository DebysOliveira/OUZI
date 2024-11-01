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
        .barlow-condensed-thin {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 100;
      font-style: normal;
    }
    
    .barlow-condensed-extralight {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 200;
      font-style: normal;
    }
    
    .barlow-condensed-light {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 300;
      font-style: normal;
    }
    
    .barlow-condensed-regular {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    
    .barlow-condensed-medium {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 500;
      font-style: normal;
    }
    
    .barlow-condensed-semibold {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 600;
      font-style: normal;
    }
    
    .barlow-condensed-bold {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 700;
      font-style: normal;
    }
    
    .barlow-condensed-extrabold {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 800;
      font-style: normal;
    }
    
    .barlow-condensed-black {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 900;
      font-style: normal;
    }
    
    .barlow-condensed-thin-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 100;
      font-style: italic;
    }
    
    .barlow-condensed-extralight-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 200;
      font-style: italic;
    }
    
    .barlow-condensed-light-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 300;
      font-style: italic;
    }
    
    .barlow-condensed-regular-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 400;
      font-style: italic;
    }
    
    .barlow-condensed-medium-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 500;
      font-style: italic;
    }
    
    .barlow-condensed-semibold-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 600;
      font-style: italic;
    }
    
    .barlow-condensed-bold-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 700;
      font-style: italic;
    }
    
    .barlow-condensed-extrabold-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 800;
      font-style: italic;
    }
    
    .barlow-condensed-black-italic {
      font-family: "Barlow Condensed", sans-serif;
      font-weight: 900;
      font-style: italic;
    }
    </style>
</head>

<body class="barlow-condensed-regular text-sm tracking-widest antialiased min-h-screen flex flex-col">
    <x-navbar/>

    <main class="container mx-auto w-full flex-grow">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <img class="object-cover object-center w-full h-32 sm:h-40 md:h-44 lg:h-48 xl:h-60 cursor-pointer" src="images/bg1.jpg" alt="gallery-photo" onclick="openModal(0)" />
                </div>
                <div>
                    <img class="object-cover object-center w-full h-32 sm:h-40 md:h-44 lg:h-48 xl:h-60 cursor-pointer" src="images/bg2.jpg" alt="gallery-photo" onclick="openModal(1)" />
                </div>
                <div>
                    <img class="object-cover object-center w-full h-32 sm:h-40 md:h-44 lg:h-48 xl:h-60 cursor-pointer" src="images/bg3.jpg" alt="gallery-photo" onclick="openModal(2)" />
                </div>
                <div>
                    <img class="object-cover object-center w-full h-32 sm:h-40 md:h-44 lg:h-48 xl:h-60 cursor-pointer" src="images/bg1.jpg" alt="gallery-photo" onclick="openModal(0)" />
                </div>
                <div>
                    <img class="object-cover object-center w-full h-32 sm:h-40 md:h-44 lg:h-48 xl:h-60 cursor-pointer" src="images/bg2.jpg" alt="gallery-photo" onclick="openModal(1)" />
                </div>
                <div>
                    <img class="object-cover object-center w-full h-32 sm:h-40 md:h-44 lg:h-48 xl:h-60 cursor-pointer" src="images/bg3.jpg" alt="gallery-photo" onclick="openModal(2)" />
                </div>
            </div>

            <!-- Modal do Carrossel -->
            <div id="carouselModal" class="fixed inset-0 bg-black bg-opacity-80 hidden flex items-center justify-center">
                <div class="relative max-w-3xl w-full">
                    <!-- Botão de fechar -->
                    <button class="absolute top-2 right-2 text-white text-3xl font-bold" onclick="closeModal()">×</button>

                    <!-- Imagem do Carrossel -->
                    <img id="modalImage" class="w-full max-h-[80vh] object-contain">

                    <!-- Botões de Navegação -->
                    <button class="absolute top-1/2 left-2 transform -translate-y-1/2 text-white text-3xl" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="absolute top-1/2 right-2 transform -translate-y-1/2 text-white text-3xl" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>

    <script>
        const images = [
            "images/bg1.jpg",
            "images/bg2.jpg",
            "images/bg3.jpg"
        ];
        let currentIndex = 0;

        function openModal(index) {
            currentIndex = index;
            document.getElementById("carouselModal").classList.remove("hidden");
            document.getElementById("modalImage").src = images[currentIndex];
        }

        function closeModal() {
            document.getElementById("carouselModal").classList.add("hidden");
        }

        function changeSlide(direction) {
            currentIndex = (currentIndex + direction + images.length) % images.length;
            document.getElementById("modalImage").src = images[currentIndex];
        }
    </script>
</body>


</html>
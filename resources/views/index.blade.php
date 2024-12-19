<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://ouzi.com.br/wp-content/uploads/2020/06/Icone.png">
    <title>Ouzi Arquitetura e Decor</title>   
    <style>
        /* Configurações do carrossel de imagens */
        .slides img {
            transition: transform 6s ease, opacity 1.0s ease;
        }
        .zoom {
            transform: (1.1);
        }
        /* Fim das configurações do carrossel de imagens */
    </style>
    @livewireStyles
</head>
<body class="overflow-hidden">
    <a href="/projetos">
    <div class="relative w-full h-screen">
        <!-- Início do carrossel de imagens -->
        <div class="slides relative h-full w-full">
            <img src="images/bg1.jpg" alt="Foto 1" class="absolute top-0 left-0 w-full h-full object-cover opacity-100 transform scale-100" id="slide-1">
            <img src="images/bg2.jpg" alt="Foto 2" class="absolute top-0 left-0 w-full h-full object-cover opacity-0 transform scale-100" id="slide-2">
            <img src="images/bg3.jpg" alt="Foto 3" class="absolute top-0 left-0 w-full h-full object-cover opacity-0 transform scale-100" id="slide-3">
            <img src="images/bg4.jpg" alt="Foto 4" class="absolute top-0 left-0 w-full h-full object-cover opacity-0 transform scale-100" id="slide-4">
        </div>
        <!-- Fim do carrossel de imagens -->

        <!-- Início do logo -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <img src="images/logo.png" alt="Logo" class="w-24 sm:w-27 md:w-30 lg:w-33 xl:w-36"> <!-- Ajuste do tamanho da logo conforme necessário -->
        </div>
        <!-- Fim do logo -->
    </div>
    </a>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slides img');
        const totalSlides = slides.length;

        function changeSlide() { // Função para mudar o slide
            slides[currentSlide].classList.remove('opacity-100', 'zoom'); // Remove a classe 'zoom' antes de mudar o slide atual
            slides[currentSlide].classList.add('opacity-0'); // Adiciona a classe 'opacity-0' para a transição de opacidade
            
            currentSlide = (currentSlide + 1) % totalSlides; // Avança para a próxima imagem

            slides[currentSlide].classList.remove('opacity-0'); // Remove a classe 'opacity-0' após a transição de opacidade
            slides[currentSlide].classList.add('opacity-100'); // Adiciona a classe 'opacity-100' para tornar a imagem visível
            slides[currentSlide].classList.add('zoom'); // Adiciona a classe 'zoom' imediatamente após a imagem se tornar visível
        }

        function startCarousel() {
            // Adiciona zoom na primeira imagem imediatamente
            slides[0].classList.add('zoom');

            // Altera o slide após 3 segundos (tempo que a imagem fica visível com zoom)
            setTimeout(() => {
                changeSlide(); // Chama a função para mudar o slide
            }, 6000); // Ajuste este valor para alterar quanto tempo a primeira imagem é exibida

            // Mudança automática de slides a cada 6 segundos
            setInterval(() => {
                changeSlide(); // Chama a função para mudar o slide
            }, 6000);
        } 

        // Começa o carrossel 
        startCarousel();
    </script>
@livewireScripts
</body>
</html>
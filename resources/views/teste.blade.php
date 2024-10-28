<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel Modal com Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Galeria de Imagens -->
<div class="gallery grid grid-cols-3 gap-4 p-4">
    <img src="images/YUR05838.webp" alt="Imagem 1" class="w-full h-48 object-cover cursor-pointer rounded-lg" onclick="openModal(0)">
    <img src="images/YUR05838.webp" alt="Imagem 2" class="w-full h-48 object-cover cursor-pointer rounded-lg" onclick="openModal(1)">
    <img src="images/YUR05838.webp" alt="Imagem 3" class="w-full h-48 object-cover cursor-pointer rounded-lg" onclick="openModal(2)">
    <!-- Adicione mais imagens conforme necessário -->
</div>

<!-- Modal do Carrossel -->
<div id="carouselModal" class="fixed inset-0 bg-black bg-opacity-80 hidden flex items-center justify-center">
    <div class="relative max-w-3xl w-full">
        <!-- Botão de fechar -->
        <button class="absolute top-2 right-2 text-white text-3xl font-bold" onclick="closeModal()">×</button>

        <!-- Imagem do Carrossel -->
        <img id="modalImage" class="w-full max-h-[80vh] object-contain rounded-lg">

        <!-- Botões de Navegação -->
        <button class="absolute top-1/2 left-2 transform -translate-y-1/2 text-white text-3xl" onclick="changeSlide(-1)">&#10094;</button>
        <button class="absolute top-1/2 right-2 transform -translate-y-1/2 text-white text-3xl" onclick="changeSlide(1)">&#10095;</button>
    </div>
</div>

<script>
    const images = [
        "images/YUR05838.webp",
        "images/YUR05838.webp",
        "images/YUR05838.webp"
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

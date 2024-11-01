<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Blog sobre arquitetura e design por Ouzi By Karine. Exploramos a criação de espaços únicos e funcionais." />
    <title>Login - Ouzi By Karine</title>
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

<body class="barlow-condensed-regular text-sm tracking-widest antialiased min-h-screen flex items-center justify-center">

    <div class="bg-gray-200 p-8 rounded-lg w-full max-w-sm mx-4 h-auto">
        <div class="flex justify-center mb-4">
            <a href="/">
                <img src="images/logo.png" alt="Logotipo da empresa Ouzi By Karine" class="h-16">
            </a>
        </div>
        <h2 class="text-center text-lg mb-2">
            CLIENTE OUZI
        </h2>
        <form>
            <div class="mb-4">
                <label class="block text-sm mb-1" for="username">
                    USUÁRIO
                </label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" id="username" placeholder="Seu nome de usuário" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-sm mb-1" for="password">
                    SENHA
                </label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" id="password" placeholder="Sua senha" type="password" />
            </div>
            <div class="mb-4 text-right">
                <a class="text-sm text-gray-600 hover:underline" href="#">
                    ESQUECEU SUA SENHA?
                </a>
            </div>
            <button class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-800">
                ENTRAR
            </button>
        </form>
    </div>

</body>




</html>
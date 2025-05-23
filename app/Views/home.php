<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Olá, um programador web com experência em tecnologias como PHP, Javascript, Java e ReactJS"
    />
    <title>Jorge Otávio - Programador</title>
    <link rel="canonical" href="https://www.otaviox.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="<?php echo base_url('favicon.png'); ?>">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/regular/style.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
      :root {
        --color-dark-blue: #000814;
        --color-deep-blue: #001d3d;
        --color-blue: #003566;
        --color-white: #e4e4e4;
      }

      body {
        background-color: var(--color-dark-blue);
      }

      * {
        font-family: "Lexend", sans-serif;
        color: var(--color-white);
      }

      .main-container {
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <header class="main-container px-3">
      <div class="my-6">
        <img src="images/otavio-logo.svg" alt="">
      </div>
      <h1 class="my-6 text-2xl">Programador Full-Stack, criando sistemas webs!</h1>
      <p class="my-6 text-sm font-light">
        Sou natural do interior de Pernambuco e tenho <span id="ageDisplay"></span> anos. Sou
        desenvolvedor full-stack, com foco em front-end, especializado na
        criação de interfaces intuitivas e acessíveis.
      </p>

      <p class="my-6 text-sm font-light">
        Sou formado em Sistemas de Informação pela UFRPE, campus UAST, e
        concluí minha graduação em 2024.
      </p>

      <p class="my-6 text-sm font-light">
        Atualmente, trabalho na Neoperformance, uma empresa do Rio de Janeiro
        que atua com dados e mídia de forma eficiente e de alta qualidade,
        atendendo clientes em nível global.
      </p>
    </header>
    <section class="main-container px-3">
      <h3 class="mb-4 pt-5 border-t border-[#003566]">
        Formação
      </h3>
      <ul class="bg-[#001D3D] border border-[#003566] rounded-lg px-4">
        <li class="flex items-center py-5">
          <div class="text-4xl me-4">
            <i class="ph ph-student"></i>
          </div>
          <div>
            <h4>Bel. Sistemas de Informação </h4>
            <p class="font-light text-sm"><a href="https://ufrpe.br/" target="_blank" referrerpolicy="no-referrer">UFRPE</a> - Bacharelado - 2024</p>
          </div>
        </li>
      </ul>
    </section>
    <section class="main-container px-3">
      <h3 class="mb-4 pt-5">
        Projetos
      </h3>
      <ul class="bg-[#001D3D] border border-[#003566] rounded-lg px-4">
        <li class="flex items-center py-5 border-b border-[#003566]">
          <div class="text-4xl me-4">
            <i class="ph ph-bus"></i>
          </div>
          <div>
            <a href="https://onibus-uast.jorgeotavio.com/" target="_blank" referrerpolicy="no-referrer">
              <h4>Ônibus Uast <i class="ph ph-arrow-square-out ms-1"></i></h4>
            </a>
            <p class="text-sm font-light">Criado para listar e interagir os pontos de ônibus da UAST.</p>
          </div>
        </li>
        <li class="flex items-center py-5 border-b border-[#003566]">
          <div class="text-4xl me-4">
            <i class="ph ph-rocket"></i>
          </div>
          <div>
            <h4>RapidOs</h4>
            <p class="text-sm font-light">Sistema para gerenciar Ordens de Serviços.</p>
          </div>
        </li>
        <li class="flex items-center py-5 border-b border-[#003566]">
          <div class="text-4xl me-4">
            <i class="ph ph-car"></i>
          </div>
          <div>
            <a href="https://rentalapp.certoauto.com/login" target="_blank" referrerpolicy="no-referrer">
              <h4>Rental App <i class="ph ph-arrow-square-out ms-1"></i></h4>
            </a>
            <p class="text-sm font-light">Aplicativo de rastreamento veicular, com comandos de ligar e desligar o veículo.</p>
          </div>
        </li>
        <li class="flex items-center py-5">
          <div class="text-4xl me-4">
            <i class="ph ph-student"></i>
          </div>
          <div>
            <a href="https://learn.flashingdocs.com/" target="_blank" referrerpolicy="no-referrer">
              <h4>Flash Learn <i class="ph ph-arrow-square-out ms-1"></i></h4>
            </a>
            <p class="text-sm font-light">Aplicativo de estudos, baseado na técnica de aprendizado com Flash Cards.</p>
          </div>
        </li>
      </ul>
    </section>
    <section class="main-container px-3 pb-5">
      <h3 class="mb-4 pt-5">
        Social
      </h3>
      <ul class="bg-[#001D3D] border border-[#003566] rounded-lg px-4">
        <li>
          <a class="cursor-pointer flex items-center py-5 border-b border-[#003566]" href="https://www.linkedin.com/in/jorgeotavio/" referrerpolicy="no-referrer" target="_blank">
            <div class="text-2xl me-3">
              <i class="ph ph-linkedin-logo"></i>
            </div>
            <div>
              <h4 class="text-sm">Linkedin</h4>
            </div>
            <div class="ms-auto">
              <i class="ph ph-arrow-square-out"></i>
            </div>
          </a>
        </li>
        <li>
          <a class="cursor-pointer flex items-center py-5 border-b border-[#003566]" href="https://www.github.com/jorgeotavio/" referrerpolicy="no-referrer" target="_blank">
            <div class="text-2xl me-3">
              <i class="ph ph-github-logo"></i>
            </div>
            <div>
              <h4 class="text-sm">Github</h4>
            </div>
            <div class="ms-auto">
              <i class="ph ph-arrow-square-out"></i>
            </div>
          </a>
        </li>
        <li>
          <a class="cursor-pointer flex items-center py-5" href="https://www.instagram.com/jorgeotav/" referrerpolicy="no-referrer" target="_blank">
            <div class="text-2xl me-3">
              <i class="ph ph-instagram-logo"></i>
            </div>
            <div>
              <h4 class="text-sm">Instagram</i></h4>
            </div>
            <div class="ms-auto">
              <i class="ph ph-arrow-square-out"></i>
            </div>
          </a>
        </li>
      </ul>
    </section>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const birthDateStr = '2000-03-09';
        const age = calculateAge(birthDateStr);
        displayAge(age);
      });
  
      function calculateAge(birthDateStr) {
        const today = new Date();
        const birthDate = new Date(birthDateStr);
  
        let age = today.getFullYear() - birthDate.getFullYear();
        const hasHadBirthdayThisYear =
          today.getMonth() > birthDate.getMonth() ||
          (today.getMonth() === birthDate.getMonth() && today.getDate() >= birthDate.getDate());
  
        if (!hasHadBirthdayThisYear) age--;
  
        return age;
      }
  
      function displayAge(age) {
        const ageElement = document.getElementById('ageDisplay');
        ageElement.textContent = age;
      }
    </script>
  </body>
</html>

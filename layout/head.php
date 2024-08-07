<!doctype html>
<html lang="pt-BR" data-bs-theme="auto">
<head>
  <script src="<?=$baseUrl;?>/assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Teste </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="<?=$baseUrl;?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$baseUrl;?>/assets/dist/css/buttons.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  
  <?php
  
    if(isset($dependencies)){
      
      foreach($dependencies as $key=>$value){
         
          if($key == "datatablesCSS"){
              if($value == true){
                 echo callDatatablesCSS();
              }
          }

          if($key == "googleRecaptcha"){
            if($value == true){
               echo googleRecaptcha();
            }
          }     
      }

  }

  ?>


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }

    .bg-main {
      background: linear-gradient(to left, #712cf9, #4a1b87);
    }

    .btn-transition {
      color: #fff;
      background-color: #712cf9;
      transition: background-color 0.3s, transform 0.3s;
    }
    
    .btn-transition:hover {
      color: #fff;
      background-color: #4a1b87;
      transform: scale(1.05);
    }

    .link-transition {
      color: #712cf9;
      transition: color 0.3s, transform 0.3s;
    }
  
    .link-transition:hover {
      color: #4a1b87;
      transform: scale(1.05);
    }

    .nav-link {
      transition: color 0.3s, transform 0.2s;
    }
  
    .nav-link:hover {
      transform: skew(2deg, 2deg);
    }


  </style>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
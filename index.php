


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <title>Funções PHP</title>
    <style>

        @font-face {
            font-family: 'digital7';
            src: url('fonts/digital-7.ttf') format('truetype');
        }

        .container {
            margin: 80px auto;
            max-width: 500px;
        }

        input {
            font-family: 'digital7', sans-serif;
            color: #000;
            text-align: right;
            font-size: 3.5em;
            width: 100%;
            height: 65px;
        }

        button {
            background-color: #cfcfcf;
            margin: 10px;
            border: none;
            border-radius: 7px;
            width: 80px;
            height: 65px;
            font-size: 2.2em !important;
            transition: all 0.5s ease;
        }

        button:hover {
            color: #fff;
            background-color: #111;
            box-shadow: 0 0 6px #999;
        }

        .btn-resultado {
            width: 180px;
        }

    </style>
</head>
<body>

    <script>
        var erroAtivo = false; // Flag para verificar se há um erro

        function preencherInput(caractere) {
            var input = document.getElementById("inputCaractere");

            if (erroAtivo) {
                // Se houver um erro, não permite adicionar caracteres
                return;
            }

            var valorAtual = input.value;
            
            if (caractere === '.') {
                // Permite o ponto apenas se o último caractere for um operador ou se o input estiver vazio
                if (valorAtual.length === 0 || isNaN(valorAtual[valorAtual.length - 1])) {
                    return;
                }

                // Permite o ponto apenas se o último número não contiver um ponto
                var ultimoNumero = valorAtual.split(/[\+\-\*\/]/).pop();
                if (ultimoNumero.includes('.')) {
                    return;
                }
                input.value += caractere;
            } else {
                // Verifica se o caractere é um operador e se o último caractere também é um operador
                var operadores = '+-*/';
                if (operadores.includes(caractere)) {
                    if (valorAtual.length === 0 || operadores.includes(valorAtual[valorAtual.length -1])) {
                        return;
                    }
                }
                // Limita a 14 caracteres
                if (valorAtual.length < 15) {
                    input.value += caractere;
                }
            }
            erroAtivo = false; // Limpa o erro se o usuário começa a digitar
        }

        function apagarInput() {
            document.getElementById("inputCaractere").value = "";
            erroAtivo = false; // Limpa o erro quando apagar o input
        }

        function excluirUltimo() {
            var input = document.getElementById('inputCaractere');

            if (erroAtivo = true) {
                return;                
            } else {
                input.value = input.value.slice(0, -1);
            }

        }

        function calcular() {
            var display = document.getElementById("inputCaractere");
            var resultado;

            try {
                resultado = eval(display.value);
                if (resultado.toString().length > 15) {
                    resultado = resultado.toString().slice(-15); // Obtem os últimos 15 caracteres
                    display.value - resultado + '...';
                } else {
                    display.value = resultado;
                }
            
                erroAtivo = false; // Limpa o erro após o calculor bem-sucedido

            } catch (e) {
                display.value = 'Erro';
                erroAtivo = true; // Define a flag de erro para desabilitar a entrada
            }
        }

    </script>

    <div class="container rounded shadow-lg bg-dark p-5 text-light">

        <div class="row">
            <h5 class="text-center fs-4"> K A I O - C A L C U L A T O R </h5>
        </div>
        <div class="row">
            <form>    
                <div class="col-12 text-center my-4">
                    <input type="text" id="inputCaractere" name="inputCaractere" disabled>
                </div>

                <div class="col-12 d-flex justify-content-between mb-1">
                    <button type="button" class="btn btn-danger" onclick="apagarInput()"> C </button>
                    <button type="button" class="btn btn-primary" onclick="excluirUltimo()">  <i class="fa-solid fa-delete-left"></i> </button>
                    <button type="button" class="btn btn-secondary"> MC </button>
                    <button type="button" class="btn btn-secondary" onclick="preencherInput('/')" > <i class="fa-solid fa-divide"></i> </button>
                </div>

                <div class="col-12 d-flex justify-content-between mb-1">
                    <button type="button" onclick="preencherInput(7)"> 7 </button>
                    <button type="button" onclick="preencherInput(8)"> 8 </button>
                    <button type="button" onclick="preencherInput(9)"> 9 </button>
                    <button type="button" class="btn btn-secondary" onclick="preencherInput('*')"> <i class="fa-solid fa-xmark"></i> </button>
                </div>

                <div class="col-12 d-flex justify-content-between mb-1">
                    <button type="button" onclick="preencherInput(4)"> 4 </button>
                    <button type="button" onclick="preencherInput(5)"> 5 </button>
                    <button type="button" onclick="preencherInput(6)"> 6 </button>
                    <button type="button" class="btn btn-secondary" onclick="preencherInput('-')"> <i class="fa-solid fa-minus"></i> </button>
                </div>

                <div class="col-12 d-flex justify-content-between mb-1">
                    <button type="button" onclick="preencherInput(1)"> 1 </button>
                    <button type="button" onclick="preencherInput(2)"> 2 </button>
                    <button type="button" onclick="preencherInput(3)"> 3 </button>
                    <button type="button" class="btn btn-secondary" onclick="preencherInput('+')"> <i class="fa-solid fa-plus"></i>  </button>
                </div>

                <div class="col-12 d-flex justify-content-between mb-1">
                    <button type="button" onclick="preencherInput(0)"> 0 </button>
                    <button type="button" onclick="preencherInput('.')"> . </button>
                    <button type="button" onclick="calcular()" class="btn btn-danger btn-resultado"> <i class="fa-solid fa-equals"></i> </button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/formularios.css">
</head>
<body>
    <div class="menu">
        <div class="container">
            <div class="row-flex vertical-center">
                <div class="col-2">
                    <h1>LOGO</h1>
                </div>
                <div class="col-8">
                    <ul class="direita">
                        <li>HOME</li>
                        <li>PORTIFÓLIO</li>
                        <li>SERVIÇOS</li>
                        <li>SOBRE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="#" method="POST">
            <div class="row-flex">
                <div class="col-2">
                    <label for="nome">NOME</label>
                </div>
                <div class="col-8">
                    <input type="text" name="nome" id="nome">
                </div>
            </div>

            <div class="row-flex">
                <div class="col-2">
                    <label for="endereco">ENDEREÇO</label>
                </div>
                <div class="col-8">
                    <input type="text" name="endereco" id="endereco">
                </div>
            </div>

            <div class="row-flex">
                <div class="col-2">
                    <label for="telefone">TELEFONE</label>
                </div>
                <div class="col-8">
                    <input type="tel" name="telefone" id="telefone">
                </div>
            </div>

            <div class="row-flex">
                <div class="col-2">
                    <label for="email">EMAIL</label>
                </div>
                <div class="col-8">
                    <input type="email" name="email" id="email">
                </div>
            </div>

            <div class="row-flex">
                <div class="col-10">
                    <input type="submit" value="E N V I A R">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
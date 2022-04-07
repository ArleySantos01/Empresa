<?php
    require_once 'Funcionario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informações</title>
    <style>
       body
       {
           margin: 0px;
       }

       .container
       {
           width: 100vw;
           height: 100vh;
           background: #34495E;
           display: flex;
           flex-direction: row;
           justify-content: center;
           align-items: center;
       }

       .box
       {
           width: 700px;
           height: 500px;
           background: #fff;
           text-align: center;
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Informações de funcionário</h2>
            <form method="post" action="post">
                <input type="text" name="nome" id="nome" placeholder="Nome"><br/><br/>
                <input type="text" name="cidade" id="cidade" placeholder="Cidade"><br/><br/>
                <input type="text" name="salario" id="salario" placeholder="Salario"><br/><br/>
                <input type="text" name="horasTrab" id="horasTrab" placeholder="Horas trabalhadas"><br/><br/>
                <select name="Operaco" id="Operacao">
                    <option value="0"> === OPÇÕES === </option>
                    <option value="1">1 - Cadastrar funcionário</option>
                    <option value="2">2 - Calcular salário</option>
                    <option value="3">3 - Dar aumento</option>
                    <option value="4">4 - Mostrar os dados</option>
                    <option value="5">0 - Sair</option>
                </select><br/><br/><br/><br/>
                <input type="submit" name="btnEnviar" id="btnEnviar">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['btnEnviar']))
    {
        $cadastroFun = new Funcionario();
        # $cadastroFun->setHorasTrabalhadas($_POST['horasTrab']);

        switch($_POST['Operacao'])
        {
            case 1:
                $Exibicao = $cadastroFun->setNome($_POST['nome']);
                $Exibicao = $cadastroFun->setCidade($_POST['cidade']);
                $Exibicao = $cadastroFun->setSalarioFinal($_POST['salario']);          
                break;
            case 2:
            $Exibicao = $cadastroFun->calcularSalario();
                break;
            case 3:
                $Exibicao = $cadastroFun->darAumento($_POST['salario']);
                break;
            case 4:
                $Exibicao = $cadastroFun->mostrarDados();
                break;
            default:
                echo "Operação inválida";
                break;
        }
        echo " ".$Exibicao." ";
    }
?>
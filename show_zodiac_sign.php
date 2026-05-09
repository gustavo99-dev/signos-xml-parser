<?php
// Carrega o XML
$signos = simplexml_load_file("signos.xml");

// Recebe a data do formulário
$data_nascimento = $_POST['birthdate'];
$data_usuario = new DateTime($data_nascimento);
$dia_mes_usuario = $data_usuario->format('m-d'); // Formato Mês-Dia para comparação

$signo_encontrado = null;

foreach ($signos->signo as $s) {
    // Tratando as datas do XML
    $data_inicio_partes = explode('/', (string)$s->dataInicio);
    $data_fim_partes = explode('/', (string)$s->dataFim);
    
    $inicio = $data_inicio_partes[1] . '-' . $data_inicio_partes[0]; // Mês-Dia
    $fim = $data_fim_partes[1] . '-' . $data_fim_partes[0]; // Mês-Dia

    // Lógica especial para Capricórnio (que vira o ano)
    if ($inicio > $fim) {
        if ($dia_mes_usuario >= $inicio || $dia_mes_usuario <= $fim) {
            $signo_encontrado = $s;
            break;
        }
    } else {
        if ($dia_mes_usuario >= $inicio && $dia_mes_usuario <= $fim) {
            $signo_encontrado = $s;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Seu Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; align-items: center; justify-content: center; height: 100vh; background-color: #f8f9fa; }
        .result-card { text-align: center; background: white; padding: 50px; border-radius: 15px; box-shadow: 0px 4px 15px rgba(0,0,0,0.1); max-width: 600px; }
        h1 { color: #007bff; font-weight: bold; font-size: 3rem; }
    </style>
</head>
<body>

<div class="result-card">
    <?php if ($signo_encontrado): ?>
        <p class="text-muted">Seu signo é:</p>
        <h1><?php echo $signo_encontrado->signoNome; ?></h1>
        <p class="lead"><?php echo $signo_encontrado->descricao; ?></p>
    <?php else: ?>
        <h2 class="text-danger">Não foi possível identificar seu signo.</h2>
    <?php endif; ?>
    
    <a href="index.php" class="btn btn-secondary mt-4">Voltar</a>
</div>

</body>
</html>

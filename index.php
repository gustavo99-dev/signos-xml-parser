<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Descubra-se no Zodíaco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .form-container { max-width: 500px; margin: 50px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0px 4px 10px rgba(0,0,0,0.1); }
        .submit-btn { background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; width: 100%; transition: 0.3s; }
        .submit-btn:hover { background-color: #0056b3; }
    </style>
</head>
<body>

<div class="container text-center">
    <header class="mt-5">
        <h1><i class="fas fa-star-and-crescent"></i> Descubra-se no Zodíaco</h1>
        <p class="subtitle text-muted">Vamos ver o que seu signo tem a revelar!</p>
    </header>

    <div class="form-container">
        <form action="show_zodiac_sign.php" method="POST">
            <div class="mb-3 text-start">
                <label for="birthdate" class="form-label"><i class="far fa-calendar-alt"></i> Data de Nascimento</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" required>
            </div>
            <button type="submit" class="submit-btn"><i class="fas fa-magic"></i> Revelar Meu Signo</button>
        </form>
        <p class="mt-3 text-muted" style="font-size: 0.8rem;">Desenvolvido por: Gustavo Gomes</p>
    </div>
</div>

</body>
</html>

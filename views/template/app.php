<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LockBox</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <div class="mx-auto max-w-screen-lg h-screen flex flex-col">

        <?php if (auth()) { ?>
        <?php require base_path('views/partials/_navbar.view.php'); ?>
        <?php require base_path('views/partials/_pesquisar.view.php'); ?>
        <?php require base_path('views/partials/_mensagem.view.php'); ?>
        <?php } ?>

        <?php if ($sucesso = flash()->get('sucesso')) { ?>
            <div class="alert alert-success mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span><?= $sucesso ?></span>
            </div>
        <?php } ?>

        <div class="flex flex-grow py-4">
            <?php require base_path("views/{$view}.view.php"); ?>
        </div>
    </div>

</body>

</html>
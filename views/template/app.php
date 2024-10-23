<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>

            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <?php if (auth()):  ?>
                    <li><a href="/logout" class="hover:underline">Oi, <?= auth()->nome; ?></a></li>
                <?php else:  ?>
                    <li><a href="/login" class="hover:underline">Fazer login</a></li>
                <?php endif;  ?>
            </ul>
        </nav>
    </header>


    <main class="mx-auto max-w-screen-lg space-y-6">

        <?php if ($mensagem = flash()->get('mensagem')): ?>
            <div class="border-green-800 border-2 rounded-md bg-green-900 text-green-400 px-4 py-1">
                <?= $mensagem; ?>
            </div>
        <?php endif ?>

        <?php require_once("views/{$view}.view.php"); ?>


    </main>

</body>

</html>
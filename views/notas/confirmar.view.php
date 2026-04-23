<?php
$validacoes = flash()->get('validacoes');
?>

<div class="bg-base-300 rounded-l-box w-full text-3xl font-bold pt-20 flex flex-col items-center">
    <form action="/mostrar" method="POST" class="max-w-md flex flex-col gap-4">
        <div class="text-center">Digite a sua senha novamente para começar a ver todas as suas notas descriptografadas.</div>
        <label class="form-control floating-label">
            <input type="password" name="senha" placeholder="Senha"
                class="input input-bordered w-full" />
                <span>Senha</span>
            <?php if (isset($validacoes['senha'])): ?>
                <div class="label text-error text-xs">
                    <?= $validacoes['senha'][0] ?>
                </div>
            <?php endif; ?>
        </label>
        <button class="btn btn-secondary">Abrir minhas notas</button>
    </form>
</div>
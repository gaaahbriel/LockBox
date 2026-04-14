<?php $validacoes = flash()->get('validacoes') ?>

<div class="bg-base-300 rounded-l-box w-56">
    <div class="bg-base-200 p-4">
        + NOVA NOTA
    </div>
</div>

<div class="bg-base-200 rounded-r-box w-full p-10">
    <form action="/notas/criar" method="POST" class="flex flex-col space-y-6">
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Titulo</span>
            </div>
            <input type="text" name="titulo" class="input input-bordered w-full" />
        </label>
        <?php if (isset($validacoes['titulo'])): ?>
            <div class="label text-error text-xs">
                <?= $validacoes['titulo'][0] ?>
            </div>
        <?php endif; ?>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Sua nota</span>
            </div>
            <textarea name="nota" class="textarea textarea-bordered h-24 w-full"></textarea>
        </label>
        <?php if (isset($validacoes['nota'])): ?>
            <div class="label text-error text-xs">
                <?= $validacoes['email'][0] ?>
            </div>
        <?php endif; ?>
        <div class="flex justify-end items-center">
            <button class="btn btn-error">SALVAR</button>
        </div>
    </form>
</div>
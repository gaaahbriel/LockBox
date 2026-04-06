<div class="grid grid-cols-2">
    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
            <div>
                <p class="py-4 text-xl">Bem vindo ao</p>
                <h1 class="text-6xl font-bold">LockBox</h1>
                <p class="pt-2 pb-4 text-xl">
                    Onde você guarda <span class="italic">tudo</span> com segurança.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-red-900 hero mr-40 min-h-screen text-black">
        <div class="hero-content -mt-20">
            <form action="/login" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Faça Login</div>
                        <label class="form-control w-full max-w-xs text-black">
                            <div class="label">
                                <span class="label-text">Email</span>
                            </div>
                            <input type="text" name="email" id="email" class="input input-bordered w-full max-w-xs bg-white">
                        </label>
                        <label class="form-control w-full max-w-xs text-black">
                            <div class="label">
                                <span class="label-text">Senha</span>
                            </div>
                            <input type="password" name="senha" id="senha" class="input input-bordered w-full max-w-xs bg-white">
                        </label>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">Login</button>
                            <a href="/registrar" class="btn btn-link">Quero me registrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
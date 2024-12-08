<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>




<div class="relative flex flex-col rounded-xl items-center justify-center bg-white max-w-xl p-5">
    <h4 class="text-xl font-medium text-slate-800">
        <?= lang('Auth.login') ?>
    </h4>
    <form action="<?= url_to('login') ?>" method="post" class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">

        <div class="mb-1 flex flex-col gap-6">

            <!-- Email -->
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    <?= lang('Auth.email') ?>
                </label>
                <input type="email" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
            </div>

            <?php if (session('error') !== null) : ?>

                <div class="text-sm text-red-500" role="alert"><?= session('error') ?></div>

            <?php elseif (session('errors') !== null) : ?>
                <div class="text-sm text-red-500" role="alert">
                    <?php if (is_array(session('errors'))) : ?>
                        <?php foreach (session('errors') as $error) : ?>
                            <?= $error ?>
                            <br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <?= session('errors') ?>
                    <?php endif ?>
                </div>
            <?php endif ?>

            <!-- Password -->
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    <?= lang('Auth.password') ?>
                </label>
                <input type="password" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="<?= lang('Auth.password') ?>" required />
            </div>
        </div>

        <!-- Remember me -->
        <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
            <div class="inline-flex items-center mt-2">
                <label class="flex items-center cursor-pointer relative" for="check-2">
                    <input type="checkbox" class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-slate-800 checked:border-slate-800" id="check-2"
                        <?php if (old('remember')): ?> checked<?php endif ?> />
                    <span class="absolute text-white opacity-0 pointer-events-none peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </label>
                <label class="cursor-pointer ml-2 text-slate-600 text-sm" for="check-2">
                    <?= lang('Auth.rememberMe') ?>
                </label>
            </div>
        <?php endif; ?>

        <!-- Masuk -->
        <button class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:hover:bg-[#CD7F32] focus:shadow-none active:hover:bg-[#CD7F32] hover:hover:bg-[#CD7F32] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">
            <?= lang('Auth.login') ?>
        </button>

        <!-- Lupa password -->
        <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
            <p class="flex justify-center mt-6 text-sm text-slate-600">
                <?= lang('Auth.forgotPassword') ?>
                <a href="<?= base_url('magic-link') ?>" class="ml-1 text-sm font-semibold text-slate-700 underline">
                    <?= lang('Auth.useMagicLink') ?>
                </a>
            </p>
        <?php endif ?>

        <!-- Daftar -->
        <?php if (setting('Auth.allowRegistration')) : ?>
            <p class="flex justify-center mt-6 text-sm text-slate-600">
                <?= lang('Auth.needAccount') ?>
                <a href="<?= base_url('register') ?>" class="ml-1 text-sm font-semibold text-slate-700 underline">
                    <?= lang('Auth.register') ?>
                </a>
            </p>
        <?php endif ?>

    </form>
</div>

<?= $this->endSection() ?>
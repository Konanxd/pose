<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.register') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="flex flex-col rounded-xl items-center justify-center bg-white max-w-xl p-5">
    <h4 class="text-xl font-medium text-slate-800">
        <?= lang('Auth.register') ?>
    </h4>
    <form action="<?= url_to('register') ?>" method="post" class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">

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

        <div class="mb-1 flex flex-col gap-6">

            <!-- Email -->
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    <?= lang('Auth.email') ?>
                </label>
                <input type="email" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
            </div>

            <!-- Username -->
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    <?= lang('Auth.username') ?>
                </label>
                <input type="text" id="floatingUsernameInput" name="username" inputmode="text" autocomplete="username" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
            </div>

            <!-- Password -->
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    <?= lang('Auth.password') ?>
                </label>
                <input type="password" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="new-password" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="<?= lang('Auth.password') ?>" required />
            </div>

            <!-- Konfirmasi password -->
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    <?= lang('Auth.passwordConfirm') ?>
                </label>
                <input type="password" id="floatingPasswordConfirmInput" name="password_confirm" inputmode="text" autocomplete="new-password" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="<?= lang('Auth.passwordConfirm') ?>" required />
            </div>
        </div>

        <!-- Daftar -->
        <button class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:hover:bg-[#CD7F32] focus:shadow-none active:hover:bg-[#CD7F32] hover:hover:bg-[#CD7F32] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">
            <?= lang('Auth.register') ?>
        </button>

        <!-- Masuk -->
        <p class="flex justify-center mt-6 text-sm text-slate-600">
            <?= lang('Auth.haveAccount') ?>
            <a href="<?= base_url('login') ?>" class="ml-1 text-sm font-semibold text-slate-700 underline">
                <?= lang('Auth.login') ?>
            </a>
        </p>

    </form>
</div>

<?= $this->endSection() ?>
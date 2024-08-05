<x-app-layout title="{{ $title }}">

    <section class="bg-slate-50 py-8 2xl:p-0">
        <div class="mx-auto flex min-h-screen max-w-lg flex-col justify-center">
            <div class="mb-8 flex items-center justify-center text-2xl font-semibold lg:mb-10">
                <h3
                    class="relative z-10 bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text font-bold text-transparent">
                    Sistem Informasi Manajemen OBE</h3>
            </div>

            <div class="max-w-screen-sm w-full rounded-lg bg-white shadow md:mt-0 xl:p-0">
                <div class="space-y-8 p-12">
                    <h2 class="text-2xl font-bold text-gray-900 lg:text-3xl">
                        Daftar
                    </h2>

                    <form class="mt-8 space-y-6" action="{{ route('register.store') }}" method="POST">
                        @csrf

                        <div>
                            <label class="mb-2 block text-base font-medium text-gray-900" for="fullname">
                                Nama Lengkap</label>
                            <input class="field-input-slate w-full" name="fullname" type="text"
                                value="{{ old('fullname') }}" autofocus placeholder="Nama Lengkap" required>
                        </div>

                        <div>
                            <label class="mb-2 block text-base font-medium text-gray-900" for="username">
                                Username</label>
                            <input class="field-input-slate w-full" name="username" type="text"
                                value="{{ old('username') }}" autofocus placeholder="Username" required>
                        </div>

                        <div>
                            <label class="mb-2 block text-base font-medium text-gray-900" for="email">
                                Email</label>
                            <input class="field-input-slate w-full" name="email" type="email"
                                value="{{ old('email') }}" autofocus placeholder="name@hotmail.com" required>
                        </div>

                        <div>
                            <label class="mb-2 block text-base font-medium text-gray-900" for="password">
                                Password</label>
                            <input class="field-input-slate w-full" name="password" type="password"
                                placeholder="••••••••" required>
                        </div>

                        <x-atoms.button.button-primary :customClass="'w-full text-center rounded-lg px-5 py-3'" :type="'submit'" :name="'Daftar'" />

                        <div class="text-sm font-medium text-gray-500">
                            Sudah punya akun? <a class="text-indigo-500 hover:underline"
                                href="{{ route('login.index') }}">Masuk</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</x-app-layout>

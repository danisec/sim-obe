<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-sm font-medium text-gray-500 md:text-base">Profile</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-full md:w-11/12">
        <h4 class="mb-6 text-xl font-semibold text-gray-900 md:text-2xl">Akun dan Pengaturan</h4>

        <div class="mt-8 space-y-6 border-b border-slate-200 text-center text-sm font-medium text-gray-700">
            <ul class="flex flex-wrap">
                <li class="me-2">
                    <a class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-slate-300 hover:text-gray-600"
                        href="{{ route('profile.index', $profile->id) }}">Detail Profile</a>
                </li>
                <li class="me-2">
                    <a class="active inline-block rounded-t-lg border-b-2 border-indigo-600 p-4 text-indigo-600"
                        href="#">Pengaturan</a>
                </li>
            </ul>
        </div>

        <div class="mt-8 space-y-6 rounded-md border border-slate-200 px-8 py-8 md:px-32">

            <form class="-mt-6 space-y-6" action="{{ route('profile.update', $profile->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div>
                    <label class="mb-2 block text-base font-medium text-gray-900" for="fullname">
                        Nama Lengkap</label>
                    <input class="@error('fullname') border-red-500 @enderror field-input-slate w-full" name="fullname"
                        type="text" value="{{ $profile->fullname }}" required>

                    @error('fullname')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-base font-medium text-gray-900" for="username">
                        Nama Pengguna</label>
                    <input class="@error('username') border-red-500 @enderror field-input-slate w-full" name="username"
                        type="text" value="{{ $profile->username }}" required>

                    @error('username')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-base font-medium text-gray-900" for="email">
                        Email</label>
                    <input class="@error('email') border-red-500 @enderror field-input-slate w-full" name="email"
                        type="email" value="{{ $profile->email }}" required>

                    @error('email')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-base font-medium text-gray-900" for="password">
                        Password</label>

                    <div class="relative">
                        <input class="@error('password') border-red-500 @enderror field-input-slate w-full"
                            id="passwordInput" name="password" type="password" value="{{ old('password') }}"
                            placeholder="********">

                        <button class="absolute right-2 top-1/2 -translate-y-1/2 transform"
                            id="togglePasswordVisibility" type="button">
                            <x-atoms.svg.eye id="eyeIcon" />
                        </button>
                    </div>

                    @error('password')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-row gap-4">
                    <x-atoms.button.button-primary :customClass="'w-full text-center rounded-lg px-5 py-3'" :type="'submit'" :name="'Ubah'" />
                </div>
            </form>

        </div>
    </div>

</x-app-dashboard>

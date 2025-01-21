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
                    <a class="{{ request()->segment(2) == 'my-profile' ? 'border-indigo-600 p-4 text-indigo-600' : 'border-transparent p-4 hover:border-slate-300 hover:text-gray-600' }} inline-block rounded-t-lg border-b-2"
                        href="#">Detail Profile</a>
                </li>
                <li class="me-2">
                    <a class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-slate-300 hover:text-gray-600"
                        href="{{ route('profile.edit', $profile->id) }}">Pengaturan</a>
                </li>
            </ul>
        </div>

        <div class="mt-8 space-y-6 rounded-md border border-slate-200 px-8 py-8 md:px-32">
            <div class="flex items-center justify-center">
                <svg class="h-14 w-14 md:h-20 md:w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    color="#000000" fill="none">
                    <path
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z"
                        stroke="currentColor" stroke-width="1.5" />
                </svg>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="fullname">
                    Nama Lengkap</label>
                <input class="field-input-slate w-full" name="fullname" type="text" value="{{ $profile->fullname }}"
                    @disabled(true) @readonly(true)>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="username">
                    Nama Pengguna</label>
                <input class="field-input-slate w-full" name="username" type="text" value="{{ $profile->username }}"
                    @disabled(true) @readonly(true)>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="email">
                    Email</label>
                <input class="field-input-slate w-full" name="email" type="email" value="{{ $profile->email }}"
                    @disabled(true) @readonly(true)>
            </div>
        </div>

    </div>

</x-app-dashboard>

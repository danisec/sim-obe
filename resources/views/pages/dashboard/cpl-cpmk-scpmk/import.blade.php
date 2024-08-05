<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-base font-medium text-gray-900 hover:text-blue-600"
                    href="{{ route('capaianPembelajaran.index') }}">Data cpl-cpmk-scpmk</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-base font-medium text-gray-500">Import</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-8/12">
        <div class="mb-8">
            <h4 class="mb-6 text-2xl font-semibold text-gray-900">Download Template CPL-CPMK-SCPMK</h4>

            <div>
                <a href="{{ asset('storage/template_cpl-cpmk-scpmk/template_cpl-cpmk-scpmk.xls') }}">
                    <button
                        class="flex h-12 w-full flex-row items-center justify-center gap-2 rounded-md bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            color="#FFFFFF" fill="none">
                            <path
                                d="M12 14.5L12 4.5M12 14.5C11.2998 14.5 9.99153 12.5057 9.5 12M12 14.5C12.7002 14.5 14.0085 12.5057 14.5 12"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20 16.5C20 18.982 19.482 19.5 17 19.5H7C4.518 19.5 4 18.982 4 16.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        Download
                    </button>
                </a>
            </div>
        </div>

        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Import File CPL-CPMK-SCPMK</h4>

        <form class="mt-8 space-y-6" action="{{ route('capaianPembelajaran.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="flex w-full flex-col">
                <label class="mb-2 block text-base font-medium text-gray-900" for="pilih file">
                    Pilih File
                </label>
                <input
                    class="block w-full rounded-lg border border-gray-200 bg-white text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
                    id="file-input" name="import_file" type="file" @required(true)>
                <p class="mt-1 text-sm text-gray-600">File support .xlsx, .xls</p>
            </div>

            <div class="flex flex-row gap-4">
                <a href="{{ route('capaianPembelajaran.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
                <x-atoms.button.button-primary :customClass="'w-full text-center rounded-lg px-5 py-3'" :type="'submit'" :name="'Simpan'" />
            </div>
        </form>
    </div>

</x-app-dashboard>

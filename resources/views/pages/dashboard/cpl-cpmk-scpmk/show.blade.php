<x-layouts.app-dashboard title="{{ $title }}">

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
                <span class="mx-2 text-base font-medium text-gray-500">Detail cpl-cpmk-scpmk</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-11/12">

        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Detail CPL-CPMK-SCPMK
        </h4>

        <div class="mt-8 space-y-6">

            <h4 class="mb-6 text-xl font-semibold text-gray-900">Capaian Pembelajaran Lulusan
            </h4>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpl">
                    Kode CPL
                </label>
                <input class="@error('kode_cpl') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_cpl" type="text" value="{{ $cplCpmkScpmk->kode_cpl }}" @disabled(true)
                    @readonly(true) />
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="deskripsi cpl">
                    Deskripsi CPL
                </label>
                <textarea class="textAreaHeight field-input-slate w-full" name="deskripsi_cpl" type="text" rows="3"
                    @disabled(true) @readonly(true)>{{ $cplCpmkScpmk->deskripsi_cpl }}</textarea>
            </div>

            <h4 class="mb-6 text-xl font-semibold text-gray-900">Capaian Pembelajaran Mata Kuliah
            </h4>

            @foreach ($cplCpmkScpmk->capaianPembelajaranMataKuliah as $itemCPMK)
                <div>
                    <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpmk">
                        Kode CPMK
                    </label>
                    <input class="@error('kode_cpmk') border-red-500 @enderror field-input-slate w-full capitalize"
                        name="kode_cpmk" type="text" value="{{ $itemCPMK->kode_cpmk }}" @disabled(true)
                        @readonly(true) />
                </div>

                <div>
                    <label class="mb-2 block text-base font-medium text-gray-900" for="deskripsi cpmk">
                        Deskripsi CPMK
                    </label>
                    <textarea class="textAreaHeight field-input-slate w-full" name="deskripsi_cpmk" type="text" rows="3"
                        @disabled(true) @readonly(true)>{{ $itemCPMK->deskripsi_cpmk }}</textarea>
                </div>
            @endforeach

            <h4 class="mb-6 text-xl font-semibold text-gray-900">Sub Capaian Pembelajaran Mata Kuliah
            </h4>

            @foreach ($cplCpmkScpmk->capaianPembelajaranMataKuliah as $itemCPMK)
                @foreach ($itemCPMK->subCapaianPembelajaranMataKuliah as $itemSCPMK)
                    <div>
                        <label class="mb-2 block text-base font-medium text-gray-900" for="kode scpmk">
                            Kode SCPMK
                        </label>
                        <input class="@error('kode_scpmk') border-red-500 @enderror field-input-slate w-full capitalize"
                            name="kode_scpmk" type="text" value="{{ $itemSCPMK->kode_scpmk }}"
                            @disabled(true) @readonly(true) />
                    </div>

                    <div>
                        <label class="mb-2 block text-base font-medium text-gray-900" for="deskripsi scpmk">
                            Deskripsi SCPMK
                        </label>
                        <textarea class="textAreaHeight field-input-slate w-full" name="deskripsi_scpmk" type="text" rows="3"
                            @disabled(true) @readonly(true)>{{ $itemSCPMK->deskripsi_scpmk }}</textarea>
                    </div>
                @endforeach
            @endforeach

            <div class="flex justify-center">
                <a href="{{ route('capaianPembelajaran.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
            </div>
        </div>
    </div>

</x-layouts.app-dashboard>

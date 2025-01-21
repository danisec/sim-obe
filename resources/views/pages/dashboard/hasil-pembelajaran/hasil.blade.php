<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-sm font-medium text-gray-900 hover:text-blue-600 md:text-base"
                    href="{{ route('hasilPembelajaran.index') }}">Hasil Pembelajaran</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-sm font-medium text-gray-500 md:text-base">Perhitungan Hasil Pembelajaran</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    @foreach ($hasilPembelajaran as $itemHasilPembelajaran)
        <div class="my-8">
            <h4 class="mb-6 text-lg font-semibold text-gray-900 md:text-xl">
                {{ $itemHasilPembelajaran->nama_mata_kuliah }}</h4>

            <div class="relative overflow-x-auto rounded-lg shadow-sm">
                <table class="w-full text-left">
                    <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                {{ '' }}
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Partisipasi / Case Method
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Proyek / Problem Based Learning
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Tugas
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Kuis
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Ujian Tertulis (Evaluasi Tengah Semester)
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Ujian Tertulis (Evaluasi Akhir Semester)
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-sm text-gray-900 md:text-base">
                        @foreach ($itemHasilPembelajaran->nilaiHasilPembelajaran as $itemNilai)
                            <tr class="border-b bg-white hover:bg-slate-100">
                                <th class="whitespace-nowrap p-2 font-medium text-gray-900 md:px-6 md:py-4"
                                    scope="row">
                                    {{ '' }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $itemNilai->partisipasi ?? '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $itemNilai->proyek ?? '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $itemNilai->tugas ?? '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $itemNilai->kuis ?? '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $itemNilai->evaluasi_tengah_semester ?? '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $itemNilai->evaluasi_akhir_semester ?? '-' }}
                                </td>
                            </tr>
                        @endforeach

                        <tr class="font-semibold text-gray-900">
                            <th class="w-12 whitespace-nowrap bg-white px-6 py-4">
                                Rata-rata
                            </th>
                            <td class="bg-slate-100 px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['partisipasi'], 0) }}
                            </td>
                            <td class="bg-slate-100 px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['proyek'], 0) }}
                            </td>
                            <td class="bg-slate-100 px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['tugas'], 0) }}
                            </td>
                            <td class="bg-slate-100 px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['kuis'], 0) }}
                            </td>
                            <td class="bg-slate-100 px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['evaluasi_tengah_semester'], 0) }}
                            </td>
                            <td class="bg-slate-100 px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['evaluasi_akhir_semester'], 0) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto rounded-lg shadow-sm">
                <table class="my-8 w-full text-left">
                    <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                Indikator
                            </th>
                            <th class="p-2 md:px-6 md:py-3" scope="col">
                                Bobot (%)
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Rata-rata Nilai
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Rata-rata * Bobot
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Total
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-sm text-gray-900 md:text-base">
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="w-12 whitespace-nowrap bg-slate-100 px-6 py-4 font-medium text-gray-900"
                                scope="row">
                                Partisipasi / Case Method
                            </th>
                            <td class="px-6 py-4">
                                {{ $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->partisipasi ? $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->partisipasi . '%' : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['partisipasi'], 0) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgBobotNilaiHasilPembelajaran[$loop->index]['partisipasi'] / 100, 2) }}
                            </td>
                            <td class="bg-slate-100 px-6 py-4 font-semibold"
                                rowspan="{{ count($itemHasilPembelajaran->nilaiHasilPembelajaran) + 1 }}">
                                {{ number_format($totalBobotNilaiHasilPembelajaran[$loop->index] / 100, 2) }}
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="w-12 whitespace-nowrap bg-slate-100 px-6 py-4 font-medium text-gray-900"
                                scope="row">
                                Proyek / Problem Based Learning
                            </th>
                            <td class="px-6 py-4">
                                {{ $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->proyek ? $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->proyek . '%' : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['proyek'], 0) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgBobotNilaiHasilPembelajaran[$loop->index]['proyek'] / 100, 2) }}
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="w-12 whitespace-nowrap bg-slate-100 px-6 py-4 font-medium text-gray-900"
                                scope="row">
                                Tugas
                            </th>
                            <td class="px-6 py-4">
                                {{ $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->tugas ? $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->tugas . '%' : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['tugas'], 0) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgBobotNilaiHasilPembelajaran[$loop->index]['tugas'] / 100, 2) }}
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="w-12 whitespace-nowrap bg-slate-100 px-6 py-4 font-medium text-gray-900"
                                scope="row">
                                Kuis
                            </th>
                            <td class="px-6 py-4">
                                {{ $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->kuis ? $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->kuis . '%' : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['kuis'], 0) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgBobotNilaiHasilPembelajaran[$loop->index]['kuis'] / 100, 2) }}
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="w-12 whitespace-nowrap bg-slate-100 px-6 py-4 font-medium text-gray-900"
                                scope="row">
                                Ujian Tertulis (Evaluasi Tengah Semester)
                            </th>
                            <td class="px-6 py-4">
                                {{ $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->evaluasi_tengah_semester
                                    ? $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->evaluasi_tengah_semester . '%'
                                    : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['evaluasi_tengah_semester'], 0) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgBobotNilaiHasilPembelajaran[$loop->index]['evaluasi_tengah_semester'] / 100, 2) }}
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="w-12 whitespace-nowrap bg-slate-100 px-6 py-4 font-medium text-gray-900"
                                scope="row">
                                Ujian Tertulis (Evaluasi Akhir Semester)
                            </th>
                            <td class="px-6 py-4">
                                {{ $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->evaluasi_akhir_semester ? $itemHasilPembelajaran->mappingCapaianPembelajaranLulusan->evaluasi_akhir_semester . '%' : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgNilaiHasilPembelajaran[$loop->index]['evaluasi_akhir_semester'], 0) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($avgBobotNilaiHasilPembelajaran[$loop->index]['evaluasi_akhir_semester'] / 100, 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach

</x-app-dashboard>

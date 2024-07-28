<x-layouts.app-dashboard title="{{ $title }}">

    <div class="my-8">
        <h4 class="mb-6 text-xl font-semibold text-gray-900">Predikat Capaian Pembelajaran Lulusan</h4>
    </div>

    <div class="relative overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left text-base text-gray-900">
            <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                <tr>
                    <th class="px-6 py-3" scope="col">
                        No.
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Skor CPL
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Predikat CPL
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        1
                    </th>
                    <td class="px-6 py-4">
                        85 - 100
                    </td>
                    <td class="px-6 py-4">
                        Sangat kompeten (Exemplary)
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        2
                    </th>
                    <td class="px-6 py-4">
                        75 - 84
                    </td>
                    <td class="px-6 py-4">
                        Kompeten (Competent)
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        3
                    </th>
                    <td class="px-6 py-4">
                        60 - 74
                    </td>
                    <td class="px-6 py-4">
                        Berkembang (Developing)
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        4
                    </th>
                    <td class="px-6 py-4">
                        0 - 59
                    </td>
                    <td class="px-6 py-4">
                        Tidak memuaskan (Unstatisfactory)
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="my-8">
        <h4 class="mb-6 text-xl font-semibold text-gray-900">Hasil Evaluasi CPL Berdasarkan Hasil Pembelajaran Mahasiswa
        </h4>
    </div>

    <div class="relative overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left text-base text-gray-900">
            <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                <tr>
                    <th class="px-6 py-3" scope="col">
                        Kode CPL
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Deskripsi CPL
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Score CPL
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Predikat CPL
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Aspek
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Kemampuan
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        23-MKU-CPL-01
                    </th>
                    <td class="px-6 py-4">
                        Bertakwa kepada Tuhan Yang Maha Esa, taat hukum dan disiplin dalam kehidupan bermasyarakat dan
                        bernegara
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-01'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-01'] >= 85
                            ? 'Sangat kompeten (Exemplary)'
                            : ($scoreCPL['23-MKU-CPL-01'] >= 75
                                ? 'Kompeten (Competent)'
                                : ($scoreCPL['23-MKU-CPL-01'] >= 60
                                    ? 'Berkembang (Developing)'
                                    : 'Tidak memuaskan (Unstatisfactory)')) }}
                    </td>
                    <td class="px-6 py-4">
                        Sikap
                    </td>
                    <td class="px-6 py-4">
                        <p>Perilaku</p>
                        <br />
                        <p>Bersikap Inklusif</p>
                        <br />
                        <p>Patuh</p>
                        <br />
                        <p>Disiplin</p>
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        23-MKU-CPL-02
                    </th>
                    <td class="px-6 py-4">
                        Menjunjung tinggi nilai kemanusiaan, nasionalisme, kebangsaan, kepedulian terhadap masyarakat
                        dan lingkungan, serta menghargai keanekaragaman budaya, pandangan, agama dan kepercayaan serta
                        pendapat atau temuan orisinal orang lain
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-02'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-02'] >= 85
                            ? 'Sangat kompeten (Exemplary)'
                            : ($scoreCPL['23-MKU-CPL-02'] >= 75
                                ? 'Kompeten (Competent)'
                                : ($scoreCPL['23-MKU-CPL-02'] >= 60
                                    ? 'Berkembang (Developing)'
                                    : 'Tidak memuaskan (Unstatisfactory)')) }}
                    </td>
                    <td class="px-6 py-4">
                        Sikap
                    </td>
                    <td class="px-6 py-4">
                        <p>Nasionalisme</p>
                        <br />
                        <p>Peduli</p>
                        <br />
                        <p>Menghargai</p>
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        23-MKU-CPL-03
                    </th>
                    <td class="px-6 py-4">
                        Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan serta mampu menerapkan
                        nilai-nilai Jaya sebagai university value
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-03'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-03'] >= 85
                            ? 'Sangat kompeten (Exemplary)'
                            : ($scoreCPL['23-MKU-CPL-03'] >= 75
                                ? 'Kompeten (Competent)'
                                : ($scoreCPL['23-MKU-CPL-03'] >= 60
                                    ? 'Berkembang (Developing)'
                                    : 'Tidak memuaskan (Unstatisfactory)')) }}
                    </td>
                    <td class="px-6 py-4">
                        Sikap
                    </td>
                    <td class="px-6 py-4">
                        <p>Kemandirian</p>
                        <br />
                        <p>Tata kelola diri</p>
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        23-MKU-CPL-04
                    </th>
                    <td class="px-6 py-4">
                        Menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau
                        implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora
                        yang sesuai dengan bidang keahliannya serta menunjukkan kinerja mandiri, bermutu, dan terukur
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-04'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $scoreCPL['23-MKU-CPL-04'] >= 85
                            ? 'Sangat kompeten (Exemplary)'
                            : ($scoreCPL['23-MKU-CPL-04'] >= 75
                                ? 'Kompeten (Competent)'
                                : ($scoreCPL['23-MKU-CPL-04'] >= 60
                                    ? 'Berkembang (Developing)'
                                    : 'Tidak memuaskan (Unstatisfactory)')) }}
                    </td>
                    <td class="px-6 py-4">
                        <p>Keterampilan Umum</p>
                        <br>
                        <div>Pengetahuan</div>
                    </td>
                    <td class="px-6 py-4">
                        <p>Berpikir logis dan analitis</p>
                        <br />
                        <p>Pengelolaan tugas dan perbaikan berkelanjutan</p>
                        <br />
                        <p>Menyelesaikan masalah</p>
                        <p>Peyusunan laporan kegiatan ilmiah</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-layouts.app-dashboard>

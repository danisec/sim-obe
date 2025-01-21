<x-app-dashboard title="{{ $title }}">

    <div>
        <h4 class="mb-6 text-base font-semibold text-gray-900 md:text-xl">Predikat Capaian Pembelajaran Lulusan</h4>
    </div>

    <div class="relative overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left">
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

            <tbody class="text-sm text-gray-900 md:text-base">
                @foreach ($predikatCPL as $itemPredikat)
                    <tr class="border-b bg-white hover:bg-slate-100">
                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $itemPredikat['range'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $itemPredikat['predikat'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="my-8">
        <h4 class="mb-6 text-base font-semibold text-gray-900 md:text-xl">Hasil Evaluasi CPL Berdasarkan Hasil
            Pembelajaran Mahasiswa
        </h4>
    </div>

    <div class="relative overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left">
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

            <tbody class="text-sm text-gray-900 md:text-base">
                @foreach ($cpl as $item)
                    @php
                        // Ambil nilai skor CPL
                        $score = $item['score'] ?? 0;

                        // Tentukan predikat berdasarkan skor
                        $predikat = 'Tidak memuaskan (Unstatisfactory)';
                        foreach ($predikatCPL as $range) {
                            [$min, $max] = explode(' - ', $range['range']);
                            if ($score >= $min && $score <= $max) {
                                $predikat = $range['predikat'];
                                break;
                            }
                        }
                    @endphp

                    <tr class="border-b bg-white hover:bg-slate-100">
                        <th class="whitespace-nowrap px-6 py-4" scope="row">
                            {{ $item['kode_cpl'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item['deskripsi_cpl'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($score, 2) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $predikat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ implode(', ', $item['aspek']) }}
                        </td>
                        <td class="w-full divide-y divide-gray-300">
                            <div class="px-6 py-1">
                                <ul class="divide-y divide-gray-300">
                                    @foreach ($item['kemampuan'] as $kemampuan)
                                        <li class="py-4">{{ $kemampuan }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-dashboard>

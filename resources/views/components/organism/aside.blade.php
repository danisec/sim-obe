<aside class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
    aria-label="Sidebar">
    <div class="flex h-full flex-col justify-between overflow-y-auto bg-white px-3 py-4 shadow-md shadow-slate-100">

        <div class="flex flex-col gap-4 overflow-y-scroll">
            <a class="flex items-center px-1.5 py-5" href="{{ route('dashboard.index') }}">
                <p class="text-2xl font-bold text-blue-500">SIM OBE</p>
            </a>

            <ul class="space-y-2 font-medium">
                <li class="flex flex-col gap-2.5">
                    @foreach ($sideNavDashboard as $name => $data)
                        <a class="{{ request()->segment(2) == $data['url'] ? 'items-center rounded-lg p-2 text-gray-900 bg-slate-100 font-bold' : 'items-center rounded-lg p-2 text-gray-900 hover:bg-slate-100' }} flex flex-row gap-2 text-base"
                            href="{{ $data['url'] == 'dashboard' ? route('dashboard.index') : route('dashboard.index') }}">

                            <svg class="{{ request()->segment(2) == $data['url'] ? 'text-gray-900 transition duration-75' : 'text-gray-700 group-hover:text-gray-700' }}"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                viewBox="{{ $data['viewBox'] }}" stroke-width="1.5" stroke="currentColor">
                                @foreach ($data['paths'] as $path)
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}" />
                                @endforeach
                            </svg>

                            <span>{{ $name }}</span>
                        </a>
                    @endforeach
                </li>

                <li class="flex flex-col gap-2.5">
                    @foreach ($sideNav as $name => $data)
                        <a class="{{ request()->segment(2) == $data['url'] ? 'items-center rounded-lg p-2 text-gray-900 bg-slate-100 font-bold' : 'items-center rounded-lg p-2 text-gray-900 hover:bg-slate-100' }} flex flex-row gap-2 text-base"
                            href="{{ $data['url'] == 'dashboard' ? route('dashboard.index') : route('dashboard.index') . '/' . $data['url'] }}">

                            <svg class="{{ request()->segment(2) == $data['url'] ? 'text-gray-900 transition duration-75' : 'text-gray-700 group-hover:text-gray-700' }}"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                viewBox="{{ $data['viewBox'] }}" stroke-width="1.5" stroke="currentColor">
                                @foreach ($data['paths'] as $path)
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}" />
                                @endforeach
                            </svg>

                            <span>{{ $name }}</span>
                        </a>
                    @endforeach
                </li>
            </ul>
        </div>

    </div>
</aside>

<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 flex-shrink-0 overflow-y-auto bg-white md:block">
    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="{{ route('dashboard.index') }}">
            SIM OBE
        </a>

        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @foreach ($sideNavDashboard as $name => $data)
                    <a class="{{ request()->segment(2) == $data['url'] ? 'items-center rounded-lg p-2 text-gray-900 bg-slate-100 font-bold' : 'items-center rounded-lg p-2 font-medium text-gray-900 hover:bg-slate-100' }} inline-flex w-full flex-row items-center gap-2 text-base transition-colors duration-150 hover:text-gray-800"
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

            <li class="relative flex flex-col gap-3 px-6 pb-3">
                @foreach ($sideNav as $name => $data)
                    <a class="{{ request()->segment(2) == $data['url'] ? 'items-center rounded-lg p-2 text-gray-900 bg-slate-100 font-bold' : 'items-center rounded-lg p-2 font-medium text-gray-900 hover:bg-slate-100' }} inline-flex w-full flex-row items-center gap-2 text-base transition-colors duration-150 hover:text-gray-800"
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
</aside>

<!-- Mobile sidebar -->
<!-- Backdrop -->
<div class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"></div>
<aside class="fixed inset-y-0 z-20 mt-16 w-64 flex-shrink-0 overflow-y-auto bg-white md:hidden" x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" x-cloak>
    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            SIM OBE
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @foreach ($sideNavDashboard as $name => $data)
                    <a class="{{ request()->segment(2) == $data['url'] ? 'items-center rounded-lg p-2 text-gray-900 bg-slate-100 font-bold' : 'items-center rounded-lg p-2 font-medium text-gray-900 hover:bg-slate-100' }} inline-flex w-full flex-row items-center gap-2 text-sm transition-colors duration-150 hover:text-gray-800"
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

            <li class="relative flex flex-col gap-3 px-6 pb-3">
                @foreach ($sideNav as $name => $data)
                    <a class="{{ request()->segment(2) == $data['url'] ? 'items-center rounded-lg p-2 text-gray-900 bg-slate-100 font-bold' : 'items-center rounded-lg p-2 font-medium text-gray-900 hover:bg-slate-100' }} inline-flex w-full flex-row items-center gap-2 text-sm transition-colors duration-150 hover:text-gray-800"
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
</aside>

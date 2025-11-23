<aside 
    class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out md:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
>
    <div class="flex items-center justify-center h-16 border-b border-gray-200 bg-primary-900">
        <span class="text-xl font-bold text-white tracking-wide">BELIMBING BANK</span>
    </div>

    <nav class="p-4 space-y-1 overflow-y-auto h-[calc(100vh-4rem)]">
        <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Menu</p>
        
        <a href="{{ route('accounts.index') }}" class="flex items-center px-4 py-3 text-gray-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 transition-colors {{ request()->routeIs('accounts.*') ? 'bg-primary-50 text-primary-600 font-medium' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
            </svg>
            Accounts
        </a>

        <a href="{{ route('customers.index') }}" class="flex items-center px-4 py-3 text-gray-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 transition-colors {{ request()->routeIs('customers.*') ? 'bg-primary-50 text-primary-600 font-medium' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            Customers
        </a>

        <a href="{{ route('deposito-types.index') }}" class="flex items-center px-4 py-3 text-gray-600 rounded-lg hover:bg-primary-50 hover:text-primary-600 transition-colors {{ request()->routeIs('deposito-types.*') ? 'bg-primary-50 text-primary-600 font-medium' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            Deposito Types
        </a>
    </nav>
</aside>

<!-- Overlay -->
<div 
    x-show="sidebarOpen" 
    @click="sidebarOpen = false"
    class="fixed inset-0 z-40 bg-gray-900 bg-opacity-50 md:hidden"
    x-transition:enter="transition-opacity ease-linear duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-linear duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
></div>

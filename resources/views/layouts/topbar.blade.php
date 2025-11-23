<header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 sticky top-0 z-30">
    <div class="flex items-center">
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        
        <!-- Breadcrumbs (Simple Placeholder) -->
        <div class="hidden md:flex items-center ml-4 text-sm text-gray-500">
            <span class="hover:text-primary-600 cursor-pointer">Dashboard</span>
            @if(request()->segment(1))
                <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="capitalize text-gray-800 font-medium">{{ str_replace('-', ' ', request()->segment(1)) }}</span>
            @endif
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <!-- User Profile Dropdown (Static for now) -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 font-bold">
                    A
                </div>
                <span class="text-sm font-medium text-gray-700 hidden md:block">Admin</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            
            <div 
                x-show="open" 
                @click.away="open = false"
                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 border border-gray-100"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                style="display: none;"
            >
            </div>
        </div>
    </div>
</header>

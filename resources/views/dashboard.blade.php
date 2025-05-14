<x-app-layout>
 <div class="flex bg-gray-900">
  <!-- Main Content -->
  <main class="flex-1 p-6" x-data="{
    systemStatus: 'active',
    activeProject: 'ERP Implementation',
    activeTab: 'dashboard'
  }">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold text-gray-300">Donkraft IT Solutions Dashboard</h1>
      <div class="flex items-center space-x-4">
        <button @click="activeTab = 'dashboard'" class="px-3 py-2 rounded-md transition-colors" :class="activeTab === 'dashboard' ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-gray-800'">
          Dashboard
        </button>
        <button @click="activeTab = 'services'" class="px-3 py-2 rounded-md transition-colors" :class="activeTab === 'services' ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-gray-800'">
          Services
        </button>
        <button @click="activeTab = 'projects'" class="px-3 py-2 rounded-md transition-colors" :class="activeTab === 'projects' ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-gray-800'">
          Projects
        </button>
        <button @click="activeTab = 'clients'" class="px-3 py-2 rounded-md transition-colors" :class="activeTab === 'clients' ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-gray-800'">
          Clients
        </button>
      </div>
    </div>

    <!-- Stats Cards with Glass Effect -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-6">
      <!-- Total Projects Card -->
      <div class="relative bg-gray-800 bg-opacity-40 backdrop-filter backdrop-blur-lg p-4 rounded-lg shadow-lg border border-gray-700 overflow-hidden group hover:bg-opacity-60 transition duration-300">
        <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full bg-blue-500 bg-opacity-20 flex items-center justify-center opacity-70 group-hover:opacity-100 transition-opacity">
          <svg class="h-10 w-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
          </svg>
        </div>
        <div class="flex flex-col z-10 relative">
          <p class="text-gray-400 text-sm font-medium mb-1">Active Projects</p>
          <p class="text-3xl font-bold text-blue-400">23</p>
          <div class="mt-2 h-1 w-full bg-gray-700 rounded-full overflow-hidden">
            <div class="h-full bg-blue-500 rounded-full w-2/3"></div>
          </div>
          <p class="text-xs text-gray-500 mt-1">5 new projects this month</p>
        </div>
      </div>

      <!-- Clients Card -->
      <div class="relative bg-gray-800 bg-opacity-40 backdrop-filter backdrop-blur-lg p-4 rounded-lg shadow-lg border border-gray-700 overflow-hidden group hover:bg-opacity-60 transition duration-300">
        <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full bg-blue-500 bg-opacity-20 flex items-center justify-center opacity-70 group-hover:opacity-100 transition-opacity">
          <svg class="h-10 w-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <div class="flex flex-col z-10 relative">
          <p class="text-gray-400 text-sm font-medium mb-1">Active Clients</p>
          <p class="text-3xl font-bold text-blue-400">48</p>
          <div class="mt-2 flex">
            <div class="h-4 w-4 rounded-full bg-blue-500 -ml-1 border border-gray-800"></div>
            <div class="h-4 w-4 rounded-full bg-blue-400 -ml-1 border border-gray-800"></div>
            <div class="h-4 w-4 rounded-full bg-blue-300 -ml-1 border border-gray-800"></div>
            <div class="h-4 w-4 rounded-full bg-blue-400 -ml-1 border border-gray-800 flex items-center justify-center text-xs">+44</div>
          </div>
          <p class="text-xs text-gray-500 mt-1">15 enterprise clients</p>
        </div>
      </div>

      <!-- Services Card -->
      <div class="relative bg-gray-800 bg-opacity-40 backdrop-filter backdrop-blur-lg p-4 rounded-lg shadow-lg border border-gray-700 overflow-hidden group hover:bg-opacity-60 transition duration-300">
        <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full bg-blue-500 bg-opacity-20 flex items-center justify-center opacity-70 group-hover:opacity-100 transition-opacity">
          <svg class="h-10 w-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <div class="flex flex-col z-10 relative">
          <p class="text-gray-400 text-sm font-medium mb-1">Services Offered</p>
          <p class="text-3xl font-bold text-blue-400">12</p>
          <div class="mt-2 grid grid-cols-3 gap-2">
            <div class="h-2 bg-blue-500 rounded"></div>
            <div class="h-2 bg-blue-400 rounded"></div>
            <div class="h-2 bg-blue-300 rounded"></div>
          </div>
          <p class="text-xs text-gray-500 mt-1">4 new services this quarter</p>
        </div>
      </div>

      <!-- Team Card -->
      <div class="relative bg-gray-800 bg-opacity-40 backdrop-filter backdrop-blur-lg p-4 rounded-lg shadow-lg border border-gray-700 overflow-hidden group hover:bg-opacity-60 transition duration-300">
        <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full bg-blue-500 bg-opacity-20 flex items-center justify-center opacity-70 group-hover:opacity-100 transition-opacity">
          <svg class="h-10 w-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <div class="flex flex-col z-10 relative">
          <p class="text-gray-400 text-sm font-medium mb-1">Team Members</p>
          <p class="text-3xl font-bold text-blue-400">85</p>
          <div class="mt-2 flex space-x-1">
            <div class="w-1 h-3 bg-blue-500 rounded-full"></div>
            <div class="w-1 h-4 bg-blue-400 rounded-full"></div>
            <div class="w-1 h-5 bg-blue-300 rounded-full"></div>
            <div class="w-1 h-4 bg-blue-400 rounded-full"></div>
          </div>
          <p class="text-xs text-gray-500 mt-1">12 teams across 6 countries</p>
        </div>
      </div>

      <!-- Revenue Card -->
      <div class="relative bg-gray-800 bg-opacity-40 backdrop-filter backdrop-blur-lg p-4 rounded-lg shadow-lg border border-gray-700 overflow-hidden group hover:bg-opacity-60 transition duration-300">
        <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full bg-blue-500 bg-opacity-20 flex items-center justify-center opacity-70 group-hover:opacity-100 transition-opacity">
          <svg class="h-10 w-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div class="flex flex-col z-10 relative">
          <p class="text-gray-400 text-sm font-medium mb-1">Q2 Revenue</p>
          <p class="text-3xl font-bold text-blue-400">$2.8M</p>
          <div class="mt-2 flex justify-between items-center">
            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
            <div class="w-full h-0.5 bg-gray-700"></div>
            <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
            <div class="w-full h-0.5 bg-gray-700"></div>
            <div class="w-2 h-2 bg-blue-300 rounded-full"></div>
          </div>
          <p class="text-xs text-gray-500 mt-1">18% growth from Q1</p>
        </div>
      </div>

      <!-- Support Card -->
      <div class="relative bg-gray-800 bg-opacity-40 backdrop-filter backdrop-blur-lg p-4 rounded-lg shadow-lg border border-gray-700 overflow-hidden group hover:bg-opacity-60 transition duration-300">
        <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full bg-blue-500 bg-opacity-20 flex items-center justify-center opacity-70 group-hover:opacity-100 transition-opacity">
          <svg class="h-10 w-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
          </svg>
        </div>
        <div class="flex flex-col z-10 relative">
          <p class="text-gray-400 text-sm font-medium mb-1">Active Tickets</p>
          <p class="text-3xl font-bold text-blue-400">127</p>
          <div class="mt-2 relative h-4 w-full bg-gray-700 rounded-full overflow-hidden">
            <div class="absolute h-full bg-blue-500 rounded-full w-4/5"></div>
          </div>
          <p class="text-xs text-gray-500 mt-1">89% SLA compliance</p>
        </div>
      </div>
    </div>

    <!-- Content Sections -->
    <div x-show="activeTab === 'dashboard'">
      <!-- System Status -->
      <div class="bg-gray-800 bg-opacity-60 backdrop-filter backdrop-blur-lg p-4 shadow-md rounded flex flex-col md:flex-row items-center gap-4 mb-6 border border-gray-700">
        <div class="flex items-center gap-4 w-full md:w-auto">
          <div class="p-3 bg-blue-500 text-white rounded-full flex-shrink-0 shadow-md">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
            </svg>
          </div>
          <div>
            <p class="text-lg font-medium text-gray-300">System Status:</p>
            <p class="text-blue-400" x-text="'All Systems Operational - ' + activeProject"></p>
          </div>
        </div>

        <!-- Project Progress -->
        <div class="hidden md:block flex-1 w-full">
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full w-2/3 relative">
              <div class="absolute -right-1 -top-1 w-4 h-4 bg-white rounded-full border-2 border-blue-500 shadow-md"></div>
            </div>
          </div>
          <div class="flex justify-between text-xs text-gray-400 mt-1">
            <span>Q2 Progress</span>
            <span>65% Complete</span>
          </div>
        </div>

        <!-- Performance Metrics -->
        <div class="hidden md:flex items-center gap-2">
          <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
          </svg>
          <span class="text-gray-400">API Response: 128ms</span>
        </div>
      </div>

    <!-- Main Content Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <!-- Active Projects -->
    <div class="bg-gray-800 bg-opacity-60 backdrop-filter backdrop-blur-lg shadow-md rounded p-4 border border-gray-700">
        <h2 class="text-lg font-semibold mb-3 text-gray-300 flex items-center">
            <svg class="h-5 w-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h2m4 0h2a2 2 0 002-2V7a2 2 0 00-2-2h-2m0 0V5m0 0-3 3m3-3l3 3m-3-3l-3 3">
                </path>
            </svg>
            Active Projects
        </h2>

        <!-- Project List (Side by Side on Desktop) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Project 1 -->
            <div class="bg-gray-900 p-3 rounded-lg border border-gray-700">
                <h3 class="text-md font-semibold text-blue-300">Web Dashboard Redesign</h3>
                <p class="text-gray-400 text-sm">Revamping the UI/UX for better user experience.</p>
                <div class="w-full bg-gray-700 rounded-full h-2.5 mt-2">
                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 70%;"></div>
                </div>
                <p class="text-gray-400 text-xs mt-1">70% Complete</p>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-900 p-3 rounded-lg border border-gray-700">
                <h3 class="text-md font-semibold text-blue-300">Mobile App Development</h3>
                <p class="text-gray-400 text-sm">Building a cross-platform app with Vue.js.</p>
                <div class="w-full bg-gray-700 rounded-full h-2.5 mt-2">
                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 50%;"></div>
                </div>
                <p class="text-gray-400 text-xs mt-1">50% Complete</p>
            </div>

            <!-- Project 3 -->
            <div class="bg-gray-900 p-3 rounded-lg border border-gray-700">
                <h3 class="text-md font-semibold text-blue-300">E-commerce API</h3>
                <p class="text-gray-400 text-sm">Developing a RESTful API using Laravel.</p>
                <div class="w-full bg-gray-700 rounded-full h-2.5 mt-2">
                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 30%;"></div>
                </div>
                <p class="text-gray-400 text-xs mt-1">30% Complete</p>
            </div>

            <!-- Project 4 -->
            <div class="bg-gray-900 p-3 rounded-lg border border-gray-700">
                <h3 class="text-md font-semibold text-blue-300">AI Chatbot</h3>
                <p class="text-gray-400 text-sm">Implementing an AI chatbot for customer support.</p>
                <div class="w-full bg-gray-700 rounded-full h-2.5 mt-2">
                    <div class="bg-red-500 h-2.5 rounded-full" style="width: 40%;"></div>
                </div>
                <p class="text-gray-400 text-xs mt-1">40% Complete</p>
            </div>
        </div>
    </div>
</div>




</x-app-layout>

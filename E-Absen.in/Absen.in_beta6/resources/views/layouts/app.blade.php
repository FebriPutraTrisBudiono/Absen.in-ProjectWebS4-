<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>E-Absen.in</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/admin-layout.css') }}" />
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
  <link rel="icon" href="{{ asset('css/e-absenin copy.png') }}" type="image/x-icon" />

</head>

<body onload="realtimeClock()">
  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
      <!-- Loading screen -->
      <div x-ref="loading" class="loading-dots fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
        Loading.....
      </div>

      <!-- Sidebar -->
      <aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
        @livewire('sidebar')
      </aside>

      <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
        <!-- Navbar -->
        <header class="relative bg-white dark:bg-darker">
          <div class="flex items-center justify-between p-2 border-b dark:border-primary-darker">
            <!-- Mobile menu button Left -->
            <button @click="isMobileMainMenuOpen = !isMobileMainMenuOpen" class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring">
              <span class="sr-only">Open main manu</span>
              <span aria-hidden="true">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </span>
            </button>

            <!-- Brand -->
            <a href="" class="inline-block text-2xl font-bold tracking-wider text-primary-dark dark:text-light">
              E-Absen.in
            </a>

            <!-- Mobile sub menu button Right -->
            <button @click="isMobileSubMenuOpen = !isMobileSubMenuOpen" class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring">
              <span class="sr-only">Open sub manu</span>
              <span aria-hidden="true">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
              </span>
            </button>

            <!-- Desktop Right buttons -->
            @livewire('header')
          </div>

          <!-- Mobile main manu -->
          <div class="border-b md:hidden dark:border-primary-darker" x-show="isMobileMainMenuOpen" @click.away="isMobileMainMenuOpen = false">
            <nav aria-label="Main" class="px-2 py-4 space-y-2">
              <!-- Dashboards links -->
              @livewire('sidebar-mobile')
            </nav>
          </div>
        </header>

        <!-- Main content -->
        <main>

          <!-- Content header -->
          @if (isset($header))
          <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
            <!-- Page Heading -->
            {{ $header }}
          </div>
          @endif

          <!-- Content -->
          <div class="mt-2">
            {{ $slot }}
          </div>
        </main>

        <!-- Main footer -->
        <footer class="flex items-center justify-between p-4 bg-white border-t dark:bg-darker dark:border-primary-darker">
          <div>TIF-Polije &copy; 2021</div>
          <div>
            Made by
            <a href="" target="_blank" class="text-blue-500 hover:underline">FebriPT</a>
          </div>
        </footer>
      </div>

      <!-- Panels -->

      <!-- Settings Panel -->
      <!-- Backdrop -->
      <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSettingsPanelOpen" @click="isSettingsPanelOpen = false" class="fixed inset-0 z-10 bg-primary-darker" style="opacity: 0.5" aria-hidden="true"></div>
      <!-- Panel -->
      <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-ref="settingsPanel" tabindex="-1" x-show="isSettingsPanelOpen" @keydown.escape="isSettingsPanelOpen = false" class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none" aria-labelledby="settinsPanelLabel">
        <div class="absolute left-0 p-2 transform -translate-x-full">
          <!-- Close button -->
          <button @click="isSettingsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <!-- Panel content -->
        <div class="flex flex-col h-screen">
          <!-- Panel header -->
          <div class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-primary-dark">
            <span aria-hidden="true" class="text-gray-500 dark:text-primary">
              <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </span>
            <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-light">Settings</h2>
          </div>
          <!-- Content -->
          <div class="flex-1 overflow-hidden hover:overflow-y-auto">
            <!-- Theme -->
            <div class="p-4 space-y-4 md:p-8">
              <h6 class="text-lg font-medium text-gray-400 dark:text-light">Mode</h6>
              <div class="flex items-center space-x-8">
                <!-- Light button -->
                <button @click="setLightTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark" :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': !isDark, 'text-gray-500 dark:text-primary-light': isDark }">
                  <span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                  </span>
                  <span>Light</span>
                </button>

                <!-- Dark button -->
                <button @click="setDarkTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark" :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': isDark, 'text-gray-500 dark:text-primary-light': !isDark }">
                  <span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                  </span>
                  <span>Dark</span>
                </button>
              </div>
            </div>

            <!-- Colors -->
            <div class="p-4 space-y-4 md:p-8">
              <h6 class="text-lg font-medium text-gray-400 dark:text-light">Colors</h6>
              <div>
                <button @click="setColors('cyan')" class="w-10 h-10 rounded-full" style="background-color: var(--color-cyan)"></button>
                <button @click="setColors('teal')" class="w-10 h-10 rounded-full" style="background-color: var(--color-teal)"></button>
                <button @click="setColors('green')" class="w-10 h-10 rounded-full" style="background-color: var(--color-green)"></button>
                <button @click="setColors('fuchsia')" class="w-10 h-10 rounded-full" style="background-color: var(--color-fuchsia)"></button>
                <button @click="setColors('blue')" class="w-10 h-10 rounded-full" style="background-color: var(--color-blue)"></button>
                <button @click="setColors('violet')" class="w-10 h-10 rounded-full" style="background-color: var(--color-violet)"></button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="{{ asset('js/jam.js')}}"></script>
  <script src="{{ asset('js/absen.js')}}"></script>
  <!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
  <!-- <script src="build/js/script.js"></script> -->
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }

        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      const getColor = () => {
        if (window.localStorage.getItem('color')) {
          return window.localStorage.getItem('color')
        }
        return 'cyan'
      }

      const setColors = (color) => {
        const root = document.documentElement
        root.style.setProperty('--color-primary', `var(--color-${color})`)
        root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
        root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
        root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
        root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
        root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
        root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
        this.selectedColor = color
        window.localStorage.setItem('color', color)
        //
      }

      const updateBarChart = (on) => {
        const data = {
          data: randomData(),
          backgroundColor: 'rgb(207, 250, 254)',
        }
        if (on) {
          barChart.data.datasets.push(data)
          barChart.update()
        } else {
          barChart.data.datasets.splice(1)
          barChart.update()
        }
      }

      const updateDoughnutChart = (on) => {
        const data = random()
        const color = 'rgb(207, 250, 254)'
        if (on) {
          doughnutChart.data.labels.unshift('Seb')
          doughnutChart.data.datasets[0].data.unshift(data)
          doughnutChart.data.datasets[0].backgroundColor.unshift(color)
          doughnutChart.update()
        } else {
          doughnutChart.data.labels.splice(0, 1)
          doughnutChart.data.datasets[0].data.splice(0, 1)
          doughnutChart.data.datasets[0].backgroundColor.splice(0, 1)
          doughnutChart.update()
        }
      }

      const updateLineChart = () => {
        lineChart.data.datasets[0].data.reverse()
        lineChart.update()
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
        setLightTheme() {
          this.isDark = false
          setTheme(this.isDark)
        },
        setDarkTheme() {
          this.isDark = true
          setTheme(this.isDark)
        },
        color: getColor(),
        selectedColor: 'cyan',
        setColors,
        toggleSidbarMenu() {
          this.isSidebarOpen = !this.isSidebarOpen
        },
        isSettingsPanelOpen: false,
        openSettingsPanel() {
          this.isSettingsPanelOpen = true
          this.$nextTick(() => {
            this.$refs.settingsPanel.focus()
          })
        },
        isNotificationsPanelOpen: false,
        openNotificationsPanel() {
          this.isNotificationsPanelOpen = true
          this.$nextTick(() => {
            this.$refs.notificationsPanel.focus()
          })
        },
        isSearchPanelOpen: false,
        openSearchPanel() {
          this.isSearchPanelOpen = true
          this.$nextTick(() => {
            this.$refs.searchInput.focus()
          })
        },
        isMobileSubMenuOpen: false,
        openMobileSubMenu() {
          this.isMobileSubMenuOpen = true
          this.$nextTick(() => {
            this.$refs.mobileSubMenu.focus()
          })
        },
        isMobileMainMenuOpen: false,
        openMobileMainMenu() {
          this.isMobileMainMenuOpen = true
          this.$nextTick(() => {
            this.$refs.mobileMainMenu.focus()
          })
        },
        updateBarChart,
        updateDoughnutChart,
        updateLineChart,
      }
    }
  </script>

  @livewireScripts
</body>

</html>
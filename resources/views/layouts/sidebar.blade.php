<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<div class="min-h-screen flex flex-row bg-gray-100">
  <div class="flex flex-col w-56 bg-white overflow-hidden">
    
    <ul class="flex flex-col py-4">
      <li>
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
          <span class="text-sm font-medium">Dashboard</span>
        </x-nav-link>
      </li>
      <li>
        <x-nav-link :href="route('barang.index')" :active="request()->routeIs('barang.index')||request()->routeIs('barang.create')||request()->routeIs('barang.edit')" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
          <svg viewBox="0 0 512 512" class="w-5 h-5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>item-details-filled</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="icon" fill="#000000" transform="translate(42.666667, 85.333333)"> <path d="M426.666667,1.42108547e-14 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L426.666667,1.42108547e-14 Z M362.666667,213.333333 L234.666667,213.333333 L234.666667,245.333333 L362.666667,245.333333 L362.666667,213.333333 Z M362.666667,149.333333 L234.666667,149.333333 L234.666667,181.333333 L362.666667,181.333333 L362.666667,149.333333 Z M192,85.3333333 L64,85.3333333 L64,181.333333 L192,181.333333 L192,85.3333333 Z M362.666667,85.3333333 L234.666667,85.3333333 L234.666667,117.333333 L362.666667,117.333333 L362.666667,85.3333333 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>
          </span>
          <span class="text-sm font-semibold">Barang</span>
        </x-nav-link>
      </li>
      <hr>
      <li>
        <x-nav-link :href="route('modalAwal.index')" :active="request()->routeIs('modalAwal.index')" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
          <svg viewBox="0 0 24 24" fill="none"  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 6.34267C17.35 4.30367 14.8273 3 12 3C7.02944 3 3 7.02944 3 12C3 13.8501 3.55827 15.5699 4.51555 17M21 12C21 16.9706 16.9706 21 12 21C10.961 21 9.96308 20.8239 9.03452 20.5M12 16H13C13.6667 16 15 15.6 15 14C15 12.4 13.6667 12 13 12H11C10.3333 12 9 11.6 9 10C9 8.4 10.3333 8 11 8H12M12 16H9M12 16V18M15 8H12M12 8V6" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
          </span>
          <span class="text-sm font-semibold">Modal Awal Harian</span>
        </x-nav-link>
      </li>
      <hr>
      <li>
        <x-nav-link :active="request()->routeIs('datapemasukan.index') || request()->routeIs('datapengeluaran.index')||request()->routeIs('datapemasukan.edit')||request()->routeIs('datapemasukan.create')||request()->routeIs('datapengeluaran.edit')||request()->routeIs('datapengeluaran.create')" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M260.847,51.057C210.844,88.23,92.606,195.549,3.954,195.549c-5.836,0-3.486,4.232-3.486,4.232l77.458,32.376 l-47.118,46.646v77.175l251.153,104.964L512,233.189v-77.168L260.847,51.057z M68.485,204.425 c26.6-9.94,53.389-24.653,79.054-41.188c6.421-4.135,12.738-8.416,18.994-12.73c1.375-0.951,2.741-1.886,4.103-2.846 c6.063-4.232,12.036-8.506,17.889-12.802c0.681-0.499,1.335-0.991,2.016-1.491c5.68-4.192,11.234-8.377,16.676-12.528 c0.734-0.565,1.467-1.113,2.193-1.677c6.01-4.612,11.843-9.142,17.502-13.592l204.576,85.503 c-53.933,41.067-123.229,87.479-176.38,87.479c-3.797,0-7.498-0.25-11.012-0.75l-127.332-53.208l-21.933-9.158L68.485,204.425z M99.885,241.315L238.04,299.07c5.55,0.976,11.23,1.443,17.067,1.443c55.598,0,122.83-42.211,177.573-82.842L275.596,373.182 L58.384,282.415L99.885,241.315z M490.04,224.031L276.906,435.033l-224.138-93.67v-18.252l225.561,94.258L490.04,207.771V224.031z M490.04,194.783L276.209,406.486l-223.44-93.372v-19.445l225.71,94.323L490.04,178.546V194.783z"></path> <path class="st0" d="M209.417,233.947c0.802,0.395,1.878,0.274,2.689-0.314l20.4-9.158c2.326-1.04,4.539-2.33,6.602-3.813 l65.672-47.532c0.806-0.589,0.81-1.242,0.008-1.644l-14.983-7.433c-0.939-0.468-2.012-0.678-3.217-0.612l-26.29,0.418 c-1.201,0.057-2.007,0.314-2.818,0.903l-16.7,12.085c-1.076,0.782-0.677,1.298,0.661,1.314l24.415-0.04l0.262,0.129l-46.065,33.344 l-26.68,12.746c-0.81,0.58-0.81,1.241-0.008,1.636L209.417,233.947z"></path> </g> </g></svg>
          </span>
          <span class="text-sm font-semibold">Data Harian</span>
        </x-nav-link>
      </li>
      
      <li>
        <x-nav-link :href="route('datapemasukan.index')" :active="request()->routeIs('datapemasukan.index')||request()->routeIs('datapemasukan.edit')||request()->routeIs('datapemasukan.create')" class="pl-3 flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
          <svg viewBox="0 0 1024 1024" class="w-5 h-5" fill="none" stroke="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M683.505911 480.221671c-123.691491 0-224.309725 100.628474-224.309725 224.309725S559.814421 928.841122 683.505911 928.841122s224.309725-100.628474 224.309726-224.309726-100.618235-224.309725-224.309726-224.309725z m0 405.892716c-100.117555 0-181.584015-81.456221-181.584014-181.584014s81.46646-181.584015 181.584014-181.584015 181.584015 81.456221 181.584015 181.584015S783.622442 886.114387 683.505911 886.114387z" fill="#000000"></path><path d="M160.117235 843.388676V159.779353c0-11.776729 9.586638-21.362343 21.362343-21.362344h555.433216c11.776729 0 21.362343 9.586638 21.362343 21.362344v256.35324h42.725711V159.779353c0-35.340426-28.747628-64.088054-64.088054-64.088054H181.479578c-35.340426 0-64.088054 28.747628-64.088054 64.088054v683.609323c0 35.340426 28.747628 64.088054 64.088054 64.088055h256.353241v-42.725711H181.479578c-11.776729 0.001024-21.362343-9.585614-21.362343-21.362344z" fill="#000000"></path><path d="M224.205289 266.593118h491.344137v42.72571H224.205289zM224.205289 480.221671h234.990897v42.725711H224.205289zM224.205289 693.849201h149.539476v42.725711H224.205289zM768.956309 666.478698h-49.23455l42.975539-42.975538c8.344665-8.344665 8.344665-21.863023 0-30.208713s-21.863023-8.344665-30.208713 0l-48.984721 48.983698-48.983698-48.983698c-8.344665-8.344665-21.863023-8.344665-30.208713 0-8.344665 8.344665-8.344665 21.863023 0 30.208713l42.975539 42.975538H598.05449c-11.807446 0-21.362343 9.565137-21.362344 21.362344s9.554898 21.362343 21.362344 21.362343h64.088054v27.371527h-32.044539c-11.808469 0-21.363367 9.565137-21.363367 21.362343s9.554898 21.362343 21.363367 21.362343h32.044539v21.362344c0 11.797207 9.554898 21.362343 21.362343 21.362343 11.808469 0 21.362343-9.565137 21.362344-21.362343v-21.362344h32.044539c11.807446 0 21.362343-9.565137 21.362343-21.362343s-9.554898-21.362343-21.362343-21.362343h-32.044539v-27.371527h64.088054c11.808469 0 21.362343-9.565137 21.362343-21.362343 0.002048-11.797207-9.55285-21.362343-21.361319-21.362344z" fill="#000000"></path></g></svg>
          </span>
          <span class="text-sm font-medium">Data Pemasukan</span>
        </x-nav-link>
      </li>
      <li>
        <x-nav-link :href="route('datapengeluaran.index')" :active="request()->routeIs('datapengeluaran.index')||request()->routeIs('datapengeluaran.edit')||request()->routeIs('datapengeluaran.create')" class="pl-3 flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 9.99611V12L22 9L19 6V7.99376C18.309 7.94885 17.9594 7.6644 17.4402 7.23176L17.4283 7.22188C16.7967 6.6955 15.9622 6 14.4 6C12.8378 6 12.0033 6.69551 11.3717 7.22188L11.3598 7.23178C10.7928 7.70427 10.428 8 9.6 8C8.772 8 8.40717 7.70427 7.84018 7.23178L7.82831 7.22188C7.59036 7.02357 7.32361 6.80126 7 6.60118V9.12312C7.58472 9.56529 8.36495 10 9.6 10C11.1622 10 11.9967 9.30449 12.6283 8.77812L12.6402 8.76822C13.2072 8.29573 13.572 8 14.4 8C15.228 8 15.5928 8.29573 16.1598 8.76821L16.1717 8.77811C16.7758 9.28156 17.5655 9.93973 19 9.99611Z"></path> <path d="M7 17.1231C7.58472 17.5653 8.36495 18 9.6 18C11.1622 18 11.9967 17.3045 12.6283 16.7781L12.6402 16.7682C13.2072 16.2957 13.572 16 14.4 16C15.228 16 15.5928 16.2957 16.1598 16.7682L16.1717 16.7781C16.7758 17.2816 17.5655 17.9397 19 17.9961V20L22 17L19 14V15.9938C18.309 15.9488 17.9594 15.6644 17.4402 15.2318L17.4283 15.2219C16.7967 14.6955 15.9622 14 14.4 14C12.8378 14 12.0033 14.6955 11.3717 15.2219L11.3598 15.2318C10.7928 15.7043 10.428 16 9.6 16C8.772 16 8.40717 15.7043 7.84018 15.2318L7.82831 15.2219C7.59036 15.0236 7.32361 14.8013 7 14.6012V17.1231Z"></path> <path d="M5 4H15V8.03662C15.8985 8.15022 16.5162 8.51098 17 8.87686V4C17 2.89543 16.1046 2 15 2H5C3.89543 2 3 2.89543 3 4V20C3 21.1046 3.89543 22 5 22H15C16.1046 22 17 21.1046 17 20V19.3988C16.6764 19.1987 16.4096 18.9764 16.1717 18.7781L16.1598 18.7682C15.7512 18.4277 15.4476 18.179 15 18.0666V20H5L5 4Z"></path> <path d="M15 16.0366C15.8985 16.1502 16.5162 16.511 17 16.8769V11.3988C16.6764 11.1987 16.4096 10.9764 16.1717 10.7781L16.1598 10.7682C15.7512 10.4277 15.4476 10.179 15 10.0666V16.0366Z"></path> </g></svg>
          </i></span>
          <span class="text-sm font-medium">Data Pengeluaran</span>
        </x-nav-link>
      </li>
      <hr>
      <li>
        <x-nav-link :active="request()->routeIs('laporanmasuk.index') || request()->routeIs('laporankeluar.index')" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M260.847,51.057C210.844,88.23,92.606,195.549,3.954,195.549c-5.836,0-3.486,4.232-3.486,4.232l77.458,32.376 l-47.118,46.646v77.175l251.153,104.964L512,233.189v-77.168L260.847,51.057z M68.485,204.425 c26.6-9.94,53.389-24.653,79.054-41.188c6.421-4.135,12.738-8.416,18.994-12.73c1.375-0.951,2.741-1.886,4.103-2.846 c6.063-4.232,12.036-8.506,17.889-12.802c0.681-0.499,1.335-0.991,2.016-1.491c5.68-4.192,11.234-8.377,16.676-12.528 c0.734-0.565,1.467-1.113,2.193-1.677c6.01-4.612,11.843-9.142,17.502-13.592l204.576,85.503 c-53.933,41.067-123.229,87.479-176.38,87.479c-3.797,0-7.498-0.25-11.012-0.75l-127.332-53.208l-21.933-9.158L68.485,204.425z M99.885,241.315L238.04,299.07c5.55,0.976,11.23,1.443,17.067,1.443c55.598,0,122.83-42.211,177.573-82.842L275.596,373.182 L58.384,282.415L99.885,241.315z M490.04,224.031L276.906,435.033l-224.138-93.67v-18.252l225.561,94.258L490.04,207.771V224.031z M490.04,194.783L276.209,406.486l-223.44-93.372v-19.445l225.71,94.323L490.04,178.546V194.783z"></path> <path class="st0" d="M209.417,233.947c0.802,0.395,1.878,0.274,2.689-0.314l20.4-9.158c2.326-1.04,4.539-2.33,6.602-3.813 l65.672-47.532c0.806-0.589,0.81-1.242,0.008-1.644l-14.983-7.433c-0.939-0.468-2.012-0.678-3.217-0.612l-26.29,0.418 c-1.201,0.057-2.007,0.314-2.818,0.903l-16.7,12.085c-1.076,0.782-0.677,1.298,0.661,1.314l24.415-0.04l0.262,0.129l-46.065,33.344 l-26.68,12.746c-0.81,0.58-0.81,1.241-0.008,1.636L209.417,233.947z"></path> </g> </g></svg>
          </span>
          <span class="text-sm font-semibold">Laporan</span>
        </x-nav-link>
      </li>
      
      <li>
        <x-nav-link :href="route('laporanmasuk.index')" :active="request()->routeIs('laporanmasuk.index')" class="pl-3 flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
            <svg  class="w-5 h-5" stroke="currentColor" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M465.6,426.667H347.621l39.121-46.183c3.075-3.575,2.658-9.225-0.925-12.292c-3.567-3.067-8.958-2.8-12.025,0.792 l-51.2,59.667c-2.742,3.192-2.742,7.875,0,11.067l51.2,59.717c1.683,1.975,4.075,2.975,6.475,2.975 c1.967,0,3.942-0.679,5.55-2.063c3.583-3.067,4-7.919,0.925-11.494l-39.121-45.119H465.6c4.717,0,8.533-3.817,8.533-8.533 S470.317,426.667,465.6,426.667z"></path> </g> </g> <g> <g> <path d="M405.825,0H64.575C50.433,0,37.867,10.4,37.867,24.5v460.867c0,14.1,12.542,26.633,26.65,26.633h257.158 c4.717,0,8.533-3.817,8.533-8.533s-3.817-8.533-8.533-8.533H64.517c-4.7,0-9.583-4.883-9.583-9.567V24.5 c0-4.683,4.917-7.433,9.642-7.433h341.25c4.65,0,7.508,2.808,7.508,7.4V323.2c0,4.717,3.817,8.533,8.533,8.533 c4.717,0,8.533-3.817,8.533-8.533V24.467C430.4,10.392,419.967,0,405.825,0z"></path> </g> </g> <g> <g> <path d="M277.867,59.733h-85.333c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h85.333 c4.717,0,8.533-3.817,8.533-8.533C286.4,63.55,282.583,59.733,277.867,59.733z"></path> </g> </g> <g> <g> <path d="M354.667,119.467H115.733c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h238.933 c4.717,0,8.533-3.817,8.533-8.533C363.2,123.283,359.383,119.467,354.667,119.467z"></path> </g> </g> <g> <g> <path d="M354.667,179.2H115.733c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h238.933 c4.717,0,8.533-3.817,8.533-8.533C363.2,183.017,359.383,179.2,354.667,179.2z"></path> </g> </g> <g> <g> <path d="M354.667,238.933H115.733c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h238.933 c4.717,0,8.533-3.817,8.533-8.533C363.2,242.75,359.383,238.933,354.667,238.933z"></path> </g> </g> <g> <g> <path d="M354.667,298.667H115.733c-4.717,0-9.6,2.75-9.6,7.467v128c0,4.717,4.883,9.6,9.6,9.6H286.4 c4.717,0,8.533-3.817,8.533-8.533s-3.817-8.533-8.533-8.533H123.2V315.733h221.867V348.8c0,4.717,3.817,8.533,8.533,8.533 c4.717,0,8.533-3.817,8.533-8.533v-42.667C362.133,301.417,359.383,298.667,354.667,298.667z"></path> </g> </g> </g></svg>
          </i></span>
          <span class="text-sm font-medium">Laporan Uang Masuk</span>
        </x-nav-link>
      </li>
      <li>
        <x-nav-link :href="route('laporankeluar.index')" :active="request()->routeIs('laporankeluar.index')" class="pl-3 flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
            <svg fill="#000000" height="200px" width="200px" class="w-5 h-5" stroke="currentColor"version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M455.009,428.583l-51.2-59.733c-3.058-3.592-8.45-3.992-12.025-0.925c-3.583,3.067-4,8.984-0.925,12.559l39.121,46.183 H317.193c-4.717,0-8.533,3.817-8.533,8.533s3.817,8.533,8.533,8.533H429.98l-39.121,45.117c-3.075,3.575-2.658,8.692,0.925,11.758 c1.608,1.383,3.583,1.925,5.55,1.925c2.4,0,4.792-1.075,6.475-3.05l51.2-59.767C457.751,436.525,457.751,431.775,455.009,428.583z "></path> </g> </g> <g> <g> <path d="M422.893,0H81.643C67.501,0,54.934,10.4,54.934,24.5v460.867c0,14.1,12.542,26.633,26.65,26.633h257.158 c4.717,0,8.533-3.817,8.533-8.533s-3.817-8.533-8.533-8.533H81.584c-4.7,0-9.583-4.883-9.583-9.567V24.5 c0-4.683,4.917-7.433,9.642-7.433h341.25c4.65,0,7.508,2.808,7.508,7.4V323.2c0,4.717,3.817,8.533,8.533,8.533 c4.717,0,8.533-3.817,8.533-8.533V24.467C447.468,10.392,437.034,0,422.893,0z"></path> </g> </g> <g> <g> <path d="M294.934,59.733h-85.333c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h85.333 c4.717,0,8.533-3.817,8.533-8.533C303.468,63.55,299.651,59.733,294.934,59.733z"></path> </g> </g> <g> <g> <path d="M371.734,119.467H132.801c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h238.933 c4.717,0,8.533-3.817,8.533-8.533C380.268,123.283,376.451,119.467,371.734,119.467z"></path> </g> </g> <g> <g> <path d="M371.734,179.2H132.801c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h238.933 c4.717,0,8.533-3.817,8.533-8.533C380.268,183.017,376.451,179.2,371.734,179.2z"></path> </g> </g> <g> <g> <path d="M371.734,238.933H132.801c-4.717,0-8.533,3.817-8.533,8.533c0,4.717,3.817,8.533,8.533,8.533h238.933 c4.717,0,8.533-3.817,8.533-8.533C380.268,242.75,376.451,238.933,371.734,238.933z"></path> </g> </g> <g> <g> <path d="M371.734,298.667H132.801c-4.717,0-9.6,2.75-9.6,7.467v128c0,4.717,4.883,9.6,9.6,9.6h145.067 c4.717,0,8.533-3.817,8.533-8.533s-3.817-8.533-8.533-8.533h-137.6V315.733h221.867V348.8c0,4.717,3.817,8.533,8.533,8.533 c4.717,0,8.533-3.817,8.533-8.533v-42.667C379.201,301.417,376.451,298.667,371.734,298.667z"></path> </g> </g> </g></svg>
          </i></span>
          <span class="text-sm font-medium">Laporan Uang Keluar</span>
        </x-nav-link>
      </li>
     
      
    </ul>
  </div>
</div>
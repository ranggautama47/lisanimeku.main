<html>
  <head>
    <title>NekoSugoStream</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo e(asset('ui/topup.css')); ?>">
    <link rel="stylesheet" href="ui/qris.css" />
    <link rel="stylesheet" href="ui/banktransfer.css">
    <link rel="stylesheet" href="ui/kartukredit.css">
     <link rel="stylesheet" href="ui/popup.css" />
    <script src="menu_topup.js" defer></script>
    <script src="qrpopup.js" defer></script>
    <script src="banktransfer.js" defer></script>
    <script src="kartukredit.js" defer></script>
    <script src="<?php echo e(asset('popup.js')); ?>" defer></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  </head>
<body class="bg-black text-white">
   <header class="flex items-center justify-between p-4">
      <div class="flex items-center">
    <img src="<?php echo e(asset('asset/neko.png')); ?>" alt="Logo" class="mr-2 h-12"/>
    <span class="text-xl text-blue-600 font-bold">NekoSugoStream</span>
  </div>

  <div class="flex items-center bg-gray-800 rounded-full px-4 py-2 hover:bg-gray-700 transition">
    <img src="<?php echo e(asset('assets/img/berries.png')); ?>" class="h-5 w-5 mr-2"/>
    <span class="font-medium text-amber-400">5,250</span>
    <span class="ml-1 text-sm text-gray-200">Koin</span>
  </div>

  <!-- Profile -->
  <div class="relative group bg-blue-200 rounded-full p-2 hover:bg-blue-300 transition">
    <div class="flex items-center space-x-2 cursor-pointer">
      <img src="<?php echo e(Auth::user()->profile_photo_url ?? 'https://github.com/mdo.png'); ?>"
           alt="<?php echo e(Auth::user()->name); ?>"
           class="h-10 w-10 rounded-full object-cover border-2 border-blue-500">
      <span class="hidden md:inline font-medium text-blue-700"><?php echo e(Auth::user()->name); ?></span>
    </div>
    <!-- dropdown menu -->
    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Profile</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Settings</a>
      <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-blue-100">Logout</button>
      </form>
    </div>
  </div>
</header>
    <div class="p-8">
      <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl">Top Up Koin</h1>
        <div class="flex items-center space-x-2">
          <span>Indonesia</span>
          <i class="fas fa-chevron-right"></i>
        </div>
      </div>
      <!-- Ini awalan menu top up koin -->
      <div class="topup-menu">
        <ul class="payment-list">
          <li class="payment-item" onclick="togglePopup('popupDana')">
            <img src="asset/dana.jpg" class="icon-in-button" />
            <span>Dana</span>
          </li>
          <li class="payment-item" onclick="togglePopup('popupGopay')">
            <img src="asset/gopay.jpeg" class="icon-in-button" />
            <span>GoPay</span>
          </li>
          <li class="payment-item" onclick="togglePopup('popupShopeepay')">
            <img src="asset/shopee.png" class="icon-in-button" />
            <span>Shopeepay</span>
          </li>
          <li class="payment-item" onclick="togglePopup('popupBank')">
            <img src="asset/bank.png" class="icon-in-button" />
            <span>Bank</span>
          </li>
          <li class="payment-item" onclick="togglePopup('popupkartukredit')">
            <img src="asset/kartu_kredit.png" class="icon-in-button" />
            <span>Kartu Kredit</span>
          </li>
        </ul>
      </div>
      <!-- Ini hide jml beli koin -->
      <div
        class="payment-toggle"
        onclick="toggleArrowAndPopup(this, 'popupShopeepay')"
      >
        <span>Pilih nominal top up</span>
        <i class="fas fa-chevron-down arrow-icon"></i>
      </div>
      <div id="popupDana" class="popup-channel-grid">
        <div class="flex items-center space-x-2">
          <img
            src="asset/dana.jpg"
            alt="DANA logo"
            class="rounded-full w-5 h-5"
          />
          <img
            src="asset/qris/logo-dana.png"
            alt="DANA logo"
            class="channel-logo rounded-full w-5 h-5"
          />
          <span class="font-semibold">Dana</span>
        </div>
        <div class="flex items-center mt-2 ml-7 space-x-2">
          <img src="asset/koin_bintang.png" alt="coin" width="25" height="25" />
          <span class="text-gray-400 text-sm">1=182 IDR</span>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="28"
            data-price="6000"
          >
            <i class="fas fa-coins"></i>
            <div>28</div>
            <div>Rp 6000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="169"
            data-price="31000"
          >
            <i class="fas fa-coins"></i>
            <div>169</div>
            <div>Rp 31.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="566"
            data-price="101000"
          >
            <i class="fas fa-coins"></i>
            <div>566</div>
            <div>Rp 101.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="1421"
            data-price="251000"
          >
            <i class="fas fa-coins"></i>
            <div>1421</div>
            <div>Rp 251.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="2852"
            data-price="501000"
          >
            <i class="fas fa-coins"></i>
            <div>2852</div>
            <div>Rp 501.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="5724"
            data-price="1001000"
          >
            <i class="fas fa-coins"></i>
            <div>5724</div>
            <div>Rp 1.001.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="14359"
            data-price="2501000"
          >
            <i class="fas fa-coins"></i>
            <div>14359</div>
            <div>Rp 2.501.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="dana"
            data-qris="dana"
            data-coin="28877"
            data-price="5001000"
          >
            <i class="fas fa-coins"></i>
            <div>28877</div>
            <div>Rp 5.001.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- GOPAY Popup -->
      <div id="popupGopay" class="popup-channel-grid">
        <div class="flex items-center space-x-2">
          <img
            src="asset/gopay.jpeg"
            alt="GOPAY logo"
            class="rounded-full w-5 h-5"
          />
          <img
            src="asset/qris/logo-gopay.png"
            alt="Gopay logo"
            class="channel-logo rounded-full w-5 h-5"
          />
          <span class="font-semibold">Gopay</span>
        </div>
        <div class="flex items-center mt-2 ml-7 space-x-2">
          <img src="asset/koin_bintang.png" alt="coin" width="25" height="25" />
          <span class="text-gray-400 text-sm">1=182 IDR</span>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="28"
            data-price="6000"
          >
            <i class="fas fa-coins"></i>
            <div>28</div>
            <div>6000 IDR</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="169"
            data-price="31000"
          >
            <i class="fas fa-coins"></i>
            <div>169</div>
            <div>Rp 31.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="566"
            data-price="101000"
          >
            <i class="fas fa-coins"></i>
            <div>566</div>
            <div>Rp 101.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="1421"
            data-price="251000"
          >
            <i class="fas fa-coins"></i>
            <div>1421</div>
            <div>Rp 251.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="2852"
            data-price="501000"
          >
            <i class="fas fa-coins"></i>
            <div>2852</div>
            <div>Rp 501.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="5724"
            data-price="1001000"
          >
            <i class="fas fa-coins"></i>
            <div>5724</div>
            <div>Rp 1.001.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="14359"
            data-price="2501000"
          >
            <i class="fas fa-coins"></i>
            <div>14359</div>
            <div>Rp 2.501.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="gopay"
            data-qris="gopay"
            data-coin="28877"
            data-price="5001000"
          >
            <i class="fas fa-coins"></i>
            <div>28877</div>
            <div>Rp 5.001.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SHOPEEPAY Popup -->
      <div id="popupShopeepay" class="popup-channel-grid">
        <div class="flex items-center space-x-2">
          <img
            src="asset/shopee.png"
            alt="ShopeePay logo"
            class="rounded-full w-5 h-5"
          />
          <img
            src="asset/qris/logo-shopeepay.png"
            alt="ShopeePay logo"
            class="channel-logo rounded-full w-5 h-5"
          />
          <span class="font-semibold">ShopeePay</span>
        </div>
        <div class="flex items-center mt-2 ml-7 space-x-2">
          <img src="asset/koin_bintang.png" alt="coin" width="25" height="25" />
          <span class="text-gray-400 text-sm">1=182 IDR</span>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="28"
            data-price="6000"
          >
            <i class="fas fa-coins"></i>
            <div>28</div>
            <div>Rp 6000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="169"
            data-price="31000"
          >
            <i class="fas fa-coins"></i>
            <div>169</div>
            <div>Rp 31.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="566"
            data-price="101000"
          >
            <i class="fas fa-coins"></i>
            <div>566</div>
            <div>Rp 101.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="1421"
            data-price="251000"
          >
            <i class="fas fa-coins"></i>
            <div>1421</div>
            <div>Rp 251.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="2852"
            data-price="501000"
          >
            <i class="fas fa-coins"></i>
            <div>2852</div>
            <div>Rp 501.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="5724"
            data-price="1001000"
          >
            <i class="fas fa-coins"></i>
            <div>5724</div>
            <div>Rp 1.001.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="14359"
            data-price="2501000"
          >
            <i class="fas fa-coins"></i>
            <div>14359</div>
            <div>Rp 2.501.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="Shopeepay"
            data-qris="Shopeepay"
            data-coin="28877"
            data-price="5001000"
          >
            <i class="fas fa-coins"></i>
            <div>28877</div>
            <div>Rp 5.001.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="popupBank" class="popup-channel-grid">
        <div class="flex items-center space-x-2">
          <img
            src="asset/bank.png"
            alt="Bank logo"
            class="rounded-full w-5 h-5"
          />
          <span class="font-semibold">Bank</span>
        </div>
        <div class="flex items-center mt-2 ml-7 space-x-2">
          <img src="asset/koin_bintang.png" alt="coin" width="25" height="25" />
          <span class="text-gray-400 text-sm">1=182 IDR</span>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="28"
            data-price="5000"
          >
            <i class="fas fa-coins"></i>
            <div>28</div>
            <div>Rp 5000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="169"
            data-price="30000"
          >
            <i class="fas fa-coins"></i>
            <div>169</div>
            <div>Rp 30.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="566"
            data-price="100000"
          >
            <i class="fas fa-coins"></i>
            <div>566</div>
            <div>Rp 100.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="1421"
            data-price="250000"
          >
            <i class="fas fa-coins"></i>
            <div>1421</div>
            <div>Rp 250.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="2852"
            data-price="500000"
          >
            <i class="fas fa-coins"></i>
            <div>2852</div>
            <div>Rp 500.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="5724"
            data-price="1000000"
          >
            <i class="fas fa-coins"></i>
            <div>5724</div>
            <div>Rp 1.000.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="14359"
            data-price="2500000"
          >
            <i class="fas fa-coins"></i>
            <div>14359</div>
            <div>Rp 2.500.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="bank"
            data-coin="28877"
            data-price="5000000"
          >
            <i class="fas fa-coins"></i>
            <div>28877</div>
            <div>Rp 5.000.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- KARTU KREDIT Popup -->
      <div id="popupkartukredit" class="popup-channel-grid">
        <div class="flex items-center space-x-2">
          <img
            src="asset/kartu_kredit.png"
            alt="kartu_kredit logo"
            class="rounded-full w-5 h-5"
          />
          <span class="font-semibold">Kartu Kredit</span>
        </div>
        <div class="flex items-center mt-2 ml-7 space-x-2">
          <img src="asset/koin_bintang.png" alt="coin" width="25" height="25" />
          <span class="text-gray-400 text-sm">1=182 IDR</span>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="28"
            data-price="5000"
          >
            <i class="fas fa-coins"></i>
            <div>28</div>
            <div>Rp 5000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="169"
            data-price="30000"
          >
            <i class="fas fa-coins"></i>
            <div>169</div>
            <div>Rp 30.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="566"
            data-price="100000"
          >
            <i class="fas fa-coins"></i>
            <div>566</div>
            <div>Rp 100.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="1421"
            data-price="250000"
          >
            <i class="fas fa-coins"></i>
            <div>1421</div>
            <div>Rp 250.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="2852"
            data-price="500000"
          >
            <i class="fas fa-coins"></i>
            <div>2852</div>
            <div>Rp 500.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="5724"
            data-price="1000000"
          >
            <i class="fas fa-coins"></i>
            <div>5724</div>
            <div>Rp 1.000.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="14359"
            data-price="2500000"
          >
            <i class="fas fa-coins"></i>
            <div>14359</div>
            <div>Rp 2.500.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
          <div
            class="popup-card"
            data-channel="kartukredit"
            data-coin="28877"
            data-price="5000000"
          >
            <i class="fas fa-coins"></i>
            <div>28877</div>
            <div>Rp 5.000.000</div>
            <div class="checkmark-container">
              <div class="checkmark">
                <i class="fas fa-check text-gray-800"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-gray-400 mb-4">
        Klik Top Up berarti Anda setuju dengan
        <a class="text-blue-500" href="persetujuan.html">
          "Perjanjian Top Up NSS"
        </a>
      </div>
      <button
        id="confirmBtn"
        class="bg-yellow-500 text-black px-8 py-4 rounded-full w-full hover:bg-yellow-600"
      >
        Isi Ulang
      </button>
      <!-- Modal Konfirmasi -->
      <div
        id="confirmModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden"
      >
        <div class="bg-white text-black p-6 rounded-lg shadow-lg w-80">
          <p id="confirmText" class="mb-4 text-center">
            Apakah Anda Yakin ingin melanjutkan pembayaran sebesar
            <span id="confirmAmount">0 IDR</span> melalui
            <span id="confirmCoin">0</span>?
          </p>
          <div class="flex justify-between">
            <button
              id="cancelBtn"
              class="px-4 py-2 bg-gray-400 text-white rounded"
            >
              Batal
            </button>
            <button
              id="confirmTopupBtn"
              class="px-4 py-2 bg-yellow-400 text-black font-semibold rounded"
            >
              Yakin
            </button>
          </div>
        </div>
      </div>
      <div
        id="qrPopup"
        class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center"
      >
        <div
          class="bg-white p-6 rounded shadow-md w-11/12 md:w-full max-w-md text-center relative mx-auto"
        >
          <!-- Header dengan Centered Text dan Close Button -->
          <div class="relative">
            <div
              id="qrHeader"
              class="text-white text-lg font-bold py-2 px-4 rounded-t-md bg-blue-600 text-center"
            >
              Terima Kasih
            </div>
            <button
              onclick="closeQrPopup()"
              class="absolute top-1 right-2 text-white hover:text-gray-200 text-2xl font-bold leading-none"
            >
              ✕
            </button>
          </div>
          <p class="text-gray-700 mt-2">
            Anda berhasil melakukan pesanan hari ini:
            <span id="currentDate" class="font-semibold"></span>
          </p>
          <p
            id="countdownTimer"
            class="text-sm text-red-600 font-medium mt-1"
          ></p>
          <!-- Logo QRIS besar dan dinamis -->
          <div class="qr-logos flex items-center justify-center space-x-4 mb-4">
            <img src="asset/qris.png" alt="QRIS" class="qr-img" />
            <img id="paymentLogo" src="" alt="Payment Logo" class="qr-img" />
          </div>
          <!-- QR Code -->
          <img
            id="qrImage"
            src="<?php echo e(asset('asset/qris_gpn.png')); ?>"
            alt="QR Code"
            class="mx-auto border border-gray-300 rounded-md mb-4"
            />
          <!-- Text detail -->
          <p id="orderId" class="text-green-600 font-semibold mt-2"></p>
          <p id="qrAmount" class="text-xl font-bold text-gray-800 mb-2"></p>
          <p
            id="scanInstruction"
            class="text-gray-700 text-sm mb-4 leading-6"
          ></p>
          <div id="timeLimit" class="text-gray-800 text-sm mb-2"></div>
        </div>
        </div>
    </div>
       <div id="bankTransferPopup" class="hidden">
        <div class="relative bg-white p-6 rounded-lg shadow-xl w-full max-w-md max-h-[90vh] overflow-y-auto mx-4 no-scrollbar">
            <button onclick="closeBankTransferPopup()" class="close-btn absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-xl">✕</button>
            <h2 class="text-xl font-bold text-center mb-4">Transfer Manual</h2>
            <p class="text-center mb-6">Harap transfer sebelum <span id="transferDeadline" class="font-bold">14:59</span></p>
            <div id="orderInfo"></div>
           <div id="timeLimitBank" class="text-center text-sm text-gray-800 mb-4">
            <span style="color:red;font-weight:bold;">Batas Waktu Pembayaran:</span><br>
            <span id="countdownBank" class="text-red-600 font-semibold"></span>
          </div>

            <div class="border-t border-b py-4 my-4">
              <!-- Nomor rekening -->
              <div class="bank-details flex items-center gap-4 mb-4">
                <img src="asset/logo_bca.png" alt="Logo BCA" class="w-16 h-16 object-contain" />
                <div>
                  <h3 class="font-semibold text-lg">BCA</h3>
                  <p>Bank Central Asia</p>
                  <p>PT. MovieTekt Indonesia</p>
                  <div class="flex items-center gap-2">
                    <p class="account-number font-mono text-xl my-2" id="accountNumber">1234567890</p>
                    <button onclick="copyWithToast('accountNumber')" class="p-1 rounded bg-gray-200 hover:bg-gray-300 transition">
                      <i class="fas fa-copy text-gray-700 text-lg hover:text-blue-600"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- Jumlah transfer -->
              <div class="nominal-section my-4">
                <p class="text-gray-600">Jumlah Transfer</p>
                <div class="flex items-center gap-2">
                  <p id="bankAmount" class="text-2xl font-bold">Rp 0</p>
                  <button onclick="copyWithToast('bankAmount')" class="p-1 rounded bg-gray-200 hover:bg-gray-300 transition">
                    <i class="fas fa-copy text-gray-700 text-lg hover:text-blue-600"></i>
                  </button>
                </div>
              </div>
              <!-- Upload -->
              <div class="upload-section">
                <p class="text-gray-600 mb-2">Upload Bukti Transfer</p>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                  <p>Klik untuk upload</p>
                  <p class="text-xs text-gray-500 mt-1">Maks: 3MB | Format: jpg/jpeg/png</p>
                  <input type="file" id="paymentProof" accept=".jpg,.jpeg,.png" class="hidden">
                  <button onclick="document.getElementById('paymentProof').click()" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-all">
                    Pilih File
                  </button>
                </div>
              </div>
            </div>
            <!-- Tombol transfer -->
            <div class="mt-6">
              <button onclick="uploadCompletePopup()" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 font-medium transition-all">
                Saya sudah transfer
              </button>
            </div>
          </div>
        </div>

        <!-- Toast -->
        <div id="copyToast" class="fixed bottom-6 right-6 bg-green-500 text-white px-4 py-2 rounded shadow-md text-sm hidden z-50">
          Disalin ke clipboard
        </div>
        <script>
          function copyWithToast(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
              const toast = document.getElementById('copyToast');
              toast.classList.remove('hidden');
              setTimeout(() => {
                toast.classList.add('hidden');
              }, 2000);
            }).catch(console.error);
          }
        </script>
        <!-- Popup Upload Selesai -->
        <div id="uploadCompletePopup" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
          <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md mx-4 text-center">
            <h2 class="text-xl font-bold mb-4">Upload Bukti Pembayaran Berhasil</h2>
            <!-- Animasi Lottie -->
           <dotlottie-player
            src="https://lottie.host/1a7d1e1d-4267-4e09-89c6-3761dab1c8b9/CcL4896RfB.lottie"
            background="transparent"
            speed="1"
            style="width: 300px; height: 300px"
            loop
            autoplay
          ></dotlottie-player>
            <!-- Nomor pesanan dinamis -->
            <p id="orderNumberDisplay" style="color: #4CAF50; font-weight: 600; font-size: 14px; text-align: center; margin-top: 8px;">
              Nomor Pesanan: -
            </p>
            <p class="mb-6">ID Booking telah dikirim ke nomor WA dan email Anda. Silakan cek status pembayaran Anda.</p>
            <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 font-medium transition-all">
                Kembali ke Beranda
            </button>
          </div>
        </div>


        <!-- Script Lottie Player -->
        <script
  src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
  type="module"></script>

<!-- Change your popup div to include the hidden class by default -->
<div id="credit-card-popup" class="popup-hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
  <div class="popup-content" style="background: white; padding: 20px; border-radius: 12px; width: 100%; max-width: 420px; position: relative;">

    <!-- Header -->
    <div class="popup-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
      <div class="popup-title" style="font-size: 18px; font-weight: bold;">Kartu kredit/debit</div>

      <!-- Logo dan Close -->
      <div style="display: flex; align-items: center; gap: 10px;">
        <img src="asset/neko.png" alt="Logo"
             style="width: 55px; height: 55px; object-fit: contain;" />
        <button class="close-btn"
                onclick="closecreditPopup()"
                style="font-size: 20px; background: none; border: none; cursor: pointer;">
          ×
        </button>
      </div>
    </div>


    <!-- Timer -->
    <div class="timer-bar" style="margin-bottom: 12px;">
      <i class="far fa-clock"></i>
      <span id="countdownText">Selesaikan pembayaran dalam 00j 59m 59d</span>
    </div>

    <!-- Security -->
    <div class="security-section" style="display: flex; justify-content: space-between; align-items: center; gap: 10px; margin-bottom: 16px;">
      <div class="security-guarantee" style="display: flex; align-items: center; gap: 8px;">
        <img src="asset/best_guarantee.jpg" alt="Security Guarantee" style="height: 55px;">
      </div>
      <div class="card-brands" style="display: flex; gap: 8px;">
        <img src="asset/mastercard.png" style="height: 30px;">
        <img src="asset/verified visa.jpeg" style="height: 24px;">
        <img src="asset/atm-bersama.png" style="height: 30px;">
        <img src="asset/maestro.png" style="height: 24px;">
      </div>
    </div>

    <!-- Form -->
    <div class="form-section">
      <div class="form-group" style="margin-bottom: 12px;">
        <label class="form-label">Nomor kartu</label>
        <input type="text" id="cardNumber" class="form-input" placeholder="1234 5678 9012 3456" maxlength="19" style="width: 100%;">
      </div>

      <div class="card-details" style="display: flex; gap: 12px;">
        <div class="form-group" style="flex: 1;">
          <label class="form-label">Berlaku hingga</label>
          <input type="text" id="expiryDate" class="form-input" placeholder="MM/YY" maxlength="5" style="width: 100%;">
        </div>

        <div class="form-group" style="flex: 1; position: relative;">
          <label class="form-label">CVV</label>
          <input type="password" id="cvv" class="form-input" placeholder="123" maxlength="3" style="width: 100%;">
          <i class="fas fa-info-circle info-icon" style="position: absolute; right: 10px; top: 32px; cursor: pointer;" onclick="openCVVPopup()"></i>

          <!-- Popup CVV -->
          <div class="cvv-popup hidden" id="cvvPopup" style="position: absolute; top: 65px; right: 0; background-color: white; border: 1px solid #ccc; padding: 12px; border-radius: 8px; z-index: 9999; width: 260px; height: 260px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <button class="cvv-popup-close" onclick="closeCVVPopup()" style="float: right; background: none; border: none; cursor: pointer;">×</button>
            <div style="font-weight: 600; font-size: 15px;">Apa itu CVV?</div>
            <img src="asset/ccv.jpg" alt="CVV Location" style="width: 100%; margin-top: 8px;">
            <div style="margin-top: 8px; font-size: 13px;">CVV adalah kode keamanan 3 digit di belakang kartu Anda (4 digit untuk American Express).</div>
          </div>
        </div>
      </div>

      <!-- Simpan kartu -->
      <div class="toggle-container" style="margin: 16px 0;">
        <label class="toggle-switch">
          <input type="checkbox" id="saveCard">
          <span class="toggle-slider"></span>
        </label>
        <span class="toggle-label">Simpan data kartu</span>
        <i class="fas fa-info-circle info-icon" onclick="toggleSaveInfo()" style="cursor: pointer;"></i>
        <div class="save-info-popup hidden" id="saveInfoPopup" style="margin-top: 6px; font-size: 13px;">Data kartu Anda akan disimpan secara aman untuk pembayaran berikutnya</div>
      </div>

      <!-- Pilih cicilan -->
      <div class="form-group" style="margin-bottom: 12px;">
        <label class="form-label">Pilih bayar penuh atau cicilan</label>
        <select class="installment-select" id="installmentSelect" style="width: 100%;">
          <option>Bayar penuh</option>
          <option>Cicilan 3 bulan</option>
          <option>Cicilan 6 bulan</option>
          <option>Cicilan 12 bulan</option>
        </select>
      </div>

      <!-- Summary -->
      <div class="payment-summary" style="margin-bottom: 16px;">
        <div class="payment-row" style="display: flex; justify-content: space-between;">
          <span class="payment-label">Total pembayaran</span>
          <span class="payment-amount" id="totalAmount">Rp266.250</span>
        </div>
        <a href="#" class="detail-link" id="showCoinInfo" style="display: inline-block; margin-top: 6px; text-decoration: underline;">
          Lihat detail
          <i class="fas fa-chevron-down" style="pointer-events: none;" ></i>
        </a>

        <div class="coin-info hidden" id="coinInfo" style="margin-top: 10px;">
          <div class="payment-row" style="display: flex; justify-content: space-between;">
            <span class="payment-label">Jumlah koin</span>
            <span class="payment-amount" id="totalCoin">1421 Coin</span>
          </div>
          <div id="orderInfoRow" style="display: flex ; justify-content: space-between; margin-top: 8px;">
            <span>Nomor Pesanan:</span>
            <span id="orderNumberText" style="font-weight: bold;"></span>
          </div>
          <div id="installmentInfoRow" style="display: none; justify-content: space-between; margin-top: 8px;">
            <span>Cicilan per bulan:</span>
            <span id="installmentAmountText" style="font-weight: bold;"></span>
          </div>
        </div>
      </div>


      <!-- Tombol Bayar -->
      <button class="pay-button" id="payButton" disabled style="width: 100%; padding: 10px; background: #ccc; border: none; color: white; border-radius: 6px; cursor: not-allowed;">Bayar Sekarang</button>
    </div>
  </div>
</div>


<script>
  function closecreditPopup() {
    document.getElementById('credit-card-popup').classList.add('hidden');
  }
</script>

<!-- Add FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


      </div>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\listanimeku-main\resources\views/users/dasboard_topup.blade.php ENDPATH**/ ?>
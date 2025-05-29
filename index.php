

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Global Cabal</title>
  <meta name="description" content="Global Cabal official site. Join events, download the game, and awaken your power to win amazing prizes." />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Orbitron"', 'sans-serif'],
          },
          colors: {
            gold: '#FFD700',
            dark: '#0b0b2b',
            overlay: 'rgba(255, 255, 255, 0.05)',
          },
        },
      },
      variants: {
        extend: {
          display: ['peer-checked'],
        },
      },
    }
  </script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <style>
    body {
      background: linear-gradient(to bottom, #0f0f1a, #0b0b2b);
      color: #e5e7eb;
      font-weight: 300;
      font-smooth: antialiased;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .hero {
      background: url('/assets/your-hero-background.jpg') no-repeat center center / cover;
      min-height: 100vh;
      position: relative;
    }
	
    .hero > div {
      position: relative;
      z-index: 1;
    }

    header {
      backdrop-filter: saturate(180%) blur(10px);
      border-bottom: 1px solid rgba(255, 215, 0, 0.15);
    }
    nav a {
      font-weight: 300;
      letter-spacing: 0.05em;
      transition: color 0.25s ease-in-out;
      color: #e5e7eb;
    }
    nav a:hover {
      color: #FFD700;
      text-shadow: 0 0 8px #FFD700;
    }

    button {
      font-weight: 300;
      letter-spacing: 0.1em;
      box-shadow: 0 4px 10px rgba(16, 185, 129, 0.6);
      will-change: transform;
      color: #e5e7eb;
    }
    button:hover {
      box-shadow: 0 6px 18px rgba(16, 185, 129, 0.9);
    }

    .character-card img {
      border-radius: 0.75rem;
      box-shadow: 0 0 12px rgba(255, 215, 0, 0.5);
      transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .character-card:hover img,
    .peer-checked ~ .character-card img {
      box-shadow: 0 0 24px #FFD700, 0 6px 12px rgba(255, 215, 0, 0.8);
      transform: scale(1.1);
    }

    .tooltip {
      background: linear-gradient(135deg, #111827dd, #1f2937dd);
      border: 1px solid #FFD700;
      box-shadow: 0 10px 25px rgba(255, 215, 0, 0.4);
      color: #e5e7eb;
    }

    .roadmap-card {
      backdrop-filter: saturate(150%) blur(10px);
      border: 1px solid #FFD700;
      box-shadow: 0 4px 12px rgba(255, 215, 0, 0.2);
      color: #e5e7eb;
    }
    .roadmap-card:hover {
      box-shadow: 0 16px 28px rgba(255, 215, 0, 0.6);
    }

    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: transparent;
    }
    ::-webkit-scrollbar-thumb {
      background: #FFD700aa;
      border-radius: 8px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #FFD700ee;
    }
    
  </style>
</head>

<body class="text-white font-sans overflow-x-hidden">
  <script>
    AOS.init({ once: true });
    document.addEventListener("DOMContentLoaded", () => {
      const menuBtn = document.getElementById("menu-btn");
      const menu = document.getElementById("menu");
      menuBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    });
  </script>

  <!-- Navbar -->
  <header class="fixed top-0 left-0 w-full bg-black bg-opacity-70 backdrop-blur-sm z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
      <div class="text-2xl font-bold text-white">Global Cabal</div>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex space-x-6 text-white">
        <a href="#home" class="hover:text-yellow-400">Home</a>
        <a href="#character" class="hover:text-yellow-400">Characters</a>
        <a href="#server-info" class="hover:text-yellow-400">About</a>
		<a href="#download" class="hover:text-yellow-400">Download</a>
        <a href="login.php" class="hover:text-yellow-400">Login</a>
      </nav>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-btn" aria-label="Toggle Menu" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="hidden md:hidden bg-black bg-opacity-90 text-white">
      <nav class="flex flex-col items-center py-4 space-y-4">
        <a href="#home" class="hover:text-yellow-400">Home</a>
        <a href="#Characters" class="hover:text-yellow-400">Characters</a>
		<a href="#server-info" class="hover:text-yellow-400">About</a>
        <a href="login.php" class="hover:text-yellow-400">Login</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
<section

  id="home"
  class="hero relative flex flex-col justify-center items-center text-center pt-32 px-4 bg-transparent text-white min-h-screen"
>
  <!-- Overlay -->



  <!-- Content container -->
  <div
    data-aos="fade-up"
    class="relative z-10 max-w-4xl w-full"
  >
    <!-- Banner Image -->
    <img
      src="assets/banner.png"
      alt="Global Cabal Banner"
      class="mb-6 max-w-full h-auto mx-auto"
    />

   <h2
<h2
  class="text-2xl sm:text-4xl md:text-6xl font-bold text-yellow-400 mb-6 drop-shadow-lg whitespace-nowrap text-center"
>
  NOW OFFICIALLY LIVE!
</h2>

    <p class="text-sm sm:text-base mb-4 opacity-80 px-2 max-w-xl mx-auto">
      The wait is over. <strong>EP 33</strong> has officially launched! Dive into the most epic chapter of Cabal and experience brand-new content, challenges, and rewards.
    </p>

    <h4 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-400 mb-6">
      EMBRACE THE EVOLUTION!
    </h4>

    <div
      class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-4 mt-6"
    >
      <a href="registration/registration.html">
        <button
          class="bg-yellow-500 text-black hover:bg-yellow-600 px-6 py-3 rounded-full transition-transform transform hover:scale-105 duration-300"
        >
          Register
        </button>
      </a>


      <a href="login.php">
        <button
          class="bg-yellow-500 text-black hover:bg-yellow-600 px-6 py-3 rounded-full transition-transform transform hover:scale-105 duration-300"
        >
          Login
        </button>
      </a>
    </div>
  </div>
</section>

<!-- Character Section (Floating Tooltip Style) -->
<section class="tabs-block py-12 px-2" id="character">
  <h2 class="text-center text-4xl font-extrabold mb-10 text-white" data-aos="fade-up">CHOOSE YOUR CLASS</h2>

  <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-2 justify-center max-w-6xl mx-auto" data-aos="fade-up">

    <!-- Warrior -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-warrior" class="hidden peer/warrior">
      <label for="char-warrior" class="block cursor-pointer">
        <img src="/assets/warrior-small.png" alt="Warrior" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/warrior:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/warrior:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/warrior-small.png" alt="Warrior" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Warrior</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Specializes in melee combat, emphasizing physical strength and heavy armor.</p>
      </div>
    </div>

    <!-- Blader -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-blader" class="hidden peer/blader">
      <label for="char-blader" class="block cursor-pointer">
        <img src="/assets/blader-small.png" alt="Blader" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/blader:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/blader:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/blader-small.png" alt="Blader" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Blader</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Agile warriors using twin blades to deliver fast, deadly strikes.</p>
      </div>
    </div>

    <!-- Wizard -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-wizard" class="hidden peer/wizard">
      <label for="char-wizard" class="block cursor-pointer">
        <img src="/assets/wizard-small.png" alt="Wizard" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/wizard:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/wizard:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/wizard-small.png" alt="Wizard" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Wizard</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Unleashes powerful spells to dominate the battlefield from afar.</p>
      </div>
    </div>

    <!-- Force Archer -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-force-archer" class="hidden peer/force-archer">
      <label for="char-force-archer" class="block cursor-pointer">
        <img src="/assets/force-archer-small.png" alt="Force Archer" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/force-archer:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/force-archer:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/force-archer-small.png" alt="Force Archer" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Force Archer</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Attacks with precision energy shots and supports allies from a distance.</p>
      </div>
    </div>

    <!-- Force Shielder -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-force-shielder" class="hidden peer/force-shielder">
      <label for="char-force-shielder" class="block cursor-pointer">
        <img src="/assets/force-shielder-small.png" alt="Force Shielder" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/force-shielder:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/force-shielder:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/force-shielder-small.png" alt="Force Shielder" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Force Shielder</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Combines sword and magic for solid defense and powerful counters.</p>
      </div>
    </div>

    <!-- Force Blader -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-force-blader" class="hidden peer/force-blader">
      <label for="char-force-blader" class="block cursor-pointer">
        <img src="/assets/force-blader-small.png" alt="Force Blader" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/force-blader:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/force-blader:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/force-blader-small.png" alt="Force Blader" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Force Blader</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Fuses blade combat and force magic for fast, lethal strikes.</p>
      </div>
    </div>

    <!-- Gladiator -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-gladiator" class="hidden peer/gladiator">
      <label for="char-gladiator" class="block cursor-pointer">
        <img src="/assets/gladiator-small.png" alt="Gladiator" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/gladiator:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/gladiator:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/gladiator-small.png" alt="Gladiator" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Gladiator</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Dominates with brutal martial arts and relentless assault skills.</p>
      </div>
    </div>

    <!-- Force Gunner -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-force-gunner" class="hidden peer/force-gunner">
      <label for="char-force-gunner" class="block cursor-pointer">
        <img src="/assets/force-gunner-small.png" alt="Force Gunner" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/force-gunner:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/force-gunner:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/force-gunner-small.png" alt="Force Gunner" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Force Gunner</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Unleashes heavy artillery powered by force energy from range.</p>
      </div>
    </div>

    <!-- Dark Mage -->
    <div class="relative group text-center">
      <input type="radio" name="character" id="char-dark-mage" class="hidden peer/dark-mage">
      <label for="char-dark-mage" class="block cursor-pointer">
        <img src="/assets/dark-mage-small.png" alt="Dark Mage" class="w-16 h-24 mx-auto border-2 border-gray-700 hover:border-yellow-400 peer-checked/dark-mage:border-yellow-400 transition shadow-md object-cover rounded-lg">
      </label>
      <div class="absolute z-50 hidden group-hover:flex peer-checked/dark-mage:flex flex-col items-center top-0 left-1/2 -translate-x-1/2 -translate-y-full mb-4 p-4 bg-gray-900 text-white rounded-xl w-64 shadow-lg">
        <img src="/assets/dark-mage-small.png" alt="Dark Mage" class="w-36 sm:w-40 drop-shadow-xl mb-2">
        <h3 class="text-lg sm:text-xl font-bold text-yellow-300">Dark Mage</h3>
        <p class="text-xs sm:text-sm text-gray-300 text-center">Uses forbidden magic to curse and devastate enemies.</p>
      </div>
    </div>

  </div>
</section>

<!-- Server Info Section -->
<section class="py-16 px-4 bg-gradient-to-b from-black to-gray-900 text-white" id="server-info">
  <div class="max-w-6xl mx-auto" data-aos="fade-up">
    <h2 class="text-4xl font-extrabold text-center text-yellow-400 mb-12">
      GLOBAL CABAL EPISODE 33
    </h2>

    <div class="grid lg:grid-cols-3 gap-10">
      <!-- New Features -->
      <div>
        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">New Features</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-300 text-base leading-relaxed">
          <li>Force Wing</li>
          <li>Master's Craftman</li>
          <li>Stellar Link</li>
          <li>Collection</li>
          <li>Merit Mastery</li>
          <li>Myth Mastery</li>
          <li>Boss Field Ruler</li>
          <li>Overlord Mastery</li>
        </ul>
      </div>

      <!-- Server Info -->
      <div>
        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">Server Info</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-300 text-base leading-relaxed">
          <li>High Rate Server</li>
          <li>Mobs 3x Drop</li>
          <li>Treasure/Relic/Legacy/Legendary Chest x3</li>
          <li>Global Server (SEA, EU, NA, BR)</li>
          <li>eCoins Per Hour</li>
          <li>Nation Alz Trick</li>
          <li>Easy Level Up</li>
          <li>DPS System</li>
          <li>Latest Dungeons</li>
          <li>Farm-to-Win Events</li>
          <li>Game Guard Protected</li>
          <li>No Item Donations</li>
		  <li>DP Shop/ DP to Force Gem</li>
		  <li>Open RMT</li>
          <li>Crafting & Referral System</li>
          <li>Friendly & Active Staff</li>
        </ul>
      </div>

      <!-- Starter Pack + Rewards -->
      <div>
        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">Starter Pack</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-300 text-base leading-relaxed mb-8">
          <li>Honor 11 Grade 20</li>
          <li>Level 130</li>
          <li>PET, BIKE, Epic Sigmetal Set</li>
          <li>Epic Costumes</li>
        </ul>

        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">Nonstop Level Up Reward</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-300 text-base leading-relaxed">
          <li>Potion of Luck</li>
          <li>Potion of Honor</li>
		  <li>Epic Items</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="py-16 px-4 bg-gradient-to-b from-black to-gray-900 text-white" id="download">
  <div class="max-w-4xl mx-auto bg-[#2b3140] p-8 rounded-xl shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Download Center</h2>
        </div>

        <table class="w-full text-left table-auto">
            <thead class="bg-blue-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-lg font-semibold">File</th>
                    <th class="px-6 py-3 text-lg font-semibold">Size</th>
                    <th class="px-6 py-3 text-lg font-semibold">Uploaded</th>
                    <th class="px-6 py-3 text-lg font-semibold">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $conn->query("SELECT * FROM downloads ORDER BY uploaded_at DESC");
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $file):
                ?>
                <tr class="border-b border-gray-700 hover:bg-[#3b4252] transition-colors">
                    <td class="px-6 py-4"><?= htmlspecialchars($file['filename']) ?></td>
                    <td class="px-6 py-4"><?= number_format($file['size'] / 1024, 2) ?> KB</td>
                    <td class="px-6 py-4"><?= htmlspecialchars($file['uploaded_at']) ?></td>
                    <td class="px-6 py-4">
                        <a href="?download=<?= (int)$file['id'] ?>" class="bg-yellow-400 text-black px-4 py-2 rounded hover:bg-yellow-500 transition-colors">Download</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Floating Discord Button -->
<div class="fixed bottom-6 right-6 z-50">
  <a href="https://discord.gg/qxjhaJvM3G" target="_blank">
    <button class="bg-yellow-500 hover:bg-blue-600 text-white font-bold p-4 rounded-full shadow-lg transition-all transform hover:scale-105">
      <i class="fab fa-discord"></i> Discord Community
    </button>
  </a>
</div>

<!-- Footer -->
<footer class="py-8 bg-black bg-opacity-80 text-center text-sm">
© 2025 Global Cabal. All rights reserved.
</footer>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>



</body>
</html>



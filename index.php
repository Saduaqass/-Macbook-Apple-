<?php
// Ноутбуктер массиві (Қазақ тіліндегі сипаттамалармен)
$laptops = [
    [
        "id" => 1,
        "model" => "MacBook Air M1",
        "badge" => "Классика",
        "ram" => "8 GB",
        "ssd" => "256 GB",
        "price" => 399990,
        "description" => "Бастама үшін мінсіз ноутбук. Революциялық Apple M1 чипі, қуаттаусыз 18 сағатқа дейін жұмыс және дыбыссыз дизайн.",
        "colors" => [
            ["name" => "Space Gray", "hex" => "#7d7e80", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-space-gray-select-201810?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1603332211000"],
            ["name" => "Silver", "hex" => "#e3e4e5", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-silver-select-201810?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1603332211000"],
            ["name" => "Gold", "hex" => "#f9d4c2", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-gold-select-201810?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1603332211000"]
        ]
    ],
    [
        "id" => 2,
        "model" => "MacBook Air M2",
        "ram" => "8 GB",
        "ssd" => "256 GB",
        "price" => 499990,
        "description" => "Жаңартылған дизайн, өте жұқа корпус және жарқын Liquid Retina дисплейі. Күнделікті кез келген тапсырмаға арналған M2 чипі.",
        "colors" => [
            ["name" => "Midnight", "hex" => "#2e3642", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-midnight-select-20220606?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1653084303665"],
            ["name" => "Starlight", "hex" => "#f0e4d3", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-starlight-select-20220606?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1653084303732"],
            ["name" => "Space Gray", "hex" => "#7d7e80", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-spacegray-select-20220606?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1653084303732"]
        ]
    ],
    [
        "id" => 3,
        "model" => "MacBook Air M2",
        "badge" => "Таңдау",
        "ram" => "16 GB",
        "ssd" => "512 GB",
        "price" => 649990,
        "description" => "Жобаларыңыз үшін көбірек жад пен орын. Таңғажайып қуаты бар жұқа әрі жеңіл ноутбук.",
        "colors" => [
            ["name" => "Starlight", "hex" => "#f0e4d3", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-starlight-select-20220606?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1653084303732"],
            ["name" => "Midnight", "hex" => "#2e3642", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-midnight-select-20220606?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1653084303665"]
        ]
    ],
    [
        "id" => 4,
        "model" => "MacBook Air M3",
        "ram" => "8 GB",
        "ssd" => "256 GB",
        "price" => 599990,
        "description" => "M3 чипінің қуаты. Жабық күйде екі сыртқы дисплейді қолдау, өте жылдам Wi-Fi 6E және премиум дизайн.",
        "colors" => [
            ["name" => "Midnight", "hex" => "#2e3642", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mba13-midnight-select-202402?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1708367688034"],
            ["name" => "Space Gray", "hex" => "#7d7e80", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mba13-spacegray-select-202402?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1708367733479"]
        ]
    ],
    [
        "id" => 5,
        "model" => "MacBook Air M3",
        "badge" => "Топ сатылым",
        "ram" => "16 GB",
        "ssd" => "512 GB",
        "price" => 749990,
        "description" => "M3 базасындағы кеңейтілген Air нұсқасы. Күрделі тапсырмалар, графикамен жұмыс және бағдарламалау үшін жасалған.",
        "colors" => [
            ["name" => "Silver", "hex" => "#e3e4e5", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mba13-silver-select-202402?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1708367733479"],
            ["name" => "Starlight", "hex" => "#f0e4d3", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mba13-starlight-select-202402?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1708367807758"]
        ]
    ],
    [
        "id" => 6,
        "model" => "MacBook Air M4",
        "badge" => "Жаңа",
        "ram" => "16 GB",
        "ssd" => "256 GB",
        "price" => 699990,
        "description" => "Apple Intelligence қолдауы бар ең жаңа M4 чипі. Енді базалық жиынтықта 16 ГБ жад беріледі.",
        "colors" => [
            ["name" => "Midnight", "hex" => "#2e3642", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mba13-midnight-select-202402?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1708367688034"]
        ]
    ],
    [
        "id" => 7,
        "model" => "MacBook Air M4",
        "ram" => "16 GB",
        "ssd" => "512 GB",
        "price" => 799990,
        "description" => "Жұқа корпустағы максималды өнімділік. Жұмыс пен ойын-сауық үшін таптырмас шешім.",
        "colors" => [
            ["name" => "Starlight", "hex" => "#f0e4d3", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mba13-starlight-select-202402?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1708367807758"]
        ]
    ],
    [
        "id" => 8,
        "model" => "MacBook Pro M3",
        "ram" => "16 GB",
        "ssd" => "512 GB",
        "price" => 899990,
        "description" => "Liquid Retina XDR дисплейі, барлық қажетті порттар және Pro сериясының керемет қуаты. Кәсіпқойлар үшін оңтайлы таңдау.",
        "colors" => [
            ["name" => "Space Gray", "hex" => "#7d7e80", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-spacegray-select-202310?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1697230830200"],
            ["name" => "Silver", "hex" => "#e3e4e5", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-silver-select-202310?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1697230830252"]
        ]
    ],
    [
        "id" => 9,
        "model" => "MacBook Pro M4",
        "badge" => "M4 Chip",
        "ram" => "16 GB",
        "ssd" => "512 GB",
        "price" => 999990,
        "description" => "Революциялық M4 чипі, кеңейтілген салқындату жүйесі және керемет Space Black түсі.",
        "colors" => [
            ["name" => "Space Black", "hex" => "#2b2c2e", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-spaceblack-select-202310?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1697230830200"]
        ]
    ],
    [
        "id" => 10,
        "model" => "MacBook Pro M4 Pro",
        "badge" => "Супер қуат",
        "ram" => "24 GB",
        "ssd" => "512 GB",
        "price" => 1199990,
        "description" => "Экстремалды қуат. M4 Pro чипі және 24 ГБ біріктірілген жад 3D-дан нейрожелілерге дейінгі ең қиын жобаларды орындай алады.",
        "colors" => [
            ["name" => "Silver", "hex" => "#e3e4e5", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-silver-select-202310?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1697230830252"],
            ["name" => "Space Black", "hex" => "#2b2c2e", "img" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-spaceblack-select-202310?wid=500&hei=500&fmt=jpeg&qlt=90&.v=1697230830200"]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MacBook — Ноутбуктер каталогы</title>
    <style>
        /* CSS Variables - Dark Mode үшін дайындық */
        :root {
            --bg-color: #fbfbfd;
            --text-color: #1d1d1f;
            --card-bg: #ffffff;
            --nav-bg: rgba(255, 255, 255, 0.7);
            --border-color: #e5e5ea;
            --secondary-text: #86868b;
            --btn-bg: #f5f5f7;
            --btn-hover: #e8e8ed;
            --modal-overlay: rgba(0,0,0,0.6);
            --blue-accent: #0071e3;
        }

        .dark-mode {
            --bg-color: #000000;
            --text-color: #f5f5f7;
            --card-bg: #1c1c1e;
            --nav-bg: rgba(0, 0, 0, 0.7);
            --border-color: #333336;
            --secondary-text: #a1a1a6;
            --btn-bg: #2c2c2e;
            --btn-hover: #3a3a3c;
            --modal-overlay: rgba(0,0,0,0.8);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Navigation (Glassmorphism) */
        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2.5rem;
            padding: 1rem;
            background: var(--nav-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
            transition: background-color 0.3s, border-color 0.3s;
        }
        nav a {
            text-decoration: none;
            color: var(--text-color);
            font-size: 14px;
            font-weight: 400;
            transition: color 0.3s;
        }
        nav a:hover { color: var(--blue-accent); }
        .theme-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            margin-left: 20px;
            outline: none;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 20px 40px;
        }
        .hero h1 {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -0.01em;
            margin-bottom: 10px;
        }
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(90deg, #ff7a18, #af002d 50%, #319197);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
        .hero h2 {
            font-size: 28px;
            font-weight: 400;
            margin-bottom: 15px;
        }
        .hero p {
            font-size: 21px;
            color: var(--secondary-text);
            max-width: 600px;
            margin: 0 auto 30px auto;
        }
        .hero img {
            max-width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: contain;
            margin-top: 2rem;
            filter: drop-shadow(0 20px 30px rgba(0,0,0,0.1));
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1rem;
        }
        .catalog-title {
            text-align: center;
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 3rem;
        }

        /* Controls: Search & Filter (Glassmorphism) */
        .controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        @media (min-width: 768px) {
            .controls { flex-direction: row; justify-content: space-between; }
        }
        .search-box input {
            padding: 12px 20px;
            border-radius: 980px;
            border: 1px solid var(--border-color);
            width: 100%;
            min-width: 250px;
            font-size: 16px;
            outline: none;
            background: var(--nav-bg);
            backdrop-filter: blur(10px);
            color: var(--text-color);
            transition: border-color 0.3s;
        }
        .search-box input:focus { border-color: var(--blue-accent); }
        .filters {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        .filter-btn {
            padding: 8px 16px;
            border-radius: 980px;
            border: 1px solid var(--border-color);
            background: var(--card-bg);
            color: var(--text-color);
            cursor: pointer;
            transition: all 0.2s;
            font-size: 14px;
        }
        .filter-btn:hover { border-color: var(--text-color); }
        .filter-btn.active {
            background: var(--text-color);
            color: var(--bg-color);
            border-color: var(--text-color);
        }

        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        @media (min-width: 768px) { .grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .grid { grid-template-columns: repeat(3, 1fr); } }

        /* Card Setup */
        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
            transition: transform 0.4s ease, box-shadow 0.4s ease, background-color 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.08);
        }
        .dark-mode .card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.4);
        }

        /* Badge (Жапсырма) */
        .badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: linear-gradient(135deg, #ff3b30, #ff9500);
            color: white;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 10;
        }

        .card img.main-img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
            transition: opacity 0.3s ease;
        }
        .card h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        /* Swatches (Түс таңдау) */
        .swatches {
            display: flex;
            gap: 8px;
            margin-bottom: 15px;
            justify-content: center;
        }
        .swatch {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            cursor: pointer;
            border: 1px solid rgba(128,128,128,0.3);
            transition: transform 0.2s, outline 0.2s;
            outline: 2px solid transparent;
            outline-offset: 2px;
        }
        .swatch.active { outline: 2px solid var(--blue-accent); }
        .swatch:hover { transform: scale(1.1); }

        .card p.desc {
            color: var(--secondary-text);
            font-size: 14px;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        .card .specs {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 14px;
            color: var(--text-color);
            font-weight: 500;
        }
        .card .price {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .card button.details-btn {
            background: var(--btn-bg);
            color: var(--blue-accent);
            border: none;
            padding: 10px 20px;
            border-radius: 980px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
        }
        .card button.details-btn:hover {
            background: var(--blue-accent);
            color: #fff;
        }

        /* Scroll Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Modal (Glassmorphism) */
        .modal-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: var(--modal-overlay);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            display: flex; justify-content: center; align-items: center;
            z-index: 1000;
            opacity: 0; pointer-events: none;
            transition: opacity 0.3s ease;
        }
        .modal-overlay.active {
            opacity: 1; pointer-events: all;
        }
        .modal {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 40px;
            max-width: 600px;
            width: 90%;
            text-align: center;
            transform: scale(0.95);
            transition: transform 0.3s ease;
            position: relative;
        }
        .modal-overlay.active .modal { transform: scale(1); }
        .modal .close-btn {
            position: absolute; top: 15px; right: 20px;
            background: none; border: none; font-size: 28px;
            cursor: pointer; color: var(--secondary-text);
        }
        .modal img.modal-main-img {
            max-width: 100%; height: 250px;
            object-fit: contain; margin-bottom: 20px;
        }
        
        /* Modal Gallery (Мини-галерея) */
        .modal-gallery {
            display: flex; justify-content: center; gap: 10px; margin-bottom: 20px;
        }
        .gallery-thumb {
            width: 50px; height: 50px;
            object-fit: contain; border-radius: 8px;
            cursor: pointer; border: 1px solid var(--border-color);
            padding: 5px; transition: border-color 0.3s;
        }
        .gallery-thumb:hover, .gallery-thumb.active { border-color: var(--blue-accent); }

        .modal h2 { font-size: 32px; margin-bottom: 10px; }
        .modal p { color: var(--secondary-text); margin-bottom: 20px; }
        .modal .specs {
            display: flex; justify-content: center; gap: 20px;
            margin-bottom: 20px; font-size: 18px; font-weight: 500;
        }
        .modal .price { font-size: 28px; font-weight: 600; }

        footer {
            background: var(--bg-color);
            padding: 2rem; text-align: center;
            color: var(--secondary-text); font-size: 12px;
            border-top: 1px solid var(--border-color);
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <nav>
        <a href="#">Басты бет</a>
        <a href="#catalog">Модельдер</a>
        <a href="#">Біз туралы</a>
        <button class="theme-btn" id="theme-toggle" title="Түнгі режим">🌙</button>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <h1 class="gradient-text">MacBook</h1>
        <h2>Қуат. Қарапайымдылық. Дизайн.</h2>
        <p>Өзіңізге сәйкес келетін MacBook-ті таңдаңыз.</p>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mac-card-40-macbook-air-202402?wid=1200&hei=1000&fmt=p-jpg&qlt=95&.v=1707259289595" alt="MacBook Family">
    </header>

    <!-- Catalog Section -->
    <main class="container" id="catalog">
        <h2 class="catalog-title">Өз MacBook-іңізді таңдаңыз</h2>
        
        <div class="controls">
            <!-- Search -->
            <div class="search-box">
                <input type="text" id="search" placeholder="Іздеу (мысалы: M4)...">
            </div>
            
            <!-- Filters -->
            <div class="filters">
                <button class="filter-btn filter-model active" data-val="All">Барлығы</button>
                <button class="filter-btn filter-model" data-val="Air">MacBook Air</button>
                <button class="filter-btn filter-model" data-val="Pro">MacBook Pro</button>
            </div>
            
            <div class="filters">
                <button class="filter-btn filter-ram active" data-val="All">RAM (Барлығы)</button>
                <button class="filter-btn filter-ram" data-val="8 GB">8 GB</button>
                <button class="filter-btn filter-ram" data-val="16 GB">16 GB</button>
                <button class="filter-btn filter-ram" data-val="24 GB">24 GB</button>
            </div>
        </div>

        <div class="grid">
            <?php foreach ($laptops as $laptop): ?>
                <div class="card reveal" 
                     data-id="<?= $laptop['id'] ?>"
                     data-title="<?= htmlspecialchars(strtolower($laptop['model'])) ?>" 
                     data-ram="<?= htmlspecialchars($laptop['ram']) ?>">
                    
                    <!-- Бейджик -->
                    <?php if (isset($laptop['badge'])): ?>
                        <div class="badge"><?= htmlspecialchars($laptop['badge']) ?></div>
                    <?php endif; ?>
                    
                    <img class="main-img" src="<?= htmlspecialchars($laptop['colors'][0]['img']) ?>" alt="<?= htmlspecialchars($laptop['model']) ?>">
                    
                    <h3><?= htmlspecialchars($laptop['model']) ?></h3>
                    
                    <!-- Түс таңдау Swatch-тары -->
                    <div class="swatches">
                        <?php foreach ($laptop['colors'] as $index => $color): ?>
                            <div class="swatch <?= $index === 0 ? 'active' : '' ?>" 
                                 style="background-color: <?= $color['hex'] ?>;"
                                 title="<?= $color['name'] ?>"
                                 data-img="<?= htmlspecialchars($color['img']) ?>"
                                 onclick="changeImage(event, this)">
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="desc"><?= htmlspecialchars(mb_strimwidth($laptop['description'], 0, 70, "...")) ?></p>
                    
                    <div class="specs">
                        <span><?= htmlspecialchars($laptop['ram']) ?> RAM</span>
                        <span><?= htmlspecialchars($laptop['ssd']) ?> SSD</span>
                    </div>
                    
                    <div class="price"><?= number_format($laptop['price'], 0, '', ' ') ?> ₸</div>
                    
                    <button class="details-btn" onclick="openModal(<?= $laptop['id'] ?>)">Толығырақ</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>MacBook Catalog — PHP тіліндегі оқу жобасы</p>
        <p>© 2026 MacBook Catalog. Барлық құқықтар қорғалған.</p>
    </footer>

    <!-- Modal Window (Галереямен) -->
    <div class="modal-overlay" id="modal">
        <div class="modal">
            <button class="close-btn" onclick="closeModal()">×</button>
            <img id="modal-img" class="modal-main-img" src="" alt="">
            
            <div id="modal-gallery" class="modal-gallery"></div>

            <h2 id="modal-title"></h2>
            <p id="modal-desc"></p>
            <div class="specs">
                <span>RAM: <span id="modal-ram"></span></span>
                <span>SSD: <span id="modal-ssd"></span></span>
            </div>
            <div class="price" id="modal-price"></div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const laptops = <?= json_encode($laptops) ?>;

        // --- 1. Dark Mode (Қараңғы режим) ---
        const themeToggle = document.getElementById('theme-toggle');
        
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            themeToggle.textContent = '☀️';
        }

        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            const isDark = document.body.classList.contains('dark-mode');
            themeToggle.textContent = isDark ? '☀️' : '🌙';
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });

        // --- 2. Scroll Reveal (Скролл анимациясы) ---
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => revealObserver.observe(el));

        // --- 3. Түс таңдағанда суретті ауыстыру ---
        function changeImage(event, swatchElement) {
            event.stopPropagation();
            
            const swatches = swatchElement.parentElement.querySelectorAll('.swatch');
            swatches.forEach(s => s.classList.remove('active'));
            swatchElement.classList.add('active');
            
            const card = swatchElement.closest('.card');
            const mainImg = card.querySelector('.main-img');
            
            mainImg.style.opacity = '0.5';
            setTimeout(() => {
                mainImg.src = swatchElement.dataset.img;
                mainImg.style.opacity = '1';
            }, 150);
        }

        // --- 4. Модальды терезе және Галерея ---
        function openModal(id) {
            const laptop = laptops.find(l => l.id === id);
            if (!laptop) return;
            
            const card = document.querySelector(`.card[data-id="${id}"]`);
            const activeSwatch = card.querySelector('.swatch.active');
            const activeImgUrl = activeSwatch ? activeSwatch.dataset.img : laptop.colors[0].img;

            document.getElementById('modal-img').src = activeImgUrl;
            document.getElementById('modal-title').textContent = laptop.model;
            document.getElementById('modal-desc').textContent = laptop.description;
            document.getElementById('modal-ram').textContent = laptop.ram;
            document.getElementById('modal-ssd').textContent = laptop.ssd;
            
            const formattedPrice = new Intl.NumberFormat('ru-RU').format(laptop.price) + ' ₸';
            document.getElementById('modal-price').textContent = formattedPrice;

            const gallery = document.getElementById('modal-gallery');
            gallery.innerHTML = '';
            
            laptop.colors.forEach(color => {
                const thumb = document.createElement('img');
                thumb.src = color.img;
                thumb.className = 'gallery-thumb';
                if(color.img === activeImgUrl) thumb.classList.add('active');
                
                thumb.onclick = function() {
                    document.getElementById('modal-img').src = color.img;
                    document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                };
                gallery.appendChild(thumb);
            });
            
            document.getElementById('modal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('modal').classList.remove('active');
            document.body.style.overflow = '';
        }

        // --- 5. Фильтрлеу және Іздеу ---
        const searchInput = document.getElementById('search');
        const filterModelBtns = document.querySelectorAll('.filter-model');
        const filterRamBtns = document.querySelectorAll('.filter-ram');
        const cards = document.querySelectorAll('.card');

        let currentModelFilter = 'All';
        let currentRamFilter = 'All';

        searchInput.addEventListener('input', applyFilters);

        filterModelBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                filterModelBtns.forEach(b => b.classList.remove('active'));
                e.target.classList.add('active');
                currentModelFilter = e.target.dataset.val;
                applyFilters();
            });
        });

        filterRamBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                filterRamBtns.forEach(b => b.classList.remove('active'));
                e.target.classList.add('active');
                currentRamFilter = e.target.dataset.val;
                applyFilters();
            });
        });

        function applyFilters() {
            const query = searchInput.value.toLowerCase();
            
            cards.forEach(card => {
                const title = card.dataset.title;
                const ram = card.dataset.ram;
                
                const matchQuery = title.includes(query);
                const matchModel = currentModelFilter === 'All' || title.includes(currentModelFilter.toLowerCase());
                const matchRam = currentRamFilter === 'All' || ram === currentRamFilter;
                
                if (matchQuery && matchModel && matchRam) {
                    card.style.display = 'flex';
                    setTimeout(() => card.classList.add('active'), 10);
                } else {
                    card.style.display = 'none';
                    card.classList.remove('active');
                }
            });
        }
    </script>
</body>
</html>
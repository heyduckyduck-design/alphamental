<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Aplikasi Saya</title>

    <!-- Google Fonts: Inter untuk tampilan modern dan mudah dibaca -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #ffffff;
            --bg-surface: #f9fafb; /* Abu-abu sangat muda untuk kartu & section */
            --text-primary: #111827; /* Hitam pekat */
            --text-secondary: #4b5563; /* Abu-abu medium */
            --border-color: #e5e7eb;
            --font-family: 'Inter', sans-serif;
            --max-width: 1140px;
            --radius-lg: 16px;
            --radius-md: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--bg-main);
            color: var(--text-primary);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease;
        }

        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* 1. Header & Navigation (Inspirasi: Q Psychology Topbar) */
        /* 1. Floating Pill Header & Navigation */
        .site-header {
            position: fixed;
            top: 1.5rem;
            left: 0;
            right: 0;
            z-index: 100;
            background: transparent;
            border: none;
        }

        .header-inner {
            background: #fcfbf9; /* Warna Off-White / Cream lembut ala Q Psychology */
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 9999px; /* Membuat sudut membulat penuh (pill shape) */
            padding: 0.6rem 1.5rem 0.6rem 2rem;
            height: auto;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.08); /* Efek melayang */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            color: var(--text-primary);
            display: flex;
            align-items: center;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--text-secondary);
        }

        .nav-links a:hover {
            color: var(--text-primary);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .btn-pill-cta {
            background-color: #d1e7dd; /* Warna sage/mint lembut ala referensi */
            color: #113829;
            padding: 0.55rem 1.25rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }

        .btn-pill-cta:hover {
            background-color: #c0decb;
        }

        .btn-pill-cta .arrow {
            width: 22px;
            height: 22px;
            background-color: #113829;
            color: #ffffff;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }

        /* Penyesuaian jarak Hero agar tidak tertutup navbar melayang */
        .hero {
            padding-top: 9rem;
        }

        /* 2. Hero Section (Inspirasi: Split Layout 2 Kolom) */
        .hero {
            padding: 5rem 0 6rem;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-title {
            font-size: 3.25rem;
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -0.03em;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
        }

        .hero-description {
            font-size: 1.125rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            max-width: 540px;
        }

        .btn-group {
            display: flex;
            gap: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.875rem 1.75rem;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: var(--radius-md);
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--text-primary);
            color: #ffffff;
            border: 1px solid var(--text-primary);
        }

        .btn-primary:hover {
            background-color: #1f2937;
        }

        .hero-card-visual {
            background-color: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 3rem 2rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 360px;
        }

        .visual-badge {
            display: inline-block;
            background: #ffffff;
            border: 1px solid var(--border-color);
            padding: 0.35rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        /* 3. Section Fitur (Inspirasi: Grid Card Q Psychology) */
        .features-section {
            background-color: var(--bg-surface);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            padding: 5rem 0;
        }

        .section-header {
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
        }

        .section-subtitle {
            color: var(--text-secondary);
            font-size: 1rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .feature-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            background: var(--bg-surface);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .feature-title {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .feature-desc {
            font-size: 0.925rem;
            color: var(--text-secondary);
        }

        /* 4. Footer */
        .site-footer {
            padding: 3rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* Responsivitas Layar */
        @media (max-width: 900px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }
            .features-grid {
                grid-template-columns: 1fr;
            }
            .hero-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navigasi -->
    <!-- Header / Navigasi Melayang -->
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="/" class="logo">Alpha Psikolog</a>
                
                <nav>
                    <ul class="nav-links">
                        <li><a href="{{ route('counselor.search') }}">Pencarian</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </nav>

                <div class="header-actions">
                    <a href="#kontak" class="btn-pill-cta">
                        Hubungi Kami
                        <span class="arrow">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1 class="hero-title"> Layanan Dukungan Kesehatan Mental Daerah Sekitarmu </h1>
                    <p class="hero-description">
                    <b>Alpha Psikolog </b> merupakan layanan penghubung antara konselor dengan konseli. Cari dan temukan konselor terdekat di daerah sekitarmu dengan mudah melalui jaringan konselor terverifikasi kami.    
                    Menyediakan berbagai pilihan konsultasi, mulai dari sesi tatap muka (offline) hingga sesi daring (online) untuk kebutuhan individu, pasangan, anak dan remaja, hingga konsultasi keluarga. Kami hadir untuk membantu kamu menemukan ruang aman dan profesional dalam menjaga kesehatan mental.
                    </p>
                    <div class="btn-group">
                        <!-- Ubah tag <a> pada tombol utama di hero section -->
                    <a href="{{ route('counselor.search') }}" class="btn btn-primary">
                        Cari Konselor Terdekat
                    </a>
                    </div>
                </div>
                
                <!-- Visual Card Kanan -->
                <div class="hero-card-visual">
                    <span class="visual-badge"> Mulai Cari Konselor</span>
                    <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;"> Kamu bisa mencari Konselor terdekatmu</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary);">Tak perlu sulit untuk mencari atau bertanya tempat.</p>
                </div>
            </div>
        </section>

        <!-- Section Fitur -->
        <section id="fitur" class="features-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Macam Konselaor</h2>
                    <p class="section-subtitle">Cari konselor sesuai kebutuhanmu.</p>
                </div>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">01</div>
                        <h3 class="feature-title"> Konselor Dewasa</h3>
                        <p class="feature-desc">Tenaga profesional terlatih yang memberikan bimbingan, dukungan emosional, dan talk terapi khusus untuk individu berusia dewasa.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">02</div>
                        <h3 class="feature-title">Konselor Pasangan</h3>
                        <p class="feature-desc">Membantu pasangan mengidentifikasi, memahami dan menyelesaikan konflik dan dinamika dalam hubungan, baik yang sudah menikah maupun calon pengantin.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">03</div>
                        <h3 class="feature-title">Konselor Remaja</h3>
                        <p class="feature-desc">Seorang Profesional atau pendamping yang terlatih untuk memberikan dukungan emosional, bimbingan dan bantuan psikologis kepada remaja dalam menghadapi masa transisi dari anak-anak menuju dewasa.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} MyBrand. Dibuat dengan Laravel.</p>
        </div>
    </footer>

</body>
</html>
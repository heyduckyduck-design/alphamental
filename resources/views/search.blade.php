<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Konselor Terdekat - Alpha Psikolog</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #ffffff;
            --bg-surface: #f9fafb;
            --text-primary: #111827;
            --text-secondary: #4b5563;
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

        /* Floating Navbar (Sama dengan sebelumnya) */
        .site-header {
            position: fixed;
            top: 1.5rem;
            left: 0;
            right: 0;
            z-index: 100;
            background: transparent;
        }

        .header-inner {
            background: #fcfbf9;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 9999px;
            padding: 0.6rem 1.5rem 0.6rem 2rem;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            color: var(--text-primary);
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

        .nav-links a:hover, .nav-links a.active {
            color: var(--text-primary);
        }

        /* Main Content */
        .page-header {
            padding: 9rem 0 3rem;
            text-align: center;
            border-bottom: 1px solid var(--border-color);
            background-color: var(--bg-surface);
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            margin-bottom: 0.75rem;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Filter Section */
        .search-section {
            padding: 3rem 0;
        }

        .filter-box {
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            display: grid;
            grid-template-columns: 2fr 1.5fr auto;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            font-family: var(--font-family);
            font-size: 0.95rem;
            background: #ffffff;
            color: var(--text-primary);
            outline: none;
        }

        .form-control:focus {
            border-color: var(--text-primary);
        }

        .btn {
            padding: 0.75rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: var(--radius-md);
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background-color: var(--text-primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #1f2937;
        }

        /* Counselor Grid List */
        .counselor-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 4rem;
        }

        .counselor-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .counselor-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }

        .counselor-profile {
            display: flex;
            gap: 1rem;
            align-items: center;
            margin-bottom: 1.25rem;
        }

        .counselor-avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--text-secondary);
        }

        .counselor-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .counselor-location {
            font-size: 0.85rem;
            color: var(--text-secondary);
        }

        .counselor-specialty {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        .badge-tag {
            display: inline-block;
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            width: 100%;
            text-align: center;
        }

        .btn-outline:hover {
            background: var(--bg-surface);
            border-color: var(--text-primary);
        }

        /* Footer */
        .site-footer {
            padding: 3rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-secondary);
            border-top: 1px solid var(--border-color);
        }

        /* Responsif */
        @media (max-width: 900px) {
            .filter-box {
                grid-template-columns: 1fr;
            }
            .counselor-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navigasi Melayang -->
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="/" class="logo">Alpha Psikolog</a>
                <nav>
                    <ul class="nav-links">
                        <li><a href="/" class="active">Beranda</a></li>
                        <li><a href="#fitur">Cari Konselor</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                    </ul>
                </nav>
                <div>
                    <a href="#" style="font-size: 0.85rem; font-weight: 600; color: var(--text-primary);">Masuk</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">Cari Konselor Terdekat</h1>
            <p class="page-subtitle">Temukan konselor profesional dan tersertifikasi di wilayah sekitarmu untuk mendampingi perjalanan kesehatan mentalmu.</p>
        </div>
    </div>

    <!-- Main Content: Filter & Daftar Konselor -->
    <main class="search-section">
        <div class="container">
            
            <!-- Kotak Filter Sederhana -->
            <form action="" method="GET" class="filter-box">
                <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan nama atau keahlian...">
                <select name="lokasi" class="form-control">
                    <option value="">Semua Daerah / Kota</option>
                    <option value="jakarta">Jakarta Selatan</option>
                    <option value="bandung">Bandung</option>
                    <option value="surabaya">Surabaya</option>
                </select>
                <button type="submit" class="btn btn-primary">Cari Konselor</button>
            </form>

            <!-- Daftar Grid Kartu Konselor -->
            <div class="counselor-grid">
                
                <!-- Kartu 1 -->
                <div class="counselor-card">
                    <div>
                        <div class="counselor-profile">
                            <div class="counselor-avatar">DR</div>
                            <div>
                                <h3 class="counselor-name">Dr. Rian Utama, M.Psi.</h3>
                                <p class="counselor-location">Jakarta Selatan</p>
                            </div>
                        </div>
                        <span class="badge-tag">Konsultasi Individu & Karir</span>
                        <p class="counselor-specialty">Berpengalaman dalam mengatasi kecemasan kerja, stres harian, serta pengembangan diri orang dewasa.</p>
                    </div>
                    <!-- Menggunakan ID dinamis dari database (misal: $counselor->id) -->
                    <a href="{{ route('counselor-detail', $counselor->id) }}" class="btn btn-outline">
                        Lihat Jadwal & Profil
                    </a>
                </div>

                <!-- Kartu 2 -->
                <div class="counselor-card">
                    <div>
                        <div class="counselor-profile">
                            <div class="counselor-avatar">SA</div>
                            <div>
                                <h3 class="counselor-name">Siti Aisyah, M.Psi., Psikolog</h3>
                                <p class="counselor-location">Bandung</p>
                            </div>
                        </div>
                        <span class="badge-tag">Pasangan & Keluarga</span>
                        <p class="counselor-specialty">Fokus pada terapi pernikahan, resolusi konflik rumah tangga, serta bimbingan pola asuh anak.</p>
                    </div>
                    <a href="#" class="btn btn-outline">Lihat Jadwal & Profil</a>
                </div>

                <!-- Kartu 3 -->
                <div class="counselor-card">
                    <div>
                        <div class="counselor-profile">
                            <div class="counselor-avatar">AN</div>
                            <div>
                                <h3 class="counselor-name">Andi Nugraha, M.Psi.</h3>
                                <p class="counselor-location">Surabaya</p>
                            </div>
                        </div>
                        <span class="badge-tag">Anak & Remaja</span>
                        <p class="counselor-specialty">Menangani kendala tumbuh kembang anak, penyesuaian diri remaja, serta konseling motivasi belajar.</p>
                    </div>
                    <a href="#" class="btn btn-outline">Lihat Jadwal & Profil</a>
                </div>

            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Alpha Psikolog. Dibuat dengan Laravel.</p>
        </div>
    </footer>

</body>
</html>
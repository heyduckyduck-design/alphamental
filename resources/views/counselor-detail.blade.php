<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dr. Rian Utama, M.Psi. - Alpha Psikolog</title>

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
            --accent-mint: #d1e7dd;
            --accent-mint-dark: #113829;
            --font-family: 'Inter', sans-serif;
            --max-width: 1000px;
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

        /* Header / Navbar Melayang */
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

        .nav-links a:hover {
            color: var(--text-primary);
        }

        /* Content Container */
        .profile-wrapper {
            padding: 9rem 0 5rem;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        .back-link:hover {
            color: var(--text-primary);
        }

        /* Profile Header Card */
        .profile-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            display: grid;
            grid-template-columns: 140px 1fr;
            gap: 2rem;
            align-items: center;
            margin-bottom: 2rem;
        }

        .avatar-large {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: #ffffff;
            border: 2px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-secondary);
        }

        .profile-title {
            font-size: 1.85rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.25rem;
        }

        .profile-subtitle {
            font-size: 0.95rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .tags-group {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .badge {
            background: #ffffff;
            border: 1px solid var(--border-color);
            padding: 0.3rem 0.85rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text-secondary);
        }

        /* Grid Detail & Booking */
        .details-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .info-box {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-bottom: 1.5rem;
        }

        .info-title {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .info-text {
            color: var(--text-secondary);
            font-size: 0.975rem;
            line-height: 1.7;
        }

        .info-list {
            list-style: none;
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        .info-list li {
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Sidebar Info & Booking Summary */
        .sidebar-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            position: sticky;
            top: 7rem;
        }

        .price-tag {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .price-label {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        /* Form Booking Ringkas */
        .booking-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
            color: var(--text-primary);
        }

        .form-select, .form-input {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            font-family: var(--font-family);
            font-size: 0.9rem;
            outline: none;
        }

        .btn-booking {
            background-color: var(--accent-mint-dark);
            color: #ffffff;
            width: 100%;
            padding: 0.9rem;
            border: none;
            border-radius: var(--radius-md);
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: background-color 0.2s ease;
        }

        .btn-booking:hover {
            background-color: #1a4d38;
        }

        /* Footer */
        .site-footer {
            padding: 3rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-secondary);
            border-top: 1px solid var(--border-color);
        }

        @media (max-width: 800px) {
            .profile-card {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .avatar-large {
                margin: 0 auto;
            }
            .details-grid {
                grid-template-columns: 1fr;
            }
            .tags-group {
                justify-content: center;
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
                        <li><a href="/">Beranda</a></li>
                        <li><a href="{{ route('counselor.search') }}">Cari Konselor</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                    </ul>
                </nav>
                <div>
                    <a href="#" style="font-size: 0.85rem; font-weight: 600; color: var(--text-primary);">Masuk</a>
                </div>
            </div>
        </div>
    </header>

    <div class="profile-wrapper">
        <div class="container">
            
            <!-- Tombol Kembali -->
            <a href="{{ route('counselor.search') }}" class="back-link">
                &larr; Kembali ke daftar konselor
            </a>

            <!-- Header Profil Konselor -->
            <div class="profile-card">
                <div class="avatar-large">DR</div>
                <div>
                    <h1 class="profile-title">Dr. Rian Utama, M.Psi., Psikolog</h1>
                    <p class="profile-subtitle">SIPP: 1234/5678-SIPP/2023 &bull; Lokasi: Jakarta Selatan</p>
                    <div class="tags-group">
                        <span class="badge">Konsultasi Individu</span>
                        <span class="badge">Pengembangan Karir</span>
                        <span class="badge">Manajemen Stres & Kecemasan</span>
                    </div>
                </div>
            </div>

            <!-- Detail Biografi & Form Booking -->
            <div class="details-grid">
                <div>
                    <!-- Deskripsi Tentang Konselor -->
                    <div class="info-box">
                        <h2 class="info-title">Tentang Konselor</h2>
                        <p class="info-text">
                            Dr. Rian Utama adalah seorang psikolog klinis dewasa yang telah berpengalaman mendampingi klien selama lebih dari 6 tahun. Fokus pendekatan utamanya meliputi Cognitive Behavioral Therapy (CBT) untuk menangani isu kecemasan kerja, pengelolaan emosi, burnout, serta bimbingan perencanaan karir.
                        </p>
                    </div>

                    <!-- Latar Belakang Pendidikan & Lisensi -->
                    <div class="info-box">
                        <h2 class="info-title">Pendidikan & Pengalaman</h2>
                        <ul class="info-list">
                            <li>&check; Magister Psikologi Profesi (S2) - Universitas Indonesia</li>
                            <li>&check; Anggota Himpunan Psikologi Indonesia (HIMPSI)</li>
                            <li>&check; Tersertifikasi dalam metode Cognitive Behavioral Therapy (CBT)</li>
                        </ul>
                    </div>

                    <!-- Metode Sesi -->
                    <div class="info-box">
                        <h2 class="info-title">Metode Konsultasi Tersedia</h2>
                        <p class="info-text">
                            &bull; <strong>Tatap Muka (Offline):</strong> Klinik Alpha Psikolog cabang Jakarta Selatan.<br>
                            &bull; <strong>Daring (Online):</strong> Sesi video call interaktif via Zoom / Google Meet.
                        </p>
                    </div>
                </div>

                <!-- Sidebar Box Booking Konselor -->
                <div>
                    <div class="sidebar-card">
                        <div class="price-tag">Rp250.000</div>
                        <p class="price-label">Per sesi konseling (60 Menit)</p>

                        <form action="#" method="POST" class="booking-form">
                            @csrf
                            <div class="form-group">
                                <label for="mode">Mode Konsultasi</label>
                                <select id="mode" class="form-select">
                                    <option value="online">Sesi Online (Video Call)</option>
                                    <option value="offline">Sesi Offline (Tatap Muka)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Pilih Tanggal</label>
                                <input type="date" id="tanggal" class="form-input">
                            </div>

                            <div class="form-group">
                                <label for="jam">Pilih Waktu</label>
                                <select id="jam" class="form-select">
                                    <option value="10:00">10:00 WIB</option>
                                    <option value="14:00">14:00 WIB</option>
                                    <option value="19:00">19:00 WIB</option>
                                </select>
                            </div>

                            <button type="submit" class="btn-booking">
                                Buat Janji Konseling
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Alpha Psikolog. Dibuat dengan Laravel.</p>
        </div>
    </footer>

</body>
</html>
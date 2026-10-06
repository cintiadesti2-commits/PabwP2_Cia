<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f7fb; color: #1f2937; line-height: 1.6; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 16px; }

        header { background: #0b5394; color: #fff; padding: 16px 0; }
        header h1 { margin: 0; font-size: 1.6rem; }
        header p { margin: 2px 0 10px; font-size: .85rem; opacity: .85; }
        nav a { color: #fff; text-decoration: none; margin-right: 8px; padding: 6px 14px; border-radius: 6px; background: rgba(255,255,255,.15); font-size: .9rem; display: inline-block; }
        nav a:hover, nav a.active { background: #fff; color: #0b5394; font-weight: bold; }

        main { padding: 24px 0 40px; min-height: 60vh; }
        .card { background: #fff; border: 1px solid #d9e2ec; border-radius: 8px; padding: 16px; margin: 12px 0; }
        .card h3 { margin-top: 0; }

        label { display: block; margin: 14px 0 4px; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 1px solid #bcccdc; border-radius: 6px; font-size: 1rem; }
        .error-text { color: #c0392b; font-size: .85rem; margin-top: 4px; }

        .btn { display: inline-block; background: #0b5394; color: #fff; border: 0; padding: 10px 20px; border-radius: 6px; font-size: 1rem; cursor: pointer; text-decoration: none; margin-top: 16px; }
        .btn.outline { background: #fff; color: #0b5394; border: 1px solid #0b5394; }

        .badge { display: inline-block; padding: 2px 12px; border-radius: 20px; font-weight: bold; font-size: .85rem; color: #fff; }
        .badge.waspada { background: #2e9e5b; }
        .badge.siaga   { background: #e69500; }
        .badge.awas    { background: #d62828; }

        footer { background: #e4ebf3; text-align: center; padding: 16px 0; font-size: .85rem; color: #52606d; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>LaporBanjir</h1>
            <p>Sistem Pelaporan Banjir &ndash; BPBD Kabupaten Bandung</p>
            <nav>
                <a href="{{ route('banjir.create') }}" class="{{ request()->routeIs('banjir.create', 'banjir.store') ? 'active' : '' }}">Form Lapor</a>
                <a href="{{ route('banjir.index') }}" class="{{ request()->routeIs('banjir.index') ? 'active' : '' }}">Daftar Laporan</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            &copy; 2026 LaporBanjir &ndash; BPBD Kabupaten Bandung &ndash; [Nama Anda]
        </div>
    </footer>
</body>
</html>
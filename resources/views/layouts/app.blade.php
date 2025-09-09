<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
        }

        .sidebar {
            width: 240px;
            min-height: 100vh;
            background-color: #ffe4d6;
            padding: 1rem;
        }

        .sidebar .nav-link {
            background: #f8a979;
            color: #000;
            margin-bottom: 0.5rem;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.6rem 0.8rem;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: #f57c00;
            color: #fff;
        }

        .sidebar .submenu .nav-link {
            background: transparent;
            color: #000;
            margin: 0.2rem 0;
            padding: 0.5rem 1.8rem;
            font-weight: 400;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }

        .sidebar .submenu .nav-link:hover {
            background: #ffd0a8;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-danger" href="#">
                <img src="{{ asset('images/jks_logo.png') }}" alt="JKS Logo" height="40">
            </a>
            <div class="d-flex align-items-center">
                <span class="me-3">Accounts</span>
                <img src="https://i.pravatar.cc/40" class="rounded-circle" alt="user">
            </div>
        </div>
    </nav>

    <!-- Layout -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <nav class="nav flex-column" id="sidebarMenu">
                <a class="nav-link" href="/">
                    <span>Dashboard</span>
                </a>

                <!-- Sales -->
                <a class="nav-link {{ request()->is('rab*') || request()->is('kontrak*') ? 'active' : '' }}"
                    data-bs-toggle="collapse" href="#salesMenu" role="button"
                    aria-expanded="{{ request()->is('rab*') || request()->is('kontrak*') ? 'true' : 'false' }}"
                    aria-controls="salesMenu" >
                    <span>Sales</span>
                </a>
                <div class="collapse submenu {{ request()->is('rab*') || request()->is('kontrak*') ? 'show' : '' }}"
                    id="salesMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link {{ request()->is('rab') ? 'active' : '' }}" href="/rab">
                            Rancangan Anggaran Biaya
                        </a>
                        <a class="nav-link {{ request()->is('kontrak') ? 'active' : '' }}" href="/kontrak">
                            Kontrak Pelanggan Dedicated
                        </a>
                        <a class="nav-link" href="#">Status Log Customer</a>
                        <a class="nav-link" href="#">Form Perubahan Data (Dismantle)</a>
                        <a class="nav-link" href="#">Update Data Customer</a>
                    </nav>
                </div>


                <!-- Marketing -->
                <a class="nav-link" data-bs-toggle="collapse" href="#marketingMenu" role="button" aria-expanded="false"
                    aria-controls="marketingMenu">
                    <span>Marketing</span>
                </a>
                <div class="collapse submenu" id="marketingMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Prospek Pelanggan Baru</a>
                        <a class="nav-link" href="#">Closing Penjualan</a>
                        <a class="nav-link" href="#">Follow Up Pelanggan Aktif</a>
                        <a class="nav-link" href="#">Laporan Penjualan</a>
                    </nav>
                </div>

                <!-- Technical Support -->
                <a class="nav-link" data-bs-toggle="collapse" href="#tsMenu" role="button" aria-expanded="false"
                    aria-controls="tsMenu">
                    <span>Technical Support</span>
                </a>
                <div class="collapse submenu" id="tsMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Troubleshoot</a>
                        <a class="nav-link" href="#">Maintance</a>
                        <a class="nav-link" href="#">Survey</a>
                        <a class="nav-link" href="#">Log Survey</a>
                        <a class="nav-link" href="#">Log Instalasi</a>
                        <a class="nav-link" href="#">Log Dismantle</a>
                        <a class="nav-link" href="#">BAST</a>
                        <a class="nav-link" href="#">UAT CCTV</a>
                        <a class="nav-link" href="#">UAT Internet</a>
                        <a class="nav-link" href="#">Daily Maintance Genset</a>
                    </nav>
                </div>

                <!-- Customer Relations -->
                <a class="nav-link" data-bs-toggle="collapse" href="#crMenu" role="button" aria-expanded="false"
                    aria-controls="crMenu">
                    <span>Customer Relations</span>
                </a>
                <div class="collapse submenu" id="crMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Log Customer Complaint</a>
                        <a class="nav-link" href="#">Log Customer Request</a>
                        <a class="nav-link" href="#">Penjadwalan Visit Customer</a>
                        <a class="nav-link" href="#">Kepuasan Pelanggan</a>
                        <a class="nav-link" href="#">Log Customer Relationhip Status</a>
                    </nav>
                </div>

                <!-- Finance 
                <a class="nav-link" data-bs-toggle="collapse" href="#financeMenu" role="button" aria-expanded="false"
                    aria-controls="financeMenu">
                    <span>Finance</span>
                </a> -->

                <a class="nav-link {{ request()->is('permintaanbbm*') || request()->is('pengajuanbiaya*') ? 'active' : '' }}"
                    data-bs-toggle="collapse" href="#financeMenu" role="button"
                    aria-expanded="{{ request()->is('permintaanbbm*') || request()->is('pengajuanbiaya*') ? 'true' : 'false' }}"
                    aria-controls="financeMenu">
                    <span>Finance</span>
                </a>
                <div class="collapse submenu {{ request()->is('permintaanbbm*') || request()->is('pengajuanbiaya') ? 'show' : '' }}"
                    id="financeMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link {{ request()->is('permintaanbbm') ? 'active' : '' }}" href="/permintaanbbm">
                            Permintaan BBM
                        </a>
                        <a class="nav-link {{ request()->is('pengajuanbiaya') ? 'active' : '' }}" href="/pengajuanbiaya">
                            Pengajuan Biaya
                        </a>
                    </nav>
                </div>  


                <!-- HRD -->
                <a class="nav-link" data-bs-toggle="collapse" href="#hrdMenu" role="button" aria-expanded="false"
                    aria-controls="hrdMenu">
                    <span>HRD</span>
                </a>
                <div class="collapse submenu" id="hrdMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Rekrutmen Seleksi</a>
                        <a class="nav-link" href="#">Orientasi</a>
                        <a class="nav-link" href="#">Pelatihan Pengembangan</a>
                        <a class="nav-link" href="#">Kompensasi Perlindungan Karyawan</a>
                        <a class="nav-link" href="#">Penilaian Karyawan (KPI)</a>
                        <a class="nav-link" href="#">Sistem Pengajian</a>
                        <a class="nav-link" href="#">Hubungan Industrial</a>
                        <a class="nav-link" href="#">Keselamatan Kerja</a>
                        <a class="nav-link" href="#"><em>Sistem Security</em></a>
                        <a class="nav-link" href="#">Sistem Dokumentasi</a>
                        <a class="nav-link" href="#"><em>Legal Compliance</em></a>
                        <a class="nav-link" href="#"><em>General Affair</em></a>
                        <a class="nav-link" href="#">Sistem Manajemen Mutu</a>
                        <a class="nav-link" href="#">Kumpulan Job Description All Dept</a>
                    </nav>
                </div>

                <!-- User Management -->
                <a class="nav-link" data-bs-toggle="collapse" href="#userMenu" role="button" aria-expanded="false"
                    aria-controls="userMenu">
                    <span>User Management</span>
                </a>
                <div class="collapse submenu" id="userMenu" data-bs-parent="#sidebarMenu">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Privilleges</a>
                        <a class="nav-link" href="#">User</a>
                    </nav>
                </div>
            </nav>
        </div>

        <!-- Content -->
        <main class="content p-3 w-100">
            <h4 class="mb-4">@yield('page-title')</h4>
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.collapse').forEach(collapseEl => {
            collapseEl.addEventListener('show.bs.collapse', function() {
                // remove active from all menu induk
                document.querySelectorAll('#sidebarMenu > .nav-link').forEach(link => link.classList.remove('active'));

                // tambahkan active ke link yang mengontrol submenu ini
                let trigger = document.querySelector(`[href="#${this.id}"]`);
                if (trigger) trigger.classList.add('active');
            });

            collapseEl.addEventListener('hide.bs.collapse', function() {
                let trigger = document.querySelector(`[href="#${this.id}"]`);
                if (trigger) trigger.classList.remove('active');
            });
        });
    </script>
</body>

</html>
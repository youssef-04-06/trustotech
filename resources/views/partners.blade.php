<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusto Tech | Admin Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
</head>

<body>
<div class="dashboard-wrapper">

    <!-- Sidebar -->
    <nav class="admin-sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Trusto Logo" class="admin-logo">
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="/admindb">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/message">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Messages</span>
                </a>
            </li>

            <li class="active">
                <a href="{{ route('partners') }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Partners</span>
                </a>
            </li>

            <li>
                <a href="/services">
                    <i class="fa-solid fa-file-code"></i>
                    <span>Programs</span>
                </a>
            </li>

            <li>
                <a href="/settings">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-footer">
            <a href="/index" class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="admin-main">

        <header class="admin-topbar">
            <h4>Partners / Partner Requests</h4>
        </header>

        <div class="p-4">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="dashboard-card">
                <div class="table-responsive">

                    <table class="table admin-table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Submitted At</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse($partners as $partner)
                            <tr>
                                <td>{{ $partner->name }}</td>
                                <td>{{ $partner->email }}</td>
                                <td>{{ $partner->phone }}</td>
                                <td>{{ $partner->company_name }}</td>
                                <td>{{ $partner->location }}</td>
                                <td>{{ $partner->created_at->format('Y-m-d H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    No partner requests yet
                                </td>
                            </tr>
                        @endforelse
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </main>

</div>
</body>
</html>
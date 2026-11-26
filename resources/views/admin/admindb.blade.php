@php
$inquiries=$inquiries ?? collect();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusto Tech | Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
</head>
<body>

    <div class="dashboard-wrapper">
        <nav class="admin-sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Trusto Logo" class="admin-logo">
            </div>
            <ul class="sidebar-menu">
                <li class="active"><a href="{{ url('/admin')}}"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ url('/message')}}"><i class="fa-solid fa-envelope"></i> <span>Messages</span></a></li>
                <li><a href="{{ url('/partners')}}"><i class="fa-solid fa-users"></i> <span>Partners</span></a></li>
                <li><a href="{{ url('/programsdb')}}"><i class="fa-solid fa-file-code"></i> <span>Programs</span></a></li>
                <li><a href="{{ url(path: '/settings')}}"><i class="fa-solid fa-gear"></i> <span>Settings</span></a></li>
            </ul>
            <div class="sidebar-footer">
                <a href="{{ url('/') }}" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span></a>
            </div>
        </nav>

        <main class="admin-main">
          <header class="admin-topbar d-flex justify-content-between align-items-center px-4">
  

    <!-- Welcome and User Profile on the Right -->
    <div class="d-flex align-items-center gap-3">
        <div class="user-profile d-flex align-items-center gap-2">
          <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
    @csrf
    <button type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
    </button>
</form>

        </div>
    </div>

</header>

            <div class="admin-content p-4">
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="stat-card reveal active">
                            <h6>Total Inquiries</h6>
                            <h2>{{ isset($inquiries)?$inquiries->count():'NO DATA' }}</h2>
                            <span class="trend up">+12% this week</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card reveal active">
                            <h6>Active Partners</h6>
                            <h2>32</h2>
                            <span class="trend">Global Reach</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card reveal active">
                            <h6>Live Systems</h6>
                            <h2>18</h2>
                            <span class="trend text-primary">Carrier Grade</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card reveal active">
                            <h6>Security Alerts</h6>
                            <h2>0</h2>
                            <span class="trend text-success">All Systems Secure</span>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card reveal active">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Project Inquiries</h5>
                        <button class="btn btn-sm btn-outline-primary rounded-pill">View All</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
@forelse ($inquiries as $inquiry)
<tr>
    <td>{{ $inquiry->full_name }}</td>
    <td>{{ $inquiry->project_details }}</td>
    <td>
        <span class="badge bg-warning">New</span>
    </td>
    <td>{{ $inquiry->created_at->format('M d, Y') }}</td>
    <td>
        <button class="btn btn-sm btn-primary">Open</button>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center text-muted">
        No inquiries submitted yet
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
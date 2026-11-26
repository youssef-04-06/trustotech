
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
             <li class="active"><a href="{{ url('/admin') }}"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></a></li>
             <li><a href="{{ url('/message')}}"><i class="fa-solid fa-envelope"></i> <span>Messages</span></a></li>
              <li><a href="{{ url('/partners')}}"><i class="fa-solid fa-users"></i> <span>Partners</span></a></li>
                <li><a href="{{ url('/programsdb')}}"><i class="fa-solid fa-file-code"></i> <span>Programs</span></a></li>
                <li><a href="{{ url(path: 'settings')}}"><i class="fa-solid fa-gear"></i> <span>Settings</span></a></li>
         </ul>
         <div class="sidebar-footer">
             <a href="/index" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span></a>
         </div>
     </nav>
<main class="admin-main">
    <header class="admin-topbar">
        <h4>Inbox / Project Inquiries</h4>
    </header>
    <div class="p-4">
        <div class="dashboard-card">
            <div class="table-responsive">
                <table class="table admin-table">
                    <thead>
                        <tr>
                            <th>Sender</th>
                            <th>Email</th>
                            <th>Topic</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
<tbody>
@forelse ($contacts as $contact)
<tr>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->message }}</td>
    <td>
        <span class="badge bg-success">New</span>
    </td>
    <td>
        <a href="mailto:{{ $contact->email }}" class="btn btn-sm btn-primary">
            Reply
        </a>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">No messages yet</td>
</tr>
@endforelse
</tbody>
                </table>
            </div>
        </div>
    </div>
</main>
</body>
</html>
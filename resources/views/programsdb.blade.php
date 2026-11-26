<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Programs</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<style>

/* ===== GLOBAL ===== */
body{
    font-family:'Poppins',sans-serif;
    background:#0f172a;
    color:#e2e8f0;
    margin:0;
}

.section{
    padding:80px 0;
}

/* ===== HERO ===== */
.program-hero{
    background:linear-gradient(135deg,#0f172a,#1e293b);
    padding:140px 0 100px;
    text-align:center;
}

.program-hero h1{
    font-size:3rem;
    font-weight:800;
    color:#fff;
}

.program-hero p{
    color:#94a3b8;
    max-width:600px;
    margin:20px auto 0;
}

/* ===== PROGRAM CARDS ===== */
.program-card{
    background:#1e293b;
    border-radius:20px;
    overflow:hidden;
    transition:0.4s ease;
    position:relative;
    border:1px solid rgba(255,255,255,0.05);
}

.program-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 50px rgba(0,162,255,0.2);
    border-color:#00a2ff;
}

.program-img{
    height:220px;
    background-size:cover;
    background-position:center;
}

.program-content{
    padding:30px;
}

.program-content h3{
    font-weight:700;
    margin-bottom:15px;
    color:#fff;
}

.program-content p{
    font-size:0.9rem;
    color:#94a3b8;
    margin-bottom:20px;
}

.program-btn{
    display:inline-block;
    padding:10px 25px;
    background:#00a2ff;
    color:#fff;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.program-btn:hover{
    background:#0081cc;
    transform:scale(1.05);
}

/* ===== SECTION TITLE ===== */
.section-title{
    text-align:center;
    margin-bottom:60px;
}

.section-title h2{
    font-weight:800;
    color:#fff;
}

.section-title p{
    color:#94a3b8;
}

</style>
</head>

<body>

<!-- HERO -->
<section class="program-hero">
    <div class="container">
        <h1>Our Professional Programs</h1>
        <p>Advanced software solutions built to scale modern businesses securely and efficiently.</p>
    </div>
</section>

<!-- PROGRAMS SECTION -->
<section class="section">
    <div class="container">

        <div class="section-title">
            <h2>Featured Systems</h2>
            <p>Enterprise-grade platforms tailored for performance.</p>
        </div>

        <div class="row g-4">

            <!-- Program 1 -->
            <div class="col-lg-4">
                <div class="program-card">
                    <div class="program-img" style="background-image:url('https://images.unsplash.com/photo-1551288049-bebda4e38f71');"></div>
                    <div class="program-content">
                        <h3>Trusto ERP</h3>
                        <p>Comprehensive enterprise management platform with real-time analytics and cloud integration.</p>
                        <a href="#" class="program-btn">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="col-lg-4">
                <div class="program-card">
                    <div class="program-img" style="background-image:url('https://images.unsplash.com/photo-1581090700227-1e37b190418e');"></div>
                    <div class="program-content">
                        <h3>Online Class</h3>
                        <p>Virtual learning ecosystem with live classrooms and automated performance tracking.</p>
                        <a href="#" class="program-btn">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="col-lg-4">
                <div class="program-card">
                    <div class="program-img" style="background-image:url('https://images.unsplash.com/photo-1599058917765-a780eda07a3e');"></div>
                    <div class="program-content">
                        <h3>Phoenix System</h3>
                        <p>Secure healthcare management system connecting hospitals, pharmacies, and patients.</p>
                        <a href="#" class="program-btn">Learn More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

</body>
</html>
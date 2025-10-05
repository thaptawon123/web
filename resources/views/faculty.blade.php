<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>อาจารย์และบุคลากร - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        /* [วางโค้ด CSS ที่ได้รับการแก้ไขแล้วด้านบนลงในส่วนนี้] */

/* Page specific styles */
.page-body { padding-top: 76px; }

/* Header and Title Enhancement */
.section-header {
    text-align: center;
    margin-bottom: 3rem;
    padding-bottom: 0;
    border-bottom: none;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    position: relative;
    letter-spacing: -0.5px;
}

.section-title::after {
    /* เปลี่ยนจากเส้นตรงเป็นวงกลมเล็กๆ หรือเน้นด้วยสี */
    content: '';
    display: block;
    width: 20px;
    height: 4px;
    /* 🟢 เปลี่ยนเป็นสีเขียว */
    background: var(--primary-green); 
    margin: 0.75rem auto;
    border-radius: 2px;
}

.section-subtitle {
    color: var(--text-muted);
    font-size: 1.2rem;
}

/* Faculty card styles - ปรับปรุงการ์ด */
.faculty-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
    gap: 3rem;
    margin-bottom: 3rem;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.faculty-card {
    text-align: center;
    padding: 2rem 1.5rem;
    background: var(--bg-primary);
    border-radius: 16px;
    /* 🟢 Soft Shadow - ใช้สีเขียว */
    box-shadow: 0 10px 30px rgba(8, 177, 30, 0.08); 
    border: none;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
}

.faculty-card:hover {
    transform: translateY(-8px);
    /* 🟢 Shadow เข้มขึ้น - ใช้สีเขียว */
    box-shadow: 0 20px 40px rgba(8, 177, 30, 0.15); 
}

.faculty-image {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    object-fit: cover;
    margin: 0 auto 1.5rem;
    display: block;
    /* 🟢 เน้นขอบด้วยสีหลัก - เปลี่ยนเป็นสีเขียว */
    border: 5px solid var(--primary-green); 
    box-shadow: 0 0 0 5px var(--bg-primary);
    transition: all 0.3s ease;
}

.faculty-image:hover {
    transform: scale(1.05);
    /* 🟢 เน้นสีหลัก - เปลี่ยนเป็นสีเขียว */
    border-color: var(--primary-green);
}

.faculty-name {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.25rem;
}

.faculty-position {
    /* 🟢 เน้นตำแหน่งด้วยสีหลัก - เปลี่ยนเป็นสีเขียว */
    color: var(--primary-green); 
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.faculty-degree {
    color: var(--text-muted);
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

.faculty-bio {
    color: var(--text-secondary);
    line-height: 1.6;
    font-style: italic;
    flex: 1;
    display: flex;
    align-items: center;
    font-size: 0.9rem;
    padding-top: 1rem;
    border-top: 1px dashed var(--border-light);
    width: 100%;
}

.faculty-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
}

/* Media Queries */
@media (max-width: 768px) {
    .faculty-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }
}
@media (max-width: 480px) {
    .section-title {
        font-size: 2rem;
    }
}

    </style>
</head>
<body>
    <div class="topbar">
        <div class="topbar-content">
            <div class="nav-links">
                <a href="/" class="nav-link">หน้าหลัก</a>
                <a href="/programs" class="nav-link">หลักสูตร</a>
                <a href="/faculty" class="nav-link active" style="color: var(--primary-green);">คณาจารย์</a> <a href="/research" class="nav-link">งานวิจัย</a>
                <a href="/news" class="nav-link">ข่าวสาร</a>
            </div>
            <div class="topbar-right">
                @auth
                    <span style="color: var(--text-secondary); margin-right: 1rem;">สวัสดี, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/logout" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: #6b7280;">ออกจากระบบ</button>
                    </form>
                @else
                    <a href="/login" class="btn" style="background: #10b981; border-color: #059669;">เข้าสู่ระบบ</a> 
                @endauth
                <a href="/admin" class="btn btn-secondary">จัดการ</a>
            </div>
        </div>
    </div>
    <div class="container page-body">
        <div class="section-header">
            <h1 class="section-title">อาจารย์และบุคลากร</h1>
            <p class="section-subtitle">ทีมงานประจำสาขาวิชา Software Engineering</p>
        </div>
<section>
    <div class="section-header">
        <h2 class="section-title">อาจารย์ประจำหลักสูตร</h2>
        <p class="section-subtitle">คณาจารย์ผู้เชี่ยวชาญด้าน Software Engineering</p>
    </div>

 @php
    // ข้อมูลอาจารย์จาก มรภ. นครปฐม ที่คุณต้องการเพิ่ม
    $faculties = [
        (object)[
            'name' => 'อาจารย์ ดร. วรเชษฐ์ อุทธา', 
            'position' => 'ประธานสาขาวิชา', 
            'degree' => 'Dr. Worachet Uttha', 
            'email' => 'wuttha@webmail.npru.ac.th', 
            'image' => '/images/faculty/j3.png',
            'bio' => ''
        ],
        (object)[
            'name' => 'ผศ.ดร. อุษณีย์ ภักดีตระกูลวงศ์', 
            'position' => 'อาจารย์ / รองประธานฯ ฝ่ายวิชาการ', 
            'degree' => 'Dr. Udsanee Pakdeetrakulwong', 
            'email' => 'udsanee@webmail.npru.ac.th', 
            'image' => '/images/faculty/j4.png',
            'bio' => ''
        ],
        (object)[
    'name' => 'ผศ. นฤพล สุวรรณวิจิตร', 
    'position' => 'อาจารย์ / รองประธานฯ ฝ่ายประกันคุณภาพฯ', 
    'degree' => 'Ph.D. Naruapon Suwanwijit', 
    'email' => 'naruapon@webmail.npru.ac.th', 
    // เปลี่ยน C:\xampp\htdocs\web2\public\images\faculty\j1.png
    // เป็น Path ที่เริ่มต้นจากรากของเว็บไซต์ (public folder)
    'image' => '/images/faculty/j1.png', 
    'bio' => ''
],
        // ... อาจารย์ท่านอื่นๆ ที่เหลือ
        (object)[
            'name' => 'อาจารย์ สุพิฌาย์ จันทร์เรือง', 
            'position' => 'อาจารย์ / รองประธานฯ ฝ่ายกิจการนักศึกษา', 
            'degree' => 'Suphitcha Chanrueang', 
            'email' => 'suphitcha@webmail.npru.ac.th', 
            'image' => '/images/faculty/j5.jpg',
            'bio' => ''
        ],
        (object)[
            'name' => 'ผศ. สมเกียรติ ช่อเหมือน', 
            'position' => 'อาจารย์ / รองประธานฯ ฝ่ายนโยบายและแผน', 
            'degree' => 'Somkiat Chormuan', 
            'email' => 'tko@webmail.npru.ac.th', 
            'image' => '/images/faculty/j2.png',
            'bio' => ''
        ],
        (object)[
            'name' => 'ผศ. สุธารัตน์ ชาวนาฟาง', 
            'position' => 'อาจารย์', 
            'degree' => 'Sutarat Chaonafang (ลาศึกษาต่อปริญญาเอก)', 
            'email' => 'sutarat@webmail.npru.ac.th', 
            'image' => '/images/faculty/j6.png',
            'bio' => ''
        ],
    ];
@endphp
    <div class="faculty-grid">
        @forelse($faculties as $faculty)
        <div class="faculty-card">
            @if($faculty->image)
                <img src="{{ $faculty->image }}" alt="{{ $faculty->name }}" class="faculty-image" onerror="this.src='https://ui-avatars.com/api/?name=' + encodeURIComponent('{{ $faculty->name }}'.replace(' ', '+')) + '&size=120&rounded=true&background=059669&color=ffffff'"/>
            @else
                <img src="https://ui-avatars.com/api/?name={{ urlencode(str_replace(' ', '+', $faculty->name)) }}&size=120&rounded=true&background=059669&color=ffffff" alt="{{ $faculty->name }}" class="faculty-image" />
            @endif
            <div class="faculty-content">
                <div>
                    <h3 class="faculty-name">{{ $faculty->name }}</h3>
                    @if(isset($faculty->position))
                        <div class="faculty-position">{{ $faculty->position }}</div>
                    @endif
                    @if(isset($faculty->degree))
                        <div class="faculty-degree">{{ $faculty->degree }}</div>
                    @endif
                </div>
                @if(isset($faculty->bio))
                    <div class="faculty-bio">{{ $faculty->bio }}</div>
                @endif
            </div>
        </div>
        @empty
        <div class="faculty-card">
            <p>No faculty members found in the database.</p>
        </div>
        @endforelse
    </div>
</section>
</body>
</html>
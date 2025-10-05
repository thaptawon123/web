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
        /* Page specific styles */
        .page-body { padding-top: 76px; }
        
        .section-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--border-medium);
        }
        
        .section-title {
            font-size: 2rem;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--primary-red);
            margin: 0.5rem auto;
            border-radius: 2px;
        }
        
        .section-subtitle {
            color: var(--text-muted);
            font-size: 1.1rem;
        }
        
        /* Faculty card styles */
        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .faculty-card {
            text-align: center;
            padding: 1.5rem;
            background: var(--bg-primary);
            border-radius: 12px;
            box-shadow: 0 4px 12px var(--shadow-light);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            min-width: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }
        
        .faculty-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px var(--shadow-medium);
        }
        
        .faculty-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem;
            display: block;
            border: 4px solid var(--border-light);
            box-shadow: 0 4px 12px var(--shadow-light);
            transition: all 0.3s ease;
        }
        
        .faculty-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px var(--shadow-medium);
            border-color: var(--primary-red);
        }
        
        .faculty-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        
        .faculty-position {
            color: var(--primary-red);
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .faculty-degree {
            color: var(--text-muted);
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .faculty-bio {
            color: var(--text-secondary);
            line-height: 1.6;
            flex: 1;
            display: flex;
            align-items: center;
        }
        
        .faculty-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        @media (max-width: 768px) {
            .faculty-image {
                width: 100px;
                height: 100px;
            }
            
            .faculty-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .faculty-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .faculty-image {
                width: 90px;
                height: 90px;
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
                <a href="/faculty" class="nav-link active">คณาจารย์</a>
                <a href="/research" class="nav-link">งานวิจัย</a>
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
                    <a href="/login" class="btn">เข้าสู่ระบบ</a>
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
                <img src="{{ $faculty->image }}" alt="{{ $faculty->name }}" class="faculty-image" onerror="this.src='https://ui-avatars.com/api/?name=' + encodeURIComponent('{{ $faculty->name }}'.replace(' ', '+')) + '&size=120&rounded=true&background=4e73df&color=ffffff'"/>
            @else
                <img src="https://ui-avatars.com/api/?name={{ urlencode(str_replace(' ', '+', $faculty->name)) }}&size=120&rounded=true&background=4e73df&color=ffffff" alt="{{ $faculty->name }}" class="faculty-image" />
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
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
        /* ======================================= */
        /* === NEW NAVY & BLUE COLOR PALETTE === */
        /* ======================================= */
        :root {
            /* ใช้ค่าสีหลักจากหน้า Home: Deep Navy และ Sky Blue */
            --primary-navy: #1E3A8A; /* Deep Navy Blue (New Main Color) */
            --primary-blue: #3B82F6; /* Light Sky Blue (New Accent Color) */
            --bg-secondary: #F8F9FA; /* Light Gray Background */
            --text-primary: var(--primary-navy);
            --text-muted: #6B7280;
            --shadow-subtle: rgba(0, 0, 0, 0.05);
            --border-light: #E5E7EB;
        }

        /* Page specific styles */
        body {
            background-color: var(--bg-secondary);
        }
        .page-body { 
            padding-top: 76px; 
        }

        /* Section Header Styles */
        .section-header {
            text-align: center;
            margin-bottom: 3rem; /* เพิ่มช่องไฟด้านล่าง */
            padding-bottom: 0; /* ลบ padding-bottom ที่ไม่จำเป็น */
            border-bottom: none; /* ลบเส้นใต้ที่ซ้ำซ้อนออก */
        }
        
        .section-title {
            font-size: 2.2rem;
            color: var(--primary-navy); /* ใช้ Navy Blue */
            margin-bottom: 0.5rem;
            font-weight: 800; /* เน้นความหนา */
            position: relative;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 80px; /* ขยายความกว้าง */
            height: 5px; /* ขยายความหนา */
            background: var(--primary-blue); /* ใช้ Sky Blue */
            margin: 0.75rem auto 0; /* จัดระยะห่าง */
            border-radius: 2px;
        }
        
        .section-subtitle {
            color: var(--text-muted);
            font-size: 1.1rem;
        }
        
        /* Faculty grid styles */
        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .faculty-card {
            text-align: center;
            padding: 1.5rem;
            background: white; /* ใช้สีขาวให้ตัดกับพื้นหลังเทาอ่อน */
            border-radius: 12px;
            box-shadow: 0 4px 12px var(--shadow-subtle);
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
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-blue); /* เปลี่ยนเป็น Sky Blue */
        }
        
        /* Faculty Image Styles */
        .faculty-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.25rem;
            display: block;
            border: 4px solid var(--primary-blue); /* ใช้ Sky Blue เป็นขอบหลัก */
            box-shadow: 0 4px 12px var(--shadow-subtle);
            transition: all 0.3s ease;
        }
        
        .faculty-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-navy); /* เปลี่ยนเป็น Navy Blue เมื่อ Hover */
        }
        
        .faculty-name {
            font-size: 1.25rem; /* ขยายขนาดชื่อ */
            font-weight: 700;
            color: var(--primary-navy); /* ใช้ Navy Blue */
            margin-bottom: 0.25rem; /* ลดช่องว่าง */
        }
        
        .faculty-position {
            color: var(--primary-blue); /* ใช้ Sky Blue */
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .faculty-degree {
            color: var(--text-muted);
            margin-bottom: 1rem;
            font-size: 0.9rem;
            font-style: italic;
        }
        
        /* Content Flexing */
        .faculty-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .faculty-bio {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-top: 1rem;
            font-size: 0.95rem;
            text-align: left;
            border-top: 1px dashed var(--border-light);
            padding-top: 1rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
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
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="topbar-content">
            <div style="display:flex; align-items:center; gap:1rem;">
                <a href="/" style="display:inline-block">
                    <img src="https://software-engineering-npru.vercel.app/logo.png" alt="SE Logo" style="height:44px; object-fit:contain;" />
                </a>
                <div class="nav-links">
                    <a href="/" class="nav-link">หน้าหลัก</a>
                    <a href="/programs" class="nav-link">หลักสูตร</a>
                    <a href="/faculty" class="nav-link active">คณาจารย์</a>
                    <a href="/research" class="nav-link">งานวิจัย</a>
                    <a href="/news" class="nav-link">ข่าวสาร</a>
                </div>
            </div>
            <div class="topbar-right">
                @auth
                    <span style="color: var(--text-secondary); margin-right: 1rem;">สวัสดี, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/logout" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: #6b7280;">ออกจากระบบ</button>
                    </form>
                @else
                    <a href="/login" class="btn" style="background: var(--primary-navy);">เข้าสู่ระบบ</a>
                @endauth
                <a href="/admin" class="btn btn-secondary" style="background: var(--primary-blue);">จัดการ</a>
            </div>
        </div>
    </div>
    
    <div class="container page-body">
        <div class="section-header">
            <h1 class="section-title">ทีมงานสาขาวิชา Software Engineering</h1>
            <p class="section-subtitle">คณาจารย์และบุคลากรผู้ขับเคลื่อนคุณภาพการศึกษา</p>
        </div>

        <section>
            <div class="section-header" style="margin-bottom: 2rem;">
                <h2 class="section-title" style="font-size: 1.8rem;">อาจารย์ประจำหลักสูตร</h2>
                <p class="section-subtitle">คณาจารย์ผู้เชี่ยวชาญด้าน Software Engineering</p>
            </div>

            @php
                // ข้อมูลอาจารย์จาก มรภ. นครปฐม (ข้อมูลเดิมที่ผู้ใช้ส่งมา)
                $faculties = [
                    (object)[
                        'name' => 'อาจารย์ ดร. วรเชษฐ์ อุทธา', 
                        'position' => 'ประธานสาขาวิชา', 
                        'degree' => 'Dr. Worachet Uttha', 
                        'email' => 'wuttha@webmail.npru.ac.th', 
                        'image' => '/images/faculty/j3.png',
                        'bio' => 'มีความเชี่ยวชาญด้านการจัดการโครงการซอฟต์แวร์และโครงสร้างข้อมูล'
                    ],
                    (object)[
                        'name' => 'ผศ.ดร. อุษณีย์ ภักดีตระกูลวงศ์', 
                        'position' => 'อาจารย์ / รองประธานฯ ฝ่ายวิชาการ', 
                        'degree' => 'Dr. Udsanee Pakdeetrakulwong', 
                        'email' => 'udsanee@webmail.npru.ac.th', 
                        'image' => '/images/faculty/j4.png',
                        'bio' => 'เชี่ยวชาญด้านการพัฒนาแอปพลิเคชันบนมือถือและการประมวลผลข้อมูลขนาดใหญ่'
                    ],
                    (object)[
                        'name' => 'ผศ. นฤพล สุวรรณวิจิตร', 
                        'position' => 'อาจารย์ / รองประธานฯ ฝ่ายประกันคุณภาพฯ', 
                        'degree' => 'Ph.D. Naruapon Suwanwijit', 
                        'email' => 'naruapon@webmail.npru.ac.th', 
                        'image' => '/images/faculty/j1.png', 
                        'bio' => 'เชี่ยวชาญด้านปัญญาประดิษฐ์ (AI) และการเรียนรู้ของเครื่อง (Machine Learning)'
                    ],
                    (object)[
                        'name' => 'อาจารย์ สุพิฌาย์ จันทร์เรือง', 
                        'position' => 'อาจารย์ / รองประธานฯ ฝ่ายกิจการนักศึกษา', 
                        'degree' => 'Suphitcha Chanrueang', 
                        'email' => 'suphitcha@webmail.npru.ac.th', 
                        'image' => '/images/faculty/j5.jpg',
                        'bio' => 'มีความสามารถในการออกแบบ UX/UI และการพัฒนาเว็บไซต์เชิงปฏิสัมพันธ์'
                    ],
                    (object)[
                        'name' => 'ผศ. สมเกียรติ ช่อเหมือน', 
                        'position' => 'อาจารย์ / รองประธานฯ ฝ่ายนโยบายและแผน', 
                        'degree' => 'Somkiat Chormuan', 
                        'email' => 'tko@webmail.npru.ac.th', 
                        'image' => '/images/faculty/j2.png',
                        'bio' => 'เน้นการพัฒนาซอฟต์แวร์องค์กร และระบบฐานข้อมูล'
                    ],
                    (object)[
                        'name' => 'ผศ. สุธารัตน์ ชาวนาฟาง', 
                        'position' => 'อาจารย์', 
                        'degree' => 'Sutarat Chaonafang (ลาศึกษาต่อปริญญาเอก)', 
                        'email' => 'sutarat@webmail.npru.ac.th', 
                        'image' => '/images/faculty/j6.png',
                        'bio' => 'กำลังศึกษาต่อในสาขาที่เกี่ยวข้องกับ Big Data และ Cloud Computing'
                    ],
                ];
            @endphp

            <div class="faculty-grid">
                @forelse($faculties as $faculty)
                <div class="faculty-card">
                    @if($faculty->image)
                        <img src="{{ $faculty->image }}" alt="{{ $faculty->name }}" class="faculty-image" onerror="this.src='https://ui-avatars.com/api/?name=' + encodeURIComponent('{{ $faculty->name }}'.replace(' ', '+')) + '&size=120&rounded=true&background=1E3A8A&color=ffffff'"/>
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(str_replace(' ', '+', $faculty->name)) }}&size=120&rounded=true&background=1E3A8A&color=ffffff" alt="{{ $faculty->name }}" class="faculty-image" />
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
                        @if(isset($faculty->bio) && $faculty->bio)
                            <div class="faculty-bio">
                                <strong>ความเชี่ยวชาญ:</strong> {{ $faculty->bio }}
                            </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="faculty-card">
                    <p>ไม่พบรายชื่ออาจารย์ในระบบ</p>
                </div>
                @endforelse
            </div>
        </section>

        <hr style="border-top: 2px solid var(--border-light); margin: 3rem 0;">

        <section>
            <div class="section-header" style="margin-bottom: 2rem;">
                <h2 class="section-title" style="font-size: 1.8rem;">บุคลากรสายสนับสนุน</h2>
                <p class="section-subtitle">ผู้ช่วยด้านธุรการและประสานงาน</p>
            </div>
            
            @php
                $staffs = [
                    (object)[
                        'name' => 'นางสาว รุ่งทิวา แก้วอินทร์', 
                        'position' => 'เจ้าหน้าที่บริหารงานทั่วไป', 
                        'degree' => 'Ruangtiwa Kaewin', 
                        'image' => '/images/staff/staff1.png', 
                        'bio' => 'ผู้ประสานงานหลักสูตรและงานเอกสาร'
                    ],
                    // เพิ่มบุคลากรคนอื่นๆ ที่นี่
                ];
            @endphp

            <div class="faculty-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 350px)); max-width: 800px; margin: 0 auto;">
                @forelse($staffs as $staff)
                <div class="faculty-card">
                    @if($staff->image)
                        <img src="{{ $staff->image }}" alt="{{ $staff->name }}" class="faculty-image" onerror="this.src='https://ui-avatars.com/api/?name=' + encodeURIComponent('{{ $staff->name }}'.replace(' ', '+')) + '&size=120&rounded=true&background=3B82F6&color=ffffff'"/>
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(str_replace(' ', '+', $staff->name)) }}&size=120&rounded=true&background=3B82F6&color=ffffff" alt="{{ $staff->name }}" class="faculty-image" />
                    @endif
                    <div class="faculty-content">
                        <div>
                            <h3 class="faculty-name">{{ $staff->name }}</h3>
                            <div class="faculty-position" style="color: var(--primary-navy);">{{ $staff->position }}</div>
                        </div>
                        @if(isset($staff->bio) && $staff->bio)
                            <div class="faculty-bio" style="border-top-color: var(--primary-blue);">
                                <strong>หน้าที่:</strong> {{ $staff->bio }}
                            </div>
                        @endif
                    </div>
                </div>
                @empty
                <p class="text-center">ไม่พบรายชื่อบุคลากรสายสนับสนุน</p>
                @endforelse
            </div>
        </section>
    </div>
</body>
</html>
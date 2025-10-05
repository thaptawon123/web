<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - สาขาวิชา Software Engineering</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
    </noscript>

    <style>
        /* Page specific overrides */
        .page-body {
            padding-top: 76px;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Section padding for anchor links */
        section[id] {
            scroll-margin-top: 20px;
        }

        /* Enhanced news/activity cards */
        .news-card {
            background: var(--bg-primary);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px var(--shadow-light);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px var(--shadow-medium);
            border-color: var(--primary-red-border);
        }

        .news-card-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-bottom: 2px solid var(--border-light);
        }

        .news-card-image.placeholder {
            background: linear-gradient(135deg, var(--primary-red-light) 0%, var(--bg-secondary) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
            font-size: 1.5rem;
            font-weight: 700;
        }

        .news-card-content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .news-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0 0 0.75rem 0;
            flex: 1;
        }

        .news-card-date {
            display: inline-block;
            background: var(--primary-red-light);
            color: var(--primary-red);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            align-self: flex-start;
        }

        .news-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.5;
        }

        .news-card-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 600;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .news-card-link:hover {
            text-decoration: underline;
        }

        /* Faculty image styling */
        .faculty-avatar {
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

        .faculty-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px var(--shadow-medium);
            border-color: var(--primary-red);
        }

        .faculty-card {
            text-align: center;
            padding: 1rem;
            background: var(--bg-primary);
            border-radius: 12px;
            box-shadow: 0 4px 12px var(--shadow-light);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            width: 160px;
        }

        .faculty-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px var(--shadow-medium);
        }

        .faculty-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .faculty-position {
            color: var(--primary-red);
            font-weight: 600;
            font-size: 0.9rem;
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
                    <a href="/" class="nav-link active">หน้าหลัก</a>
                    <a href="/programs" class="nav-link">หลักสูตร</a>
                    <a href="/faculty" class="nav-link">อาจารย์ประจำสาขา</a>
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
                    <a href="/login" class="btn">เข้าสู่ระบบ</a>
                    <a href="/register" class="btn btn-secondary">สมัครสมาชิก</a>
                @endauth
            </div>
        </div>
    </div>

    <div id="home" class="banner-hero">
        <div class="banner-content">
            <h1 style="font-size:3rem; margin-bottom:1rem; font-weight:700; color:var(--text-primary)">Software Engineering</h1>
            <p style="font-size:1.2rem; opacity:0.8; color:var(--text-secondary)">นวัตกรรมและเทคโนโลยีแห่งอนาคต</p>
        </div>
    </div>

    <div class="container page-body">
        <div style="display:flex; align-items:flex-start; gap:1rem;">
            <div style="flex:1;">
                <div class="header">
                    <div>
                        <div class="title">สาขาวิชา Software Engineering</div>
                        <div class="small">ข่าวสารและกิจกรรมของสาขา</div>
                    </div>
                </div>

                <section id="programs" style="margin-top:1.75rem; text-align:center;">
                    <h2 style="font-weight:700; margin-bottom:0.75rem;">หลักสูตรการเรียน</h2>
                    <p style="color:#6b7280; max-width:800px; margin:0 auto;">
                        หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์ เน้นการเรียนรู้เกี่ยวกับกระบวนการผลิตและพัฒนาซอฟต์แวร์อย่างเป็นระบบ การเขียนโปรแกรมคอมพิวเตอร์ การพัฒนาเว็บไซต์และแอปพลิเคชันมือถือ โดยมีจำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 129 หน่วยกิต
                    </p>
                </section>

                <h3 style="margin-top:1rem; display:flex; justify-content:space-between; align-items:center;">
                    <span>การ์ดข่าว/กิจกรรม</span>
                    <a href="/news" class="btn btn-small">ดูทั้งหมด</a>
                </h3>
                <div class="grid grid-3 mt-2">
                    <div class="news-card">
                        <img src="http://pgm.npru.ac.th/se/data/images/moon%20star.png" alt="ประกาศผลคัดเลือกเช่าพื้นที่" class="news-card-image">
                        <div class="news-card-content">
                            <h4>ประกาศผลผู้ได้รับคัดเลือกเช่าพื้นที่ในงานปริญญาบัตร</h4>
                            <div class="news-card-date">26 ก.ย. 2568</div>
                            <p>ประกาศรายชื่อผู้ได้รับการคัดเลือกเช่าพื้นที่เพื่อประกอบการจำหน่ายสินค้าและบริการภายในมหาวิทยาลัยฯ ในวันงานพิธีพระราชทานปริญญาบัตร</p>
                            <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=extmod&sys=sys_news3rd&dat=oldnews&uid_3rd=PR&viewnews=viewnews176&id3rd=176" class="news-card-link">ดูรายละเอียด →</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <div class="news-card-image placeholder">
                            <span>ประชุมวิชาการ</span>
                        </div>
                        <div class="news-card-content">
                            <h4>มรน. จัดการประชุม Morning Talk ครั้งที่ 6/2568</h4>
                            <div class="news-card-date">22 ก.ย. 2568</div>
                            <p>ข่าวประชาสัมพันธ์จาก มหาวิทยาลัยราชภัฏนครปฐม</p>
                            <a href="https://www.npru.ac.th/news.php?type=all" class="news-card-link">ดูรายละเอียด →</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <div class="news-card-image placeholder">
                            <span>ทำบุญ มรน.</span>
                        </div>
                        <div class="news-card-content">
                            <h4>สำนักงานอธิการบดี ร่วมทำบุญมหาวิทยาลัย</h4>
                            <div class="news-card-date">21 ก.ย. 2568</div>
                            <p>สำนักงานอธิการบดี ร่วมกับสำนักศิลปะและวัฒนธรรม จัดทำบุญมหาวิทยาลัยราชภัฏนครปฐม</p>
                            <a href="https://www.npru.ac.th/news.php?type=all" class="news-card-link">ดูรายละเอียด →</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <img src="https://i.ytimg.com/vi/zdRODl64m0A/hq720.jpg" alt="เจาะลึกหลักสูตร" class="news-card-image">
                        <div class="news-card-content">
                            <h4>เจาะลึกหลักสูตรวิศวกรรมซอฟต์แวร์ (ฉบับปรับปรุง 2569)</h4>
                            <div class="news-card-date">28 ส.ค. 2568</div>
                            <p>รายละเอียดหลักสูตรตลอด 4 ปี และอาชีพหลังเรียนจบ #dek69</p>
                            <a href="https://www.youtube.com/watch?v=zdRODl64m0A" class="news-card-link">ดูรายละเอียด →</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <img src="https://i.ytimg.com/vi/jXyZb58_eMo/hq720.jpg" alt="รับสมัครนักศึกษาใหม่" class="news-card-image">
                        <div class="news-card-content">
                            <h4>เปิดรับสมัครนักศึกษาใหม่ ปีการศึกษา 2566</h4>
                            <div class="news-card-date">3 ต.ค. 2565</div>
                            <p>สาขาวิชาวิศวกรรมซอฟต์แวร์ เปิดรับสมัครนักศึกษาใหม่ (รอบที่ 1) ปีการศึกษา 2566</p>
                            <a href="http://reg.npru.ac.th/registrar/apphome.asp" class="news-card-link">ดูรายละเอียด →</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <img src="https://i.ytimg.com/vi/dXbkMR99AcM/hq720.jpg" alt="วิดีโอแนะนำสาขา" class="news-card-image">
                        <div class="news-card-content">
                            <h4>วิดีโอแนะนำสาขาวิชาวิศวกรรมซอฟต์แวร์</h4>
                            <div class="news-card-date">9 ต.ค. 2563</div>
                            <p>เรียนเกี่ยวกับอะไร มีทักษะอะไร และจบไปทำงานอะไรได้บ้าง</p>
                            <a href="https://www.youtube.com/watch?v=dXbkMR99AcM" class="news-card-link">ดูรายละเอียด →</a>
                        </div>
                    </div>
                </div>

                ---
                <section id="faculty" class="section text-center">
                    <div class="flex flex-between mb-2">
                        <h2 class="section-title" style="font-size:1.4rem; margin:0;">อาจารย์ประจำสาขา</h2>
                        <a href="/faculty" class="btn btn-small">ดูทั้งหมด</a>
                    </div>
                    <div class="flex flex-center gap-3" style="flex-wrap:wrap;">
                        <div class="faculty-card">
                            <img src="/images/faculty/j3.png" alt="อาจารย์ ดร. วรเชษฐ์ อุทธา" class="faculty-avatar">
                            <div class="faculty-name">อาจารย์ ดร. วรเชษฐ์ อุทธา</div>
                            <div class="faculty-position">ประธานสาขาวิชาวิศวกรรมซอฟต์แวร์</div>
                        </div>
                        <div class="faculty-card">
                            <img src="/images/faculty/j4.png" alt="อาจารย์ ดร.อุษณีย์ ภักดีตระกูลวงศ์" class="faculty-avatar">
                            <div class="faculty-name">อาจารย์ ดร.อุษณีย์ ภักดีตระกูลวงศ์</div>
                            <div class="faculty-position">รองประธานฯ ฝ่ายวิชาการ</div>
                        </div>
                        <div class="faculty-card">
                            <img src="/images/faculty/j5.jpg" alt="อาจารย์ สุพิฌาย์ จันทร์เรือง" class="faculty-avatar">
                            <div class="faculty-name">อาจารย์ สุพิฌาย์ จันทร์เรือง</div>
                            <div class="faculty-position">รองประธานฯ ฝ่ายกิจการนักศึกษา</div>
                        </div>
                        <div class="faculty-card">
                            <img src="/images/faculty/j2.png" alt="อาจารย์ สมเกียรติ ช่อเหมือน" class="faculty-avatar">
                            <div class="faculty-name">อาจารย์ สมเกียรติ ช่อเหมือน</div>
                            <div class="faculty-position">รองประธานฯ ฝ่ายนโยบายและแผน</div>
                        </div>
                        <div class="faculty-card">
                            <img src="/images/faculty/j1.png" alt="อาจารย์ นฤพล สุวรรณวิจิตร" class="faculty-avatar">
                            <div class="faculty-name">อาจารย์ นฤพล สุวรรณวิจิตร</div>
                            <div class="faculty-position">รองประธานฯ ฝ่ายประกันคุณภาพฯ</div>
                        </div>
                    </div>
                </section>
                ---
            </div>
        </div>

        <script>
            // Simple success message handling
            @if(session('success'))
            alert('{{ session('success') }}');
            @endif
        </script>
    </div>
</body>

</html>
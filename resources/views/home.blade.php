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
        /* ======================================= */
        /* === NEW NAVY & BLUE COLOR PALETTE === */
        /* ======================================= */
        :root {
            --primary-navy: #1E3A8A; /* Deep Navy Blue (New Main Color) */
            --primary-blue: #3B82F6; /* Light Sky Blue (New Accent Color) */
            --primary-light: #EFF6FF; /* Very Light Blue */
            --bg-secondary: #F8F9FA; /* Light Gray Background */
            --text-primary: var(--primary-navy);
            --text-muted: #6B7280;
            --shadow-subtle: rgba(0, 0, 0, 0.05);
        }
        
        /* Global Overrides */
        body {
            background-color: var(--bg-secondary);
        }
        .page-body {
            padding-top: 76px;
        }
        html {
            scroll-behavior: smooth;
        }
        section[id] {
            scroll-margin-top: 20px;
        }

        /* Topbar Adjustment */
        .topbar .btn {
            background: var(--primary-navy) !important;
        }
        .topbar .btn-secondary {
            background: var(--primary-blue) !important;
        }
        .nav-link.active {
            border-bottom-color: var(--primary-blue) !important;
        }

        /* Hero Banner Redesign */
        .banner-hero {
            background: linear-gradient(135deg, var(--primary-navy) 0%, #172554 100%);
            padding: 8rem 0; /* Taller banner */
            color: white;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }
        .banner-hero h1 {
            color: white !important;
            font-size: 3.5rem !important; 
            font-weight: 800 !important;
        }
        .banner-hero p {
            color: #BFDBFE !important; /* Very light accent */
        }

        /* Section Headers */
        .header .title {
             color: var(--primary-navy); 
             font-size: 1.8rem;
             font-weight: 700;
             border-left: 5px solid var(--primary-blue);
             padding-left: 1rem;
             margin-bottom: 0.5rem;
        }
        .header .small {
            padding-left: 1.5rem;
            color: var(--text-muted);
        }
        .section-separator {
            border-top: 1px solid #E5E7EB;
            margin: 3rem 0;
        }

        /* News/Activity Cards Redesign (Cleaner, Date on top) */
        .news-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px var(--shadow-subtle);
            border: 1px solid #E5E7EB;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
        }

        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-blue);
        }

        .news-card-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: none;
        }

        .news-card-image.placeholder {
            background: linear-gradient(135deg, var(--primary-light) 0%, #DBEAFE 100%);
            color: var(--primary-navy);
            font-size: 1.6rem;
        }

        .news-card-content {
            padding: 1.2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        /* Date Style: Text only, above title */
        .news-card-date {
            display: inline-block;
            color: var(--primary-blue);
            padding: 0;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem; 
            align-self: flex-start;
        }

        .news-card h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin: 0 0 0.75rem 0;
            flex: 1;
        }
        
        /* Link Style: Button */
        .news-card-link {
            display: block; /* Make it a full-width button */
            text-align: center;
            background: var(--primary-blue);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 1rem;
            font-size: 0.9rem;
            transition: background 0.2s ease;
        }

        .news-card-link:hover {
            background: var(--primary-navy);
            text-decoration: none;
        }

        /* Faculty Section Redesign (Grid enforced) */
        .faculty-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 2rem;
            padding: 1rem 0;
        }

        /* Avatar Styling (Navy/Blue Ring) */
        .faculty-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem;
            display: block;
            border: 4px solid var(--primary-light);
            box-shadow: 0 0 0 3px var(--primary-blue);
            transition: all 0.3s ease;
        }

        .faculty-avatar:hover {
            transform: scale(1.08);
            box-shadow: 0 0 0 3px var(--primary-navy);
            border-color: white;
        }

        .faculty-card {
            text-align: center;
            padding: 1.5rem 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px var(--shadow-subtle);
            border: 1px solid var(--primary-light);
            transition: all 0.3s ease;
            height: 100%;
        }

        .faculty-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-color: var(--primary-blue);
        }

        .faculty-name {
            font-size: 1rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin-bottom: 0.25rem;
        }

        .faculty-position {
            color: var(--primary-blue);
            font-weight: 600;
            font-size: 0.85rem;
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
                        <button type="submit" class="btn">ออกจากระบบ</button>
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
            <p style="font-size:1.5rem; opacity:0.8; color:#BFDBFE">หลักสูตรวิทยาศาสตรบัณฑิต</p>
            <h1 style="font-size:3.5rem; margin-bottom:1rem; font-weight:800;">วิศวกรรมซอฟต์แวร์</h1>
            <p style="font-size:1.2rem; opacity:0.9; color:#BFDBFE">สร้างนวัตกรรมแห่งอนาคต ด้วยทักษะการพัฒนาระบบที่ทันสมัย</p>
        </div>
    </div>

    <div class="container page-body">
        <div style="display:flex; align-items:flex-start; gap:1rem;">
            <div style="flex:1;">
                <div class="header" style="margin-bottom: 3rem;">
                    <div>
                        <div class="title">สาขาวิชา Software Engineering</div>
                        <div class="small">ข่าวสารและกิจกรรมของสาขา</div>
                    </div>
                </div>

                <section id="programs" style="margin-top:0; padding: 2rem; background: white; border-radius: 10px; box-shadow: 0 4px 12px var(--shadow-subtle); text-align:center;">
                    <h2 style="font-weight:700; margin-bottom:0.75rem; color:var(--primary-navy);">หลักสูตรการเรียน: พัฒนาซอฟต์แวร์อย่างมืออาชีพ</h2>
                    <p style="color:var(--text-muted); max-width:800px; margin:0 auto; font-size:1rem;">
                        หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์ เน้นการเรียนรู้เกี่ยวกับกระบวนการผลิตและพัฒนาซอฟต์แวร์อย่างเป็นระบบ การเขียนโปรแกรมคอมพิวเตอร์ การพัฒนาเว็บไซต์และแอปพลิเคชันมือถือ โดยมีจำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า 129 หน่วยกิต
                    </p>
                    <a href="/programs" class="btn" style="background: var(--primary-blue); margin-top: 1.5rem; display: inline-block;">ดูรายละเอียดหลักสูตร →</a>
                </section>

                <div class="section-separator"></div>

                <div class="flex flex-between" style="margin-bottom: 1.5rem;">
                    <h3 style="font-size:1.4rem; font-weight:700; color:var(--primary-navy);">📰 ข่าวสารและกิจกรรมล่าสุด</h3>
                    <a href="/news" class="btn btn-small" style="background: var(--primary-blue);">ดูทั้งหมด</a>
                </div>
                
                <div class="grid grid-3 mt-2" style="gap: 1.5rem;">
                    <div class="news-card">
                        <img src="http://pgm.npru.ac.th/se/data/images/moon%20star.png" alt="ประกาศผลคัดเลือกเช่าพื้นที่" class="news-card-image">
                        <div class="news-card-content">
                            <div class="news-card-date">26 ก.ย. 2568</div>
                            <h4>ประกาศผลผู้ได้รับคัดเลือกเช่าพื้นที่ในงานปริญญาบัตร</h4>
                            <p>ประกาศรายชื่อผู้ได้รับการคัดเลือกเช่าพื้นที่เพื่อประกอบการจำหน่ายสินค้าและบริการภายในมหาวิทยาลัยฯ ในวันงานพิธีพระราชทานปริญญาบัตร</p>
                            <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=extmod&sys=sys_news3rd&dat=oldnews&uid_3rd=PR&viewnews=viewnews176&id3rd=176" class="news-card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <div class="news-card-image placeholder">
                            <span>ประชุมวิชาการ</span>
                        </div>
                        <div class="news-card-content">
                            <div class="news-card-date">22 ก.ย. 2568</div>
                            <h4>มรน. จัดการประชุม Morning Talk ครั้งที่ 6/2568</h4>
                            <p>ข่าวประชาสัมพันธ์จาก มหาวิทยาลัยราชภัฏนครปฐม</p>
                            <a href="https://www.npru.ac.th/news.php?type=all" class="news-card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <div class="news-card-image placeholder">
                            <span>ทำบุญ มรน.</span>
                        </div>
                        <div class="news-card-content">
                            <div class="news-card-date">21 ก.ย. 2568</div>
                            <h4>สำนักงานอธิการบดี ร่วมทำบุญมหาวิทยาลัย</h4>
                            <p>สำนักงานอธิการบดี ร่วมกับสำนักศิลปะและวัฒนธรรม จัดทำบุญมหาวิทยาลัยราชภัฏนครปฐม</p>
                            <a href="https://www.npru.ac.th/news.php?type=all" class="news-card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <img src="https://i.ytimg.com/vi/zdRODl64m0A/hq720.jpg" alt="เจาะลึกหลักสูตร" class="news-card-image">
                        <div class="news-card-content">
                            <div class="news-card-date">28 ส.ค. 2568</div>
                            <h4>เจาะลึกหลักสูตรวิศวกรรมซอฟต์แวร์ (ฉบับปรับปรุง 2569)</h4>
                            <p>รายละเอียดหลักสูตรตลอด 4 ปี และอาชีพหลังเรียนจบ #dek69</p>
                            <a href="https://www.youtube.com/watch?v=zdRODl64m0A" class="news-card-link">ดูวิดีโอแนะนำ</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <img src="https://i.ytimg.com/vi/jXyZb58_eMo/hq720.jpg" alt="รับสมัครนักศึกษาใหม่" class="news-card-image">
                        <div class="news-card-content">
                            <div class="news-card-date">3 ต.ค. 2565</div>
                            <h4>เปิดรับสมัครนักศึกษาใหม่ ปีการศึกษา 2566</h4>
                            <p>สาขาวิชาวิศวกรรมซอฟต์แวร์ เปิดรับสมัครนักศึกษาใหม่ (รอบที่ 1) ปีการศึกษา 2566</p>
                            <a href="http://reg.npru.ac.th/registrar/apphome.asp" class="news-card-link">สมัครออนไลน์</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <img src="https://i.ytimg.com/vi/dXbkMR99AcM/hq720.jpg" alt="วิดีโอแนะนำสาขา" class="news-card-image">
                        <div class="news-card-content">
                            <div class="news-card-date">9 ต.ค. 2563</div>
                            <h4>วิดีโอแนะนำสาขาวิชาวิศวกรรมซอฟต์แวร์</h4>
                            <p>เรียนเกี่ยวกับอะไร มีทักษะอะไร และจบไปทำงานอะไรได้บ้าง</p>
                            <a href="https://www.youtube.com/watch?v=dXbkMR99AcM" class="news-card-link">ดูวิดีโอแนะนำ</a>
                        </div>
                    </div>
                </div>

                <div class="section-separator"></div>

                <section id="faculty" class="section text-center">
                    <div class="flex flex-between mb-2" style="margin-bottom: 1.5rem !important;">
                        <h3 class="section-title" style="font-size:1.4rem; margin:0; font-weight:700; color:var(--primary-navy);">🧑‍🏫 คณาจารย์ประจำสาขา</h3>
                        <a href="/faculty" class="btn btn-small" style="background: var(--primary-blue);">ดูทั้งหมด</a>
                    </div>
                    
                    <div class="faculty-container">
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
                <div class="section-separator"></div>
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
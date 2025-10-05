<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข่าวสารและกิจกรรม - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        /* Page specific styles */
        .news-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            border: 1px solid #f1f5f9;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
        }
        
        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(239,68,68,0.12);
        }
        
        .news-card .news-image {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
        }

        .news-card .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .news-card .news-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .news-category {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .news-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            line-height: 1.4;
            flex-grow: 1; /* Make title push content down */
        }
        
        .news-excerpt {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .news-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #f1f5f9;
        }
        
        .news-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-muted);
            font-size: 0.85rem;
        }
        
        .news-read-more {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .news-read-more:hover {
            color: var(--primary-red-dark);
        }
        
        .icon {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .grid {
                grid-template-columns: 1fr;
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
                <a href="/faculty" class="nav-link">คณะจารย์</a>
                <a href="/research" class="nav-link">งานวิจัย</a>
                <a href="/news" class="nav-link active">ข่าวสาร</a>
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
        <div class="card text-center" style="margin-bottom: 2rem; padding: 2rem;">
            <h1 class="title-primary">ข่าวสารและกิจกรรม</h1>
            <p class="subtitle">ติดตามความเคลื่อนไหวและกิจกรรมต่าง ๆ ของสาขาวิชา Software Engineering และมหาวิทยาลัยราชภัฏนครปฐม</p>
        </div>

                <div class="grid grid-3" style="gap: 2rem;">
            
            {{-- ข่าวที่ 1: ประกาศผลผู้ได้รับคัดเลือกเช่าพื้นที่ (ข่าว มรภ.) --}}
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);">
                    📜
                </div>
                <div class="news-content">
                    <span class="news-category">ข่าว มรภ. นครปฐม</span>
                    <h3 class="news-title">ประกาศผลผู้ได้รับคัดเลือกเช่าพื้นที่งานพิธีพระราชทานปริญญาบัตร</h3>
                    <p class="news-excerpt">ประกาศรายชื่อผู้ได้รับการคัดเลือกเช่าพื้นที่เพื่อประกอบการจำหน่ายสินค้าและบริการภายในมหาวิทยาลัยฯ ในวันงานพิธีพระราชทานปริญญาบัตร</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            26 กันยายน 2568
                        </span>
                        <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=extmod&sys=sys_news3rd&dat=oldnews&uid_3rd=PR&viewnews=viewnews176&id3rd=176" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 2: มรน. จัดการประชุม Morning Talk (ข่าว มรภ. นครปฐม) --}}
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);">
                    🗣️
                </div>
                <div class="news-content">
                    <span class="news-category">ข่าว มรภ. นครปฐม</span>
                    <h3 class="news-title">มรน. จัดการประชุม Morning Talk ครั้งที่ 6/2568</h3>
                    <p class="news-excerpt">มหาวิทยาลัยราชภัฏนครปฐม จัดการประชุมเพื่อสื่อสารและวางแผนการทำงานระหว่างผู้บริหารและบุคลากร</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            22 กันยายน 2568
                        </span>
                        <a href="https://www.npru.ac.th/news.php?type=all" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 3: สำนักงานอธิการบดี ร่วมทำบุญ (ข่าว มรภ. นครปฐม) --}}
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                    🙏
                </div>
                <div class="news-content">
                    <span class="news-category">ข่าว มรภ. นครปฐม</span>
                    <h3 class="news-title">สำนักงานอธิการบดี ร่วมกับสำนักศิลปะและวัฒนธรรม จัดทำบุญมหาวิทยาลัย</h3>
                    <p class="news-excerpt">กิจกรรมทำบุญมหาวิทยาลัยราชภัฏนครปฐม เพื่อความเป็นสิริมงคล</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            21 กันยายน 2568
                        </span>
                        <a href="https://www.npru.ac.th/news.php?type=all" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 4: เจาะลึกหลักสูตร (แนะนำหลักสูตร) --}}
            <article class="news-card">
                <div class="news-image">
                    <img src="https://i.ytimg.com/vi/zdRODl64m0A/hq720.jpg" alt="ภาพปกวิดีโอหลักสูตร 2569">
                </div>
                <div class="news-content">
                    <span class="news-category" style="background: #3b82f6;">แนะนำหลักสูตร</span>
                    <h3 class="news-title">เจาะลึกหลักสูตรวิศวกรรมซอฟต์แวร์ มรน. (ฉบับปรับปรุง 2569)</h3>
                    <p class="news-excerpt">มาดูกันว่าหลักสูตร 4 ปี จะได้เรียนอะไรบ้าง และเรียนจบแล้วประกอบอาชีพอะไรได้บ้าง</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            28 สิงหาคม 2568
                        </span>
                        <a href="https://www.youtube.com/watch?v=zdRODl64m0A" class="news-read-more">รับชมวิดีโอ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 5: เปิดรับสมัคร (ข่าวรับสมัคร) --}}
            <article class="news-card">
                <div class="news-image">
                    <img src="https://i.ytimg.com/vi/jXyZb58_eMo/hq720.jpg" alt="ภาพปกวิดีโอแนะนำสาขา">
                </div>
                <div class="news-content">
                    <span class="news-category" style="background: #ef4444;">ข่าวรับสมัคร</span>
                    <h3 class="news-title">เปิดรับสมัครนักศึกษาใหม่ (รอบที่ 1) ปีการศึกษา 2566</h3>
                    <p class="news-excerpt">สาขาวิชาวิศวกรรมซอฟต์แวร์ มรภ. นครปฐม เปิดรับสมัครนักศึกษาใหม่ (รอบที่ 1) เริ่มตั้งแต่วันที่ 3 ต.ค. - 15 ธ.ค. 65</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            3 ตุลาคม 2565
                        </span>
                        <a href="http://reg.npru.ac.th/registrar/apphome.asp" class="news-read-more">สมัครออนไลน์</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 6: วิดีโอแนะนำสาขา (แนะนำหลักสูตร) --}}
            <article class="news-card">
                <div class="news-image">
                    <img src="https://i.ytimg.com/vi/dXbkMR99AcM/hq720.jpg" alt="ภาพปกวิดีโอแนะนำสาขา">
                </div>
                <div class="news-content">
                    <span class="news-category" style="background: #3b82f6;">แนะนำหลักสูตร</span>
                    <h3 class="news-title">วิดีโอแนะนำสาขาวิชาวิศวกรรมซอฟต์แวร์ มรน.</h3>
                    <p class="news-excerpt">แนะนำว่าสาขาวิศวกรรมซอฟต์แวร์เรียนเกี่ยวกับอะไร มีทักษะอะไร และจบไปทำงานอะไรได้บ้าง</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            9 ตุลาคม 2563
                        </span>
                        <a href="https://www.youtube.com/watch?v=dXbkMR99AcM" class="news-read-more">รับชมวิดีโอ</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</body>
</html>
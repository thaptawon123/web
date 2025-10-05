<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หลักสูตรการเรียน - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        /* ======================================= */
        /* === NEW NAVY & BLUE COLOR PALETTE === */
        /* ======================================= */
        :root {
            --primary-navy: #1E3A8A; /* Deep Navy Blue */
            --primary-blue: #3B82F6; /* Light Sky Blue */
            --primary-dark-navy: #1C3680; /* Slightly darker Navy for contrast */
            --bg-secondary: #F8F9FA; /* Light Gray Background */
            --text-primary: var(--primary-navy);
            --text-secondary: #4B5563;
        }

        /* Page specific A4 card styles */
        .a4-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            margin: 3rem auto;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15); /* ลดความเข้มของเงา */
            width: 210mm;
            height: 297mm;
            max-width: 90vw;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            border: 3px solid #e5e7eb;
            transform: scale(0.8);
            transform-origin: center;
        }
        
        .a4-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            /* เปลี่ยนจาก Red Gradient เป็น Navy/Blue Gradient */
            background: linear-gradient(90deg, var(--primary-blue) 0%, var(--primary-navy) 100%);
        }
        
        .card-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #f1f5f9;
        }
        
        .card-header h2 {
            margin: 0 0 10px 0;
            color: #1f2937;
            font-size: 2.2rem;
            font-weight: 700;
            /* เปลี่ยนจาก Red Gradient เป็น Navy/Blue Gradient */
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark-navy) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .degree {
            color: var(--primary-blue); /* ใช้ Sky Blue */
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .university {
            color: #6b7280;
            font-size: 1.1rem;
            margin: 0;
        }
        
        .card-content {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin: 20px 0;
        }
        
        .card-section {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            padding: 25px;
            border-radius: 16px;
            /* เปลี่ยน Border Left Color เป็น Sky Blue */
            border-left: 6px solid var(--primary-blue);
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .card-section h4 {
            margin: 0 0 15px 0;
            color: var(--primary-navy); /* ใช้ Navy Blue */
            font-size: 1.2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .card-section ul {
            margin: 10px 0;
            padding-left: 20px;
            color: var(--text-secondary);
        }
        
        .card-footer {
            text-align: center;
            padding: 25px 0 0 0;
            border-top: 3px solid #f1f5f9;
            /* เปลี่ยนจาก Red Gradient เป็น Navy/Blue Gradient */
            background: linear-gradient(135deg, var(--primary-navy) 0%, var(--primary-dark-navy) 100%);
            color: white;
            margin: 20px -40px -40px -40px;
            padding: 25px 40px;
            border-radius: 0 0 13px 13px;
        }
        
        .card-footer h3 {
            margin: 0 0 10px 0;
            font-size: 1.3rem;
            font-weight: 700;
        }
        
        .card-footer p {
            margin: 0;
            opacity: 0.9;
            font-size: 1rem;
        }
        
        .icon {
            width: 22px;
            height: 22px;
            fill: currentColor;
        }
        
        .highlight-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 20px 0;
        }
        
        .stat-item {
            text-align: center;
            background: white;
            padding: 15px;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
        }
        
        .stat-number {
            color: var(--primary-blue); /* ใช้ Sky Blue */
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #6b7280;
            margin: 5px 0 0 0;
        }
        
        .faculty-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-color: var(--primary-blue) !important; /* เปลี่ยน Hover Border เป็น Sky Blue */
        }

        .faculty-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            border-color: var(--primary-navy); /* เปลี่ยน Hover Border เป็น Navy Blue */
        }
        
        /* Responsive and Print Styles remain mostly the same */
        @media (max-width: 1024px) {
            .a4-card { transform: scale(0.7); }
        }
        
        @media (max-width: 768px) {
            .a4-card {
                transform: scale(0.6);
                width: 100vw;
                height: auto;
                min-height: 80vh;
            }
            
            .card-content {
                grid-template-columns: 1fr;
            }
        }
        
        /* Navigation hover effects - Update the Red color reference */
        nav a[style*="background: #ef4444"]:hover {
            background: var(--primary-navy) !important; /* ใช้ Navy Blue */
            color: white !important;
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
                    <a href="/programs" class="nav-link active">หลักสูตร</a>
                    <a href="/faculty" class="nav-link">คณาจารย์</a>
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

    <div class="container">
        <div class="card text-center" style="margin-bottom: 2rem; padding: 2rem; background: var(--bg-secondary); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
            <h1 class="title-primary" style="color: var(--primary-navy); font-size: 2.5rem; margin-bottom: 0.5rem;">หลักสูตรการเรียน</h1>
            <p class="subtitle" style="color: var(--text-secondary); font-size: 1.2rem;">สาขาวิชาวิศวกรรมซอฟต์แวร์ คณะวิศวกรรมศาสตร์</p>
        </div>

        <div class="a4-card">
            <div class="card-header">
                <h2>วิศวกรรมซอฟต์แวร์</h2>
                <div class="degree">วิศวกรรมศาสตรบัณฑิต (วศ.บ.)</div>
                <p class="university">สาขาวิชาวิศวกรรมซอฟต์แวร์ คณะวิศวกรรมศาสตร์</p>
            </div>

            <div class="highlight-stats">
                <div class="stat-item">
                    <div class="stat-number">132</div>
                    <div class="stat-label">หน่วยกิต</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4</div>
                    <div class="stat-label">ปีการศึกษา</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">มีงานทำ</div>
                </div>
            </div>

            <div class="card-content">
                <div class="card-section">
                    <h4>
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M16,20H20V16H16M16,14H20V10H16M10,8H14V4H10M16,8H20V4H16M10,14H14V10H10M4,14H8V10H4M4,20H8V16H4M10,20H14V16H10M4,8H8V4H4V8Z"/>
                        </svg>
                        วิชาเฉพาะหลัก
                    </h4>
                    <ul>
                        <li>การเขียนโปรแกรมคอมพิวเตอร์</li>
                        <li>โครงสร้างข้อมูลและอัลกอริทึม</li>
                        <li>การออกแบบและพัฒนาซอฟต์แวร์</li>
                        <li>วิศวกรรมความต้องการ</li>
                        <li>การทดสอบและคุณภาพซอฟต์แวร์</li>
                        <li>การจัดการโครงการซอฟต์แวร์</li>
                        <li>ฐานข้อมูลและระบบข้อมูล</li>
                        <li>เครือข่ายและความปลอดภัย</li>
                    </ul>
                </div>

                <div class="card-section">
                    <h4>
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M11,17H13V11H11V17M11,9H13V7H11V9Z"/>
                        </svg>
                        ทักษะที่ได้รับ
                    </h4>
                    <ul>
                        <li>พัฒนาแอปพลิเคชันเว็บและมือถือ</li>
                        <li>การใช้เครื่องมือพัฒนาสมัยใหม่</li>
                        <li>การทำงานเป็นทีมและบริหารโครงการ</li>
                        <li>การแก้ไขปัญหาเชิงระบบ</li>
                        <li>การวิเคราะห์และออกแบบระบบ</li>
                        <li>การนำเสนอและสื่อสาร</li>
                        <li>การเรียนรู้เทคโนโลยีใหม่</li>
                        <li>ความคิดสร้างสรรค์และนวัตกรรม</li>
                    </ul>
                </div>

                <div class="card-section">
                    <h4>
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M20,6C20.58,6 21.05,6.2 21.42,6.59C21.8,7 22,7.45 22,8V19C22,19.55 21.8,20 21.42,20.41C21.05,20.8 20.58,21 20,21H4C3.42,21 2.95,20.8 2.58,20.41C2.2,20 2,19.55 2,19V8C2,7.45 2.2,7 2.58,6.59C2.95,6.2 3.42,6 4,6H8V4C8,3.42 8.2,2.95 8.58,2.58C8.95,2.2 9.42,2 10,2H14C14.58,2 15.05,2.2 15.42,2.58C15.8,2.95 16,3.42 16,4V6H20M4,8V19H20V8H4M10,4V6H14V4H10Z"/>
                        </svg>
                        อาชีพหลังสำเร็จการศึกษา
                    </h4>
                    <ul>
                        <li>นักพัฒนาซอฟต์แวร์ (Software Developer)</li>
                        <li>วิศวกรระบบ (System Engineer)</li>
                        <li>นักวิเคราะห์ระบบ (System Analyst)</li>
                        <li>ผู้จัดการโครงการ IT (IT Project Manager)</li>
                        <li>ที่ปรึกษาเทคโนโลยี (Technology Consultant)</li>
                        <li>ผู้ประกอบการสตาร์ทอัพ (Startup Entrepreneur)</li>
                        <li>นักวิจัยและพัฒนา (R&D Specialist)</li>
                        <li>ผู้เชี่ยวชาญด้านความปลอดภัย (Security Expert)</li>
                    </ul>
                </div>

                <div class="card-section">
                    <h4>
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/>
                        </svg>
                        โครงสร้างหลักสูตร
                    </h4>
                    <ul>
                        <li>หมวดศึกษาทั่วไป: 30 หน่วยกิต</li>
                        <li>หมวดวิชาเฉพาะ: 96 หน่วยกิต</li>
                        <li>- วิชาพื้นฐาน: 18 หน่วยกิต</li>
                        <li>- วิชาแกน: 54 หน่วยกิต</li>
                        <li>- วิชาเลือก: 24 หน่วยกิต</li>
                        <li>หมวดวิชาเลือกเสรี: 6 หน่วยกิต</li>
                        <li>**รวมทั้งหมด: 132 หน่วยกิต**</li>
                    </ul>
                </div>
            </div>

            <div class="section text-center" style="margin: 2rem 0; padding: 1.5rem 0; border-top: 2px solid #f1f5f9; border-bottom: 2px solid #f1f5f9;">
                <div style="margin-bottom: 1.5rem;">
                    <h2 class="section-title" style="font-size: 1.5rem; margin: 0 0 0.5rem 0; color: var(--primary-navy);">อาจารย์พิเศษรับเชิญ</h2>
                    <p class="section-subtitle" style="color: var(--text-secondary); margin: 0;">ผู้เชี่ยวชาญจากภาคอุตสาหกรรมร่วมถ่ายทอดประสบการณ์</p>
                </div>

                <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                    <div class="faculty-card" style="text-align: center; padding: 1rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; width: 160px;">
                        <img src="https://picsum.photos/seed/f16/300/300" alt="อาจารย์พิเศษ" class="faculty-avatar" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin: 0 auto 1rem; display: block; border: 3px solid var(--primary-blue); box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        <div class="faculty-name" style="font-size: 1.1rem; font-weight: 700; color: var(--primary-navy); margin-bottom: 0.25rem;">อ.ดร. ณัฐพล พัฒน์ชัย</div>
                        <div class="faculty-position" style="color: var(--primary-blue); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem;">อาจารย์พิเศษ</div>
                        <div class="faculty-degree" style="color: #6b7280; font-size: 0.8rem;">Ph.D. Computer Science</div>
                        <div class="faculty-bio" style="color: #4b5563; font-size: 0.8rem; margin-top: 0.5rem; line-height: 1.4;">เชี่ยวชาญด้านปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร มีประสบการณ์ในการวิจัยด้าน Deep Learning</div>
                    </div>

                    <div class="faculty-card" style="text-align: center; padding: 1rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; width: 160px;">
                        <img src="https://picsum.photos/seed/f17/300/300" alt="อาจารย์พิเศษ" class="faculty-avatar" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin: 0 auto 1rem; display: block; border: 3px solid var(--primary-blue); box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        <div class="faculty-name" style="font-size: 1.1rem; font-weight: 700; color: var(--primary-navy); margin-bottom: 0.25rem;">ผศ. ศิริพร มงคลชัย</div>
                        <div class="faculty-position" style="color: var(--primary-blue); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem;">อาจารย์พิเศษ</div>
                        <div class="faculty-degree" style="color: #6b7280; font-size: 0.8rem;">M.Sc. Information Security</div>
                        <div class="faculty-bio" style="color: #4b5563; font-size: 0.8rem; margin-top: 0.5rem; line-height: 1.4;">เชี่ยวชาญด้านความปลอดภัยของข้อมูลและการป้องกันระบบเครือข่าย</div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <h3>🎓 เริ่มต้นอนาคตที่สดใสกับเรา</h3>
                <p>คณะวิศวกรรมศาสตร์ | มหาวิทยาลัย | ปีการศึกษา 2568<br>
                📧 se@university.ac.th | 📞 02-xxx-xxxx | 🌐 www.se.university.ac.th</p>
                
                <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid rgba(255,255,255,0.2); text-align: center;">
                    <h4 style="color: white; margin-bottom: 1rem;">🔗 ลิงก์ที่เกี่ยวข้อง</h4>
                    <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                        <a href="/faculty" style="background: var(--primary-blue); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: 1px solid var(--primary-navy); transition: all 0.2s;">👩‍🎓 ดูอาจารย์</a>
                        <a href="/research" style="background: var(--primary-blue); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: 1px solid var(--primary-navy); transition: all 0.2s;">🔬 งานวิจัย</a>
                        <a href="/news" style="background: var(--primary-blue); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: 1px solid var(--primary-navy); transition: all 0.2s;">📰 ข่าวสาร</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
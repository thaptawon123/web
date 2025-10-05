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
        /* === 1. NEW OLIVE GREEN COLOR PALETTE === */
        /* ======================================= */
        :root {
            --primary-red: #556B2F; /* Olive Green - Dark and Earthy */
            --primary-red-dark: #36491E; /* Even Darker Olive for gradients/footer */
            --primary-red-light: #F0FFF0; /* Honeydew - Very light for backgrounds/accents */
            /* Default unified-theme colors are now overridden by these */
        }
        
        /* Update buttons that use the default primary/secondary colors in the topbar */
        .topbar-right .btn:not(.btn-secondary) {
            background: var(--primary-red) !important; /* Login Button: Olive Green */
        }
        .topbar-right .btn-secondary {
            background: #8FBC8F !important; /* Manage Button: Dark Sea Green */
            color: white !important;
        }

        /* Page specific A4 card styles */
        .a4-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            margin: 3rem auto;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
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
            /* Color change: uses new Olive Green gradient */
            background: linear-gradient(90deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
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
            /* Color change: uses new Olive Green gradient */
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .degree {
            /* Color change: uses new Olive Green */
            color: var(--primary-red);
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
            /* Color change: uses new Olive Green */
            border-left: 6px solid var(--primary-red);
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .card-section h4 {
            margin: 0 0 15px 0;
            color: #1f2937;
            font-size: 1.2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .card-section ul {
            margin: 10px 0;
            padding-left: 20px;
            color: #4b5563;
        }
        
        .card-section li {
            margin-bottom: 8px;
            line-height: 1.6;
        }
        
        .card-footer {
            text-align: center;
            padding: 25px 0 0 0;
            border-top: 3px solid #f1f5f9;
            /* Color change: uses new Olive Green gradient */
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
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
        
        /* Icon Size Reduction: From 22px to 18px */
        .icon {
            width: 18px; 
            height: 18px;
            fill: currentColor;
        }
        
        .highlight-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 20px 0;
        }
        
        /* Color change: uses new Olive Green */
        .faculty-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            border-color: var(--primary-red);
        }
        
        .faculty-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        
        .stat-item {
            text-align: center;
            background: white;
            padding: 15px;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
        }
        
        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            /* Color change: uses new Olive Green */
            color: var(--primary-red);
            margin: 0;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #6b7280;
            margin: 5px 0 0 0;
        }
        
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
            
            .header h1 {
                font-size: 2rem;
            }
        }
        
        @media print {
            body {
                background: white;
                padding: 0;
            }
            
            .btn, .header {
                display: none;
            }
            
            .a4-card {
                box-shadow: none;
                border: 1px solid #e5e7eb;
                page-break-inside: avoid;
                width: 210mm;
                height: 297mm;
                max-width: none;
                transform: none;
                margin: 0;
            }
        }
        
        /* Navigation hover effects */
        nav a:hover {
            background: #f1f5f9 !important;
            color: #374151 !important;
        }
        
        nav a[style*="background: #ef4444"]:hover {
            background: #dc2626 !important;
            color: white !important;
        }

        /* ======================================= */
        /* === 2. NEW STEALTH LAYOUT CSS FOR FACULTY === */
        /* ======================================= */
        .programs-faculty-layout {
            display: flex;
            justify-content: flex-start; /* Switch from center to left-aligned */
            align-items: flex-start;
            gap: 2rem;
            flex-wrap: wrap;
            /* Add padding to the whole container to visually center the group, but keep individual cards left-aligned */
            padding: 0 5%; 
        }

        .programs-faculty-layout .faculty-card {
            /* Adjusted width to break symmetry */
            width: 170px !important; 
            margin-bottom: 1rem;
            /* Added a solid accent line, replacing the inline style */
            border-left: 5px solid var(--primary-red); 
            background: var(--primary-red-light) !important; /* Use the new light green background */
        }

        /* The hidden/stealth adjustment: shift the second card down slightly */
        .programs-faculty-layout .faculty-card:nth-child(2) {
            margin-top: 15px; 
            margin-bottom: 25px;
        }

        .programs-faculty-layout .faculty-card .faculty-avatar {
            border: 3px solid var(--primary-red) !important; /* Use solid Olive Green border */
        }
    </style>
</head>
<body>
        <div class="topbar">
        <div class="topbar-content">
            <div class="nav-links">
                <a href="/" class="nav-link">หน้าหลัก</a>
                <a href="/programs" class="nav-link active">หลักสูตร</a>
                <a href="/faculty" class="nav-link">คณะจารย์</a>
                <a href="/research" class="nav-link">งานวิจัย</a>
                <a href="/news" class="nav-link">ข่าวสาร</a>
            </div>
            <div class="topbar-right">
                @auth
                    <span style="color: var(--text-secondary); margin-right: 1rem;">สวัสดี, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/logout" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: #4A5568;">ออกจากระบบ</button>
                    </form>
                @else
                                        <a href="/login" class="btn" style="background: var(--primary-red);">เข้าสู่ระบบ</a>
                @endauth
                                <a href="/admin" class="btn btn-secondary" style="background: #8FBC8F;">จัดการ</a>
            </div>
        </div>
    </div>
    <div class="container">




        <div class="card text-center" style="margin-bottom: 2rem; padding: 2rem; background: var(--primary-red-light);">
            <h1 class="title-primary" style="color: var(--primary-red);">หลักสูตรการเรียน</h1>
            <p class="subtitle" style="color: #4A5568;">สาขาวิชาวิศวกรรมซอฟต์แวร์ คณะวิศวกรรมศาสตร์</p>
            
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
                        <li>รวมทั้งหมด: 132 หน่วยกิต</li>
                    </ul>
                </div>
            </div>

                        <div class="section text-center" style="margin: 2rem 0; padding: 1.5rem 0; border-top: 2px solid #f1f5f9; border-bottom: 2px solid #f1f5f9;">
                <div style="margin-bottom: 1.5rem;">
                    <h2 class="section-title" style="font-size: 1.5rem; margin: 0 0 0.5rem 0; color: #1f2937;">อาจารย์ประจำหลักสูตร</h2>
                    <p class="section-subtitle" style="color: #6b7280; margin: 0;">คณาจารย์ผู้เชี่ยวชาญด้าน Software Engineering</p>
                </div>

                <div class="programs-faculty-layout">
                                        <div class="faculty-card">
                        <img src="https://picsum.photos/seed/f16/300/300" alt="อาจารย์พิเศษ" class="faculty-avatar" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin: 0 auto 1rem; display: block; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        <div class="faculty-name" style="font-size: 1.1rem; font-weight: 700; color: #1f2937; margin-bottom: 0.25rem;">อ.ดร. ณัฐพล พัฒน์ชัย</div>
                        <div class="faculty-position" style="color: var(--primary-red); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem;">อาจารย์พิเศษ</div>
                        <div class="faculty-degree" style="color: #6b7280; font-size: 0.8rem;">Ph.D. Computer Science</div>
                        <div class="faculty-bio" style="color: #4b5563; font-size: 0.8rem; margin-top: 0.5rem; line-height: 1.4;">เชี่ยวชาญด้านปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร มีประสบการณ์ในการวิจัยด้าน Deep Learning</div>
                    </div>

                                        <div class="faculty-card">
                        <img src="https://picsum.photos/seed/f17/300/300" alt="อาจารย์พิเศษ" class="faculty-avatar" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin: 0 auto 1rem; display: block; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        <div class="faculty-name" style="font-size: 1.1rem; font-weight: 700; color: #1f2937; margin-bottom: 0.25rem;">ผศ. ศิริพร มงคลชัย</div>
                        <div class="faculty-position" style="color: var(--primary-red); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem;">อาจารย์พิเศษ</div>
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
                        <a href="/faculty" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: 1px solid rgba(255,255,255,0.3); transition: all 0.2s;">👩‍🎓 ดูอาจารย์</a>
                        <a href="/research" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: 1px solid rgba(255,255,255,0.3); transition: all 0.2s;">🔬 งานวิจัย</a>
                        <a href="/news" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: 1px solid rgba(255,255,255,0.3); transition: all 0.2s;">📰 ข่าวสาร</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
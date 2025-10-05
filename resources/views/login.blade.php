<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ล็อกอิน - สาขาวิชา Software Engineering</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body{font-family:Figtree, sans-serif;background:#f3f4f6;margin:0;}
            .center{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:2rem}
            .card{background:white;border-radius:12px;box-shadow:0 8px 30px rgba(2,6,23,0.08);max-width:920px;width:100%;display:grid;grid-template-columns:1fr 1fr;overflow:hidden}
            .left{padding:3rem;background:linear-gradient(180deg,#ffecd2,#fcb69f);display:flex;flex-direction:column;justify-content:center;gap:1rem}
            .brand{font-weight:700;font-size:1.25rem;color:#7a2e1e}
            .title{font-size:1.75rem;font-weight:700;color:#3b1a12}
            .desc{color:#4b5563}
            .btn-primary{display:inline-block;padding:.75rem 1.25rem;border-radius:8px;background:#ef4444;color:white;text-decoration:none;font-weight:600}
            .right{padding:3rem}
            .form-group{margin-bottom:1rem}
            input[type=text],input[type=password]{width:100%;padding:.75rem;border-radius:8px;border:1px solid #e5e7eb}
            .actions{display:flex;gap:.5rem;align-items:center;margin-top:1rem}
            .btn-ghost{background:transparent;border:1px solid #ef4444;color:#ef4444;padding:.6rem 1rem;border-radius:8px;text-decoration:none}
            .small{font-size:.9rem;color:#6b7280}
            .ai-box{margin-top:1.25rem;padding:.75rem;border-radius:8px;background:#f8fafc;border:1px dashed #e6eef8}
            @media (max-width:800px){.card{grid-template-columns:1fr;padding:0}.left{padding:2rem}.right{padding:2rem}}
        </style>
    </head>
    <body>
        <div class="center">
            <div class="card">
                <div class="left">
                    <div class="brand">สาขาวิชา Software Engineering</div>
                    <div class="title">ยินดีต้อนรับ</div>
                    <div class="desc">ระบบสำหรับนักศึกษาและอาจารย์ ดูข่าวสาร โครงการ และลงทะเบียนกิจกรรมต่างๆ ของสาขา</div>
                    <div>
                        <a class="btn-primary" href="{{ url('/home') }}">เข้าสู่ระบบ (ทดลอง)</a>
                        <div class="small" style="margin-top:.75rem">หรือคลิกปุ่ม "สมัคร" ด้านล่างเพื่อลงทะเบียน</div>
                    </div>
                    <div style="margin-top:auto;font-size:.9rem;color:#475569">ติดต่อ: se@university.example</div>
                </div>

                <div class="right">
                    <h3 style="margin:0 0 0.5rem 0">ล็อกอิน</h3>
                    <p class="small">กรุณาใส่ข้อมูลเพื่อเข้าสู่ระบบ (ตัวอย่างแบบฟอร์ม)</p>

                    <div class="form-group">
                        <label class="small">อีเมล</label>
                        <input type="text" placeholder="you@example.com" />
                    </div>

                    <div class="form-group">
                        <label class="small">รหัสผ่าน</label>
                        <input type="password" placeholder="••••••••" />
                    </div>

                    <div class="actions">
                        <a class="btn-primary" href="{{ url('/home') }}">เข้าสู่ระบบ</a>
                        <a class="btn-ghost" href="#">สมัคร</a>
                    </div>

                    <div class="ai-box">
                        <div style="font-weight:600">สั่ง AI ช่วยเขียนข้อความ</div>
                        <p class="small">อยากให้ AI ช่วยอะไร เช่น "สรุปข่าวกิจกรรมของสาขาให้เป็นภาษาไทยสั้นๆ"</p>
                        <div style="display:flex;gap:.5rem;margin-top:.5rem">
                            <input style="flex:1;padding:.5rem;border-radius:6px;border:1px solid #e5e7eb" placeholder="พิมพ์คำสั่งที่นี่..." />
                            <button class="btn-primary">ส่งไปยัง AI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

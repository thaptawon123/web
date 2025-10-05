<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สมัครสมาชิก - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
            padding: 2rem 1rem;
        }
        
        .register-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 8px 32px var(--shadow-medium);
            border: 1px solid var(--border-light);
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .register-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        
        .register-subtitle {
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-medium);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary-red);
        }
        
        .error-message {
            color: var(--primary-red);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
        
        .success-message {
            background: #d1fae5;
            color: #065f46;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }
        
        .auth-links {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--bg-tertiary);
        }
        
        .auth-link {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 600;
        }
        
        .auth-link:hover {
            color: var(--primary-red-dark);
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-muted);
            text-decoration: none;
            margin-bottom: 2rem;
        }
        
        .back-link:hover {
            color: var(--text-secondary);
        }
        
        .password-help {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <a href="/" class="back-link">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"/>
                </svg>
                กลับหน้าแรก
            </a>
            
            <div class="register-header">
                <h1 class="register-title">สมัครสมาชิก</h1>
                <p class="register-subtitle">สาขาวิชา Software Engineering</p>
            </div>
            
            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
            
            <form method="POST" action="/register">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                    <input type="text" id="name" name="name" class="form-input" 
                           value="{{ old('name') }}" required placeholder="ใส่ชื่อและนามสกุล">
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" id="email" name="email" class="form-input" 
                           value="{{ old('email') }}" required placeholder="example@email.com">
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input type="password" id="password" name="password" class="form-input" 
                           required placeholder="••••••••">
                    <div class="password-help">รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร</div>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">ยืนยันรหัสผ่าน</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                           class="form-input" required placeholder="••••••••">
                </div>
                
                <button type="submit" class="btn" style="width: 100%; justify-content: center;">
                    สมัครสมาชิก
                </button>
            </form>
            
            <div class="auth-links">
                <p>มีบัญชีอยู่แล้ว? <a href="/login" class="auth-link">เข้าสู่ระบบ</a></p>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
        }
        
        .login-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 32px var(--shadow-medium);
            border: 1px solid var(--border-light);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .login-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        
        .login-subtitle {
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
        
        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
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
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <a href="/" class="back-link">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"/>
                </svg>
                กลับหน้าแรก
            </a>
            
            <div class="login-header">
                <h1 class="login-title">เข้าสู่ระบบ</h1>
                <p class="login-subtitle">สาขาวิชา Software Engineering</p>
            </div>
            
            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
            
            <form method="POST" action="/login">
                @csrf
                
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
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-checkbox">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">จดจำการเข้าสู่ระบบ</label>
                </div>
                
                <button type="submit" class="btn" style="width: 100%; justify-content: center;">
                    เข้าสู่ระบบ
                </button>
            </form>
            
            <div class="auth-links">
                <p>ยังไม่มีบัญชี? <a href="/register" class="auth-link">สมัครสมาชิก</a></p>
                <p><a href="/admin" class="auth-link">เข้าสู่ระบบ Admin</a></p>
            </div>
        </div>
    </div>
</body>
</html>
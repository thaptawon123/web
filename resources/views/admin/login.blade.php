<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login</title>
    <style>body{font-family:sans-serif;padding:2rem;background:#f3f4f6} .card{max-width:420px;margin:3rem auto;background:#fff;padding:1.25rem;border-radius:8px;box-shadow:0 8px 30px rgba(2,6,23,0.06)} input{width:100%;padding:.6rem;margin-top:.5rem;border:1px solid #e5e7eb;border-radius:6px} button{background:#ef4444;color:#fff;border:none;padding:.6rem 1rem;border-radius:6px}</style>
</head>
<body>
    <div class="card">
        <h2>Admin Login</h2>
        @if($errors->any())
            <div style="color:#b91c1c">{{ $errors->first() }}</div>
        @endif
        <form method="post" action="/admin/login">
            @csrf
            <label>อีเมล</label>
            <input type="email" name="email" value="{{ old('email') }}" />
            <label>รหัสผ่าน</label>
            <input type="password" name="password" />
            <div style="margin-top:1rem;text-align:right">
                <button type="submit">เข้าสู่ระบบ</button>
            </div>
        </form>
    </div>
</body>
</html>

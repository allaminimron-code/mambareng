<!DOCTYPE html>
<html>
<head>
    <title>Pilih Dong Ayang 🥺</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">   
</head>
<body class="body-pilihan">
    <div class="card">
        <div class="emoji">🥰</div>
        <h1 class="h1-pilihan">Yeay Mauuuu!</h1>
        <h3 class="h3-pilihan">Coba dong mau mam kemana , isi nya Yang ✨</h3>
        
        <form action="/struk" method="POST">
            @csrf
            <div class="form-group">
                <label>📍 Mam dimana:</label>
                <input type="text" name="tempat" placeholder="Contoh: Kakoi / Istana Mi" required>
            </div>

            <div class="form-group">
                <label>🕰️ Jam berapa:</label>
                <input type="time" name="jam" required>
            </div>

            <div class="form-group">
                <label>👗 Dresscode apa:</label>
                <select name="dress" required>
                    <option value="">-- Pilih dong --</option>
                    <option value="Casual Gemas">Casual Gemas 👟</option>
                    <option value="Dress Cantik">Dress Cantik 👗</option>
                    <option value="Kemeja Matching">Kemeja Matching 👔</option>
                    <option value="Bebas asal bareng">Bebas asal bareng kamu ❤️</option>
                </select>
            </div>

            <button type="submit" class="button-pilihan">Konfirmasi Kencan! 💕</button>
        </form>
    </div>
</body>
</html>
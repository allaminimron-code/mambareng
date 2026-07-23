
<!DOCTYPE html>
<html>
<head>
    <title>Tiket Kencan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="body-struk">
    <div class="struk">
        <h2 class="h2-struk">💖 TIKET KENCAN 💖</h2>
        <p>Untuk: Fafa </p>
        <p>Dari: Aim </p>
        <div class="detail-struk">
            <p><b>📍 Tempat:</b> {{ $data['tempat'] }}</p>
            <p><b>🕰️ Jam:</b> {{ $data['jam'] }}</p>
            <p><b>👗 Dresscode:</b> {{ $data['dress'] }}</p>
        </div>
        <p class="footer-struk">Gak boleh cancel yaa 😘💕<br> </p>
        
        <div>
            <button class="button-struk whatsapp" 
                onclick="kirimWA('Ayang, aku udah siap! 😍\n\nTempat: {{ $data['tempat'] }}\nJam: {{ $data['jam'] }}\nDresscode: {{ $data['dress'] }}')">
                Kirim ke WA
            </button>
            <button class="button-struk print" onclick="window.print()">Cetak Struk</button>
        </div>
    </div>

    <script>
        function kirimWA(pesan) {
            const nomorWA = prompt("Masukkan nomor WA ayang (tanpa +62):", "08123456789");
            if(nomorWA) {
                const url = `https://wa.me/62${nomorWA}?text=${encodeURIComponent(pesan)}`;
                window.open(url, '_blank');
            }
        }
    </script>
</body>
</html>

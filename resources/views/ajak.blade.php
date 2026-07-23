
<!DOCTYPE html>
<html>
<head>
    <title>Ayak Ayang 💖</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .heart {
            position: absolute;
            width: 100px;
            height: 100px;
            background: #ff69b4;
            transform: rotate(-45deg);
            animation: pulse 2s infinite;
        }
        .heart::before,
        .heart::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            background: #ff69b4;
            border-radius: 50%;
        }
        .heart::before { top: -50px; }
        .heart::after { left: 50px; }
        
        @keyframes pulse {
            0% { transform: scale(1) rotate(-45deg); }
            50% { transform: scale(1.1) rotate(-45deg); }
            100% { transform: scale(1) rotate(-45deg); }
        }
        
        .question {
            font-size: 40px;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .btn-container {
            position: relative;
            height: 50px;
            margin-top: 20px;
        }
    </style>
</head>
<body class="body-ajak">
    <h1 class="question" style="color: #eef0b5;">Ayang... Mau mam bareng aku tak? 🥺</h1>
    
    <div class="form-box">
        <form action="/pilihan" method="POST" id="formAjak">
            @csrf
            <button class="btn-mau" name="jawaban" value="mau">Mau</button>
                <button type="button" class="btn-tolak" id="btnTolak">Males</button>
            </div>
        </form>
    </div>

    <canvas id="confettiCanvas" style="position: fixed; top: 0; left: 0; pointer-events: none;"></canvas>

    <script>
        const btnTolak = document.getElementById('btnTolak');
        const formAjak = document.getElementById('formAjak');
        const canvas = document.getElementById('confettiCanvas');
        const ctx = canvas.getContext('2d');
        
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        
        let confetti = [];
        
        function createConfetti() {
            confetti = [];
            for (let i = 0; i < 100; i++) {
                confetti.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height - canvas.height,
                    size: Math.random() * 5 + 2,
                    color: ['#ff69b4', '#ffb6d9', '#ff1493', '#ff69b4'][Math.floor(Math.random() * 4)],
                    speed: Math.random() * 3 + 1,
                    tilt: Math.random() * 10 - 5
                });
            }
        }
        
        function updateConfetti() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            confetti.forEach((c, i) => {
                c.y += c.speed;
                c.x += Math.sin(c.y / 20) * c.tilt;
                
                if (c.y > canvas.height) {
                    c.y = -10;
                    c.x = Math.random() * canvas.width;
                }
                
                ctx.fillStyle = c.color;
                ctx.beginPath();
                ctx.rect(c.x, c.y, c.size, c.size);
                ctx.fill();
            });
            requestAnimationFrame(updateConfetti);
        }
        
        btnTolak.addEventListener('mouseover', function() {
            const lebarLayar = window.innerWidth - btnTolak.offsetWidth;
            const tinggiLayar = window.innerHeight - btnTolak.offsetHeight;
            
            const posX = Math.floor(Math.random() * lebarLayar);
            const posY = Math.floor(Math.random() * tinggiLayar);
            
            btnTolak.style.left = posX + 'px';
            btnTolak.style.top = posY + 'px';
        });
        
        formAjak.addEventListener('submit', function(e) {
            createConfetti();
            setTimeout(() => {
                formAjak.submit();
            }, 500);
            e.preventDefault();
        });
        
        updateConfetti();
    </script>
</body>
</html>
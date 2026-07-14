<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Is a Good Candidate for TMS Therapy - Thumbnail Generator</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: linear-gradient(135deg, #0b192c 0%, #162b47 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            max-width: 900px;
            width: 100%;
            text-align: center;
        }
        canvas {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            margin-bottom: 30px;
        }
        h1 {
            color: #ffffff;
            margin-bottom: 15px;
            font-size: 28px;
        }
        p {
            color: rgba(255,255,255,0.7);
            margin-bottom: 20px;
            font-size: 16px;
        }
        .instructions {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 12px;
            text-align: left;
            margin-top: 20px;
            font-size: 14px;
            line-height: 1.8;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .instructions h2 {
            color: #5dadee;
            margin-bottom: 15px;
            font-size: 18px;
        }
        .instructions ol {
            margin-left: 20px;
            color: rgba(255,255,255,0.8);
        }
        .instructions li {
            margin-bottom: 10px;
        }
        .instructions strong {
            color: #5dadee;
        }
        .note {
            background: rgba(93, 173, 238, 0.15);
            border: 1px solid rgba(93, 173, 238, 0.3);
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            color: rgba(255,255,255,0.9);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📸 Blog Thumbnail Generator</h1>
        <p>Who Is a Good Candidate for TMS Therapy?</p>

        <canvas id="thumbnail" width="1200" height="630"></canvas>

        <div class="instructions">
            <h2>How to Save the Thumbnail:</h2>
            <ol>
                <li>Right-click on the image above</li>
                <li>Select <strong>"Save image as..."</strong> or <strong>"Save picture as..."</strong></li>
                <li>Save it as <strong>blog-tms-good-candidate.png</strong></li>
                <li>Place it in the <strong>assets/images/</strong> folder of your website</li>
            </ol>

            <div class="note">
                <strong>Recommended Size:</strong> 1200 x 630 pixels (optimal for blog thumbnails and social media sharing)
            </div>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('thumbnail');
        const ctx = canvas.getContext('2d');

        // Premium gradient background
        const bgGradient = ctx.createLinearGradient(0, 0, 1200, 630);
        bgGradient.addColorStop(0, '#0f2847');
        bgGradient.addColorStop(0.3, '#162b47');
        bgGradient.addColorStop(0.7, '#0b192c');
        bgGradient.addColorStop(1, '#0a1520');
        ctx.fillStyle = bgGradient;
        ctx.fillRect(0, 0, 1200, 630);

        // Subtle grid pattern
        ctx.strokeStyle = 'rgba(37, 111, 168, 0.08)';
        ctx.lineWidth = 1;
        for (let x = 0; x < 1200; x += 40) {
            ctx.beginPath();
            ctx.moveTo(x, 0);
            ctx.lineTo(x, 630);
            ctx.stroke();
        }
        for (let y = 0; y < 630; y += 40) {
            ctx.beginPath();
            ctx.moveTo(0, y);
            ctx.lineTo(1200, y);
            ctx.stroke();
        }

        // Floating particles effect
        ctx.fillStyle = 'rgba(93, 173, 238, 0.15)';
        const particles = [];
        for (let i = 0; i < 30; i++) {
            particles.push({
                x: Math.random() * 1200,
                y: Math.random() * 630,
                r: Math.random() * 3 + 1
            });
            ctx.beginPath();
            ctx.arc(particles[i].x, particles[i].y, particles[i].r, 0, Math.PI * 2);
            ctx.fill();
        }

        // Left side - Brain/TMS illustration
        ctx.save();
        ctx.translate(280, 315);

        // Outer glow rings
        for (let i = 3; i >= 0; i--) {
            ctx.beginPath();
            ctx.arc(0, 0, 140 + i * 25, 0, Math.PI * 2);
            ctx.strokeStyle = `rgba(93, 173, 238, ${0.05 - i * 0.01})`;
            ctx.lineWidth = 2;
            ctx.stroke();
        }

        // Main brain circle background
        const brainGradient = ctx.createRadialGradient(0, 0, 0, 0, 0, 130);
        brainGradient.addColorStop(0, 'rgba(37, 111, 168, 0.3)');
        brainGradient.addColorStop(0.7, 'rgba(37, 111, 168, 0.15)');
        brainGradient.addColorStop(1, 'rgba(37, 111, 168, 0.05)');
        ctx.fillStyle = brainGradient;
        ctx.beginPath();
        ctx.arc(0, 0, 130, 0, Math.PI * 2);
        ctx.fill();

        // TMS coil rings
        ctx.strokeStyle = '#5dadee';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.arc(0, 0, 110, 0, Math.PI * 2);
        ctx.stroke();

        ctx.strokeStyle = '#3498db';
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.arc(0, 0, 85, 0, Math.PI * 2);
        ctx.stroke();

        // Brain representation with neural network
        ctx.fillStyle = 'rgba(93, 173, 238, 0.2)';
        ctx.beginPath();
        ctx.arc(0, 0, 60, 0, Math.PI * 2);
        ctx.fill();

        // Neural pathway connections
        const neuralPoints = [];
        for (let i = 0; i < 8; i++) {
            const angle = (i / 8) * Math.PI * 2;
            neuralPoints.push({
                x: Math.cos(angle) * 45,
                y: Math.sin(angle) * 45
            });
        }

        ctx.strokeStyle = 'rgba(93, 173, 238, 0.5)';
        ctx.lineWidth = 1.5;
        for (let i = 0; i < neuralPoints.length; i++) {
            for (let j = i + 1; j < neuralPoints.length; j++) {
                if (Math.random() > 0.4) {
                    ctx.beginPath();
                    ctx.moveTo(neuralPoints[i].x, neuralPoints[i].y);
                    ctx.lineTo(neuralPoints[j].x, neuralPoints[j].y);
                    ctx.stroke();
                }
            }
        }

        // Neural nodes
        ctx.fillStyle = '#5dadee';
        neuralPoints.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, 6, 0, Math.PI * 2);
            ctx.fill();
        });

        // Central activation point
        const pulseGradient = ctx.createRadialGradient(0, 0, 0, 0, 0, 20);
        pulseGradient.addColorStop(0, '#ffffff');
        pulseGradient.addColorStop(0.5, '#5dadee');
        pulseGradient.addColorStop(1, 'rgba(93, 173, 238, 0)');
        ctx.fillStyle = pulseGradient;
        ctx.beginPath();
        ctx.arc(0, 0, 20, 0, Math.PI * 2);
        ctx.fill();

        // Pulsing wave effect
        ctx.strokeStyle = 'rgba(93, 173, 238, 0.6)';
        ctx.lineWidth = 2;
        for (let i = 0; i < 3; i++) {
            ctx.beginPath();
            ctx.arc(0, 0, 25 + i * 15, 0, Math.PI * 2);
            ctx.globalAlpha = 0.3 - i * 0.1;
            ctx.stroke();
        }
        ctx.globalAlpha = 1;

        ctx.restore();

        // Target/Checkmark icon for "Good Candidate"
        ctx.save();
        ctx.translate(280, 500);

        // Checkmark circle
        ctx.fillStyle = 'rgba(46, 204, 113, 0.2)';
        ctx.beginPath();
        ctx.arc(0, 0, 28, 0, Math.PI * 2);
        ctx.fill();

        ctx.strokeStyle = '#2ecc71';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.arc(0, 0, 28, 0, Math.PI * 2);
        ctx.stroke();

        // Checkmark
        ctx.strokeStyle = '#2ecc71';
        ctx.lineWidth = 4;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        ctx.beginPath();
        ctx.moveTo(-12, 0);
        ctx.lineTo(-3, 10);
        ctx.lineTo(14, -10);
        ctx.stroke();

        ctx.restore();

        // Right side - Text content
        // Eyebrow
        ctx.fillStyle = '#5dadee';
        ctx.font = 'bold 16px Arial, sans-serif';
        ctx.textAlign = 'left';
        ctx.fillText('TMS THERAPY GUIDE', 600, 140);

        // Decorative line under eyebrow
        const lineGradient = ctx.createLinearGradient(600, 0, 800, 0);
        lineGradient.addColorStop(0, '#5dadee');
        lineGradient.addColorStop(1, 'rgba(93, 173, 238, 0)');
        ctx.fillStyle = lineGradient;
        ctx.fillRect(600, 150, 200, 2);

        // Main title
        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 54px Georgia, serif';
        ctx.fillText('Who Is a Good', 600, 230);

        ctx.fillText('Candidate for', 600, 300);

        // Highlighted text
        ctx.fillStyle = '#5dadee';
        ctx.font = 'bold 54px Georgia, serif';
        ctx.fillText('TMS Therapy?', 600, 370);

        // Subtitle
        ctx.fillStyle = 'rgba(255, 255, 255, 0.7)';
        ctx.font = '24px Arial, sans-serif';
        ctx.fillText('Discover if TMS is right for you', 600, 430);

        // Bottom info bar
        ctx.fillStyle = 'rgba(37, 111, 168, 0.25)';
        roundRect(ctx, 600, 480, 500, 55, 8);
        ctx.fill();

        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 16px Arial, sans-serif';
        ctx.fillText('Dr. Ritesh Amin, MD', 625, 517);

        ctx.fillStyle = 'rgba(255, 255, 255, 0.5)';
        ctx.font = '16px Arial, sans-serif';
        ctx.fillText('|', 820, 517);

        ctx.fillStyle = '#5dadee';
        ctx.font = 'bold 16px Arial, sans-serif';
        ctx.fillText('Board-Certified Psychiatrist', 840, 517);

        ctx.fillStyle = 'rgba(255, 255, 255, 0.5)';
        ctx.font = '16px Arial, sans-serif';
        ctx.fillText('|', 1060, 517);

        ctx.fillStyle = 'rgba(255, 255, 255, 0.6)';
        ctx.fillText('Edison, NJ', 1080, 517);

        // Top accent line
        const topGradient = ctx.createLinearGradient(0, 0, 1200, 0);
        topGradient.addColorStop(0, 'transparent');
        topGradient.addColorStop(0.2, '#256fa8');
        topGradient.addColorStop(0.5, '#5dadee');
        topGradient.addColorStop(0.8, '#256fa8');
        topGradient.addColorStop(1, 'transparent');
        ctx.fillStyle = topGradient;
        ctx.fillRect(0, 0, 1200, 4);

        // Bottom decorative elements
        ctx.fillStyle = 'rgba(93, 173, 238, 0.1)';
        ctx.beginPath();
        ctx.arc(50, 580, 40, 0, Math.PI * 2);
        ctx.fill();

        ctx.beginPath();
        ctx.arc(1150, 50, 50, 0, Math.PI * 2);
        ctx.fill();

        // Function to draw rounded rectangle
        function roundRect(ctx, x, y, width, height, radius) {
            ctx.beginPath();
            ctx.moveTo(x + radius, y);
            ctx.lineTo(x + width - radius, y);
            ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
            ctx.lineTo(x + width, y + height - radius);
            ctx.quadraticCurveTo(x + width, y + height, x + width - radius, y + height);
            ctx.lineTo(x + radius, y + height);
            ctx.quadraticCurveTo(x, y + height, x, y + height - radius);
            ctx.lineTo(x, y + radius);
            ctx.quadraticCurveTo(x, y, x + radius, y);
            ctx.closePath();
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Thumbnail - Who Is a Good Candidate for TMS Therapy</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: linear-gradient(135deg, #0b192c 0%, #162b47 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 30px;
            color: #fff;
        }
        .container {
            max-width: 1300px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .subtitle {
            text-align: center;
            color: rgba(255,255,255,0.6);
            margin-bottom: 30px;
            font-size: 16px;
        }
        .preview-section {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            flex-wrap: wrap;
            justify-content: center;
        }
        .preview-box {
            flex: 1;
            min-width: 600px;
            max-width: 800px;
        }
        canvas {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
        }
        .instructions {
            flex: 0 0 350px;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .instructions h2 {
            color: #5dadee;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .instructions ol {
            margin-left: 20px;
            line-height: 1.8;
            color: rgba(255,255,255,0.8);
        }
        .instructions li {
            margin-bottom: 12px;
        }
        .instructions strong {
            color: #5dadee;
        }
        .note {
            background: rgba(93, 173, 238, 0.15);
            border: 1px solid rgba(93, 173, 238, 0.3);
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            background: #5dadee;
            color: #fff;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 15px;
            cursor: pointer;
            border: none;
            font-size: 14px;
        }
        .btn:hover {
            background: #3498db;
        }
        .file-info {
            margin-top: 30px;
            padding: 20px;
            background: rgba(46, 204, 113, 0.1);
            border: 1px solid rgba(46, 204, 113, 0.3);
            border-radius: 8px;
        }
        .file-info h3 {
            color: #2ecc71;
            margin-bottom: 10px;
        }
        .file-info code {
            background: rgba(0,0,0,0.3);
            padding: 2px 8px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📸 Blog Thumbnail Generator</h1>
        <p class="subtitle">Who Is a Good Candidate for TMS Therapy?</p>

        <div class="preview-section">
            <div class="preview-box">
                <canvas id="thumbnail" width="1200" height="630"></canvas>
            </div>

            <div class="instructions">
                <h2>How to Save the Thumbnail</h2>
                <ol>
                    <li><strong>Right-click</strong> on the image above</li>
                    <li>Select <strong>"Save image as..."</strong></li>
                    <li>Save location: <code>assets/images/</code></li>
                    <li>Filename: <code>blog-tms-good-candidate.png</code></li>
                </ol>

                <button class="btn" onclick="downloadImage()">⬇️ Download PNG</button>

                <div class="note">
                    <strong>Recommended:</strong> 1200 × 630 pixels (optimal for blog thumbnails & social media)
                </div>

                <div class="file-info">
                    <h3>✅ File Details</h3>
                    <p><strong>File:</strong> <code>blog-tms-good-candidate.png</code></p>
                    <p><strong>Location:</strong> <code>assets/images/</code></p>
                    <p><strong>Dimensions:</strong> 1200 × 630 px</p>
                    <p><strong>Format:</strong> PNG</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('thumbnail');
        const ctx = canvas.getContext('2d');

        // ===== BACKGROUND =====
        const bgGrad = ctx.createLinearGradient(0, 0, 1200, 630);
        bgGrad.addColorStop(0, '#0f2847');
        bgGrad.addColorStop(0.5, '#162b47');
        bgGrad.addColorStop(1, '#0b192c');
        ctx.fillStyle = bgGrad;
        ctx.fillRect(0, 0, 1200, 630);

        // Grid pattern
        ctx.strokeStyle = 'rgba(37, 111, 168, 0.1)';
        ctx.lineWidth = 1;
        for (let x = 0; x < 1200; x += 40) {
            ctx.beginPath(); ctx.moveTo(x, 0); ctx.lineTo(x, 630); ctx.stroke();
        }
        for (let y = 0; y < 630; y += 40) {
            ctx.beginPath(); ctx.moveTo(0, y); ctx.lineTo(1200, y); ctx.stroke();
        }

        // Top accent bar
        const topGrad = ctx.createLinearGradient(0, 0, 1200, 0);
        topGrad.addColorStop(0, 'transparent');
        topGrad.addColorStop(0.2, '#5dadee');
        topGrad.addColorStop(0.5, '#c9b256');
        topGrad.addColorStop(0.8, '#5dadee');
        topGrad.addColorStop(1, 'transparent');
        ctx.fillStyle = topGrad;
        ctx.fillRect(0, 0, 1200, 4);

        // ===== LEFT SIDE: Brain/TMS Illustration =====
        ctx.save();
        ctx.translate(280, 300);

        // Outer glow
        for (let i = 3; i >= 0; i--) {
            ctx.beginPath();
            ctx.arc(0, 0, 150 + i * 25, 0, Math.PI * 2);
            ctx.strokeStyle = `rgba(93, 173, 238, ${0.08 - i * 0.015})`;
            ctx.lineWidth = 2;
            ctx.stroke();
        }

        // Brain background
        const brainGrad = ctx.createRadialGradient(0, 0, 0, 0, 0, 130);
        brainGrad.addColorStop(0, 'rgba(37, 111, 168, 0.4)');
        brainGrad.addColorStop(0.7, 'rgba(37, 111, 168, 0.2)');
        brainGrad.addColorStop(1, 'rgba(37, 111, 168, 0.05)');
        ctx.fillStyle = brainGrad;
        ctx.beginPath();
        ctx.arc(0, 0, 130, 0, Math.PI * 2);
        ctx.fill();

        // TMS coil rings
        ctx.strokeStyle = '#5dadee';
        ctx.lineWidth = 4;
        ctx.beginPath();
        ctx.arc(0, 0, 100, 0, Math.PI * 2);
        ctx.stroke();

        ctx.strokeStyle = '#3498db';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.arc(0, 0, 75, 0, Math.PI * 2);
        ctx.stroke();

        // Inner brain
        ctx.fillStyle = 'rgba(93, 173, 238, 0.25)';
        ctx.beginPath();
        ctx.arc(0, 0, 50, 0, Math.PI * 2);
        ctx.fill();

        // Neural connections
        const nodes = [];
        for (let i = 0; i < 8; i++) {
            const angle = (i / 8) * Math.PI * 2 - Math.PI / 2;
            nodes.push({
                x: Math.cos(angle) * 40,
                y: Math.sin(angle) * 40
            });
        }

        ctx.strokeStyle = 'rgba(93, 173, 238, 0.5)';
        ctx.lineWidth = 1.5;
        nodes.forEach((n1, i) => {
            nodes.forEach((n2, j) => {
                if (j > i && Math.random() > 0.3) {
                    ctx.beginPath();
                    ctx.moveTo(n1.x, n1.y);
                    ctx.lineTo(n2.x, n2.y);
                    ctx.stroke();
                }
            });
        });

        // Neural nodes
        ctx.fillStyle = '#5dadee';
        nodes.forEach(n => {
            ctx.beginPath();
            ctx.arc(n.x, n.y, 5, 0, Math.PI * 2);
            ctx.fill();
        });

        // Central pulse
        const pulseGrad = ctx.createRadialGradient(0, 0, 0, 0, 0, 18);
        pulseGrad.addColorStop(0, '#ffffff');
        pulseGrad.addColorStop(0.5, '#5dadee');
        pulseGrad.addColorStop(1, 'rgba(93, 173, 238, 0)');
        ctx.fillStyle = pulseGrad;
        ctx.beginPath();
        ctx.arc(0, 0, 18, 0, Math.PI * 2);
        ctx.fill();

        // Pulsing rings
        for (let i = 1; i <= 3; i++) {
            ctx.beginPath();
            ctx.arc(0, 0, 25 + i * 15, 0, Math.PI * 2);
            ctx.strokeStyle = `rgba(93, 173, 238, ${0.4 - i * 0.1})`;
            ctx.lineWidth = 2;
            ctx.stroke();
        }

        ctx.restore();

        // ===== Checkmark Badge =====
        ctx.save();
        ctx.translate(280, 500);

        // Badge circle
        ctx.fillStyle = 'rgba(46, 204, 113, 0.25)';
        ctx.beginPath();
        ctx.arc(0, 0, 30, 0, Math.PI * 2);
        ctx.fill();

        ctx.strokeStyle = '#2ecc71';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.arc(0, 0, 30, 0, Math.PI * 2);
        ctx.stroke();

        // Checkmark
        ctx.strokeStyle = '#2ecc71';
        ctx.lineWidth = 5;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        ctx.beginPath();
        ctx.moveTo(-14, 0);
        ctx.lineTo(-4, 12);
        ctx.lineTo(16, -12);
        ctx.stroke();

        ctx.restore();

        // ===== Floating Particles =====
        ctx.fillStyle = 'rgba(93, 173, 238, 0.2)';
        [[100, 100], [180, 480], [480, 70], [530, 560], [60, 320], [560, 220]].forEach(([x, y]) => {
            ctx.beginPath();
            ctx.arc(x, y, 3, 0, Math.PI * 2);
            ctx.fill();
        });

        // ===== RIGHT SIDE: Text Content =====
        ctx.textAlign = 'left';

        // Eyebrow
        ctx.fillStyle = '#5dadee';
        ctx.font = 'bold 16px Arial, sans-serif';
        ctx.fillText('TMS THERAPY GUIDE', 600, 130);

        // Decorative line
        const lineGrad = ctx.createLinearGradient(600, 0, 820, 0);
        lineGrad.addColorStop(0, '#5dadee');
        lineGrad.addColorStop(1, 'rgba(93, 173, 238, 0)');
        ctx.fillStyle = lineGrad;
        ctx.fillRect(600, 142, 220, 2);

        // Title
        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 52px Georgia, serif';
        ctx.fillText('Who Is a Good', 600, 220);

        ctx.fillText('Candidate for', 600, 290);

        // Highlighted title
        ctx.fillStyle = '#5dadee';
        ctx.font = 'bold 52px Georgia, serif';
        ctx.fillText('TMS Therapy?', 600, 360);

        // Subtitle
        ctx.fillStyle = 'rgba(255, 255, 255, 0.65)';
        ctx.font = '22px Arial, sans-serif';
        ctx.fillText('Discover if TMS is right for you', 600, 420);

        // Bottom info bar
        ctx.fillStyle = 'rgba(37, 111, 168, 0.25)';
        roundRect(ctx, 600, 470, 500, 60, 8);
        ctx.fill();

        // Info bar text
        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 15px Arial, sans-serif';
        ctx.fillText('Dr. Ritesh Amin, MD', 625, 507);

        ctx.fillStyle = 'rgba(255, 255, 255, 0.4)';
        ctx.font = '15px Arial, sans-serif';
        ctx.fillText('|', 810, 507);

        ctx.fillStyle = '#5dadee';
        ctx.font = 'bold 15px Arial, sans-serif';
        ctx.fillText('Board-Certified Psychiatrist', 830, 507);

        ctx.fillStyle = 'rgba(255, 255, 255, 0.4)';
        ctx.font = '15px Arial, sans-serif';
        ctx.fillText('|', 1065, 507);

        ctx.fillStyle = 'rgba(255, 255, 255, 0.6)';
        ctx.fillText('Edison, NJ', 1085, 507);

        // Bottom decorative circles
        ctx.fillStyle = 'rgba(37, 111, 168, 0.15)';
        ctx.beginPath();
        ctx.arc(40, 590, 50, 0, Math.PI * 2);
        ctx.fill();

        ctx.beginPath();
        ctx.arc(1160, 40, 60, 0, Math.PI * 2);
        ctx.fill();

        // Helper function for rounded rectangle
        function roundRect(ctx, x, y, w, h, r) {
            ctx.beginPath();
            ctx.moveTo(x + r, y);
            ctx.lineTo(x + w - r, y);
            ctx.quadraticCurveTo(x + w, y, x + w, y + r);
            ctx.lineTo(x + w, y + h - r);
            ctx.quadraticCurveTo(x + w, y + h, x + w - r, y + h);
            ctx.lineTo(x + r, y + h);
            ctx.quadraticCurveTo(x, y + h, x, y + h - r);
            ctx.lineTo(x, y + r);
            ctx.quadraticCurveTo(x, y, x + r, y);
            ctx.closePath();
        }

        // Download function
        function downloadImage() {
            const link = document.createElement('a');
            link.download = 'blog-tms-good-candidate.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        }
    </script>
</body>
</html>

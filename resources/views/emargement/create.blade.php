<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEFOR - Émargement</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #1a1f3c;
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: #252b4a;
            padding: 35px 30px;
            border-radius: 20px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.4);
            text-align: center;
        }
        h1 {
            font-size: 1.4em;
            font-weight: normal;
            margin-bottom: 6px;
        }
        .subtitle {
            color: #aaa;
            font-size: 0.85em;
            margin-bottom: 25px;
        }
        .canvas-wrap {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 18px;
        }
        canvas {
            display: block;
            width: 100%;
            height: 200px;
            touch-action: none;
        }
        .actions {
            display: flex;
            gap: 12px;
        }
        .btn {
            flex: 1;
            padding: 13px;
            border: none;
            border-radius: 25px;
            font-size: 0.95em;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-clear {
            background-color: transparent;
            border: 1px solid #3a4170;
            color: #aaa;
        }
        .btn-clear:hover { border-color: #c0392b; color: white; }
        .btn-submit {
            background-color: #c0392b;
            color: white;
        }
        .btn-submit:hover { background-color: #a93226; }
        .error {
            color: #ff6b6b;
            font-size: 0.85em;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Signature de présence</h1>
        <p class="subtitle">Signe dans le cadre ci-dessous</p>

        <p class="error" id="error-msg" style="display:none;">Merci de signer avant de valider.</p>

        <div class="canvas-wrap">
            <canvas id="signature-pad"></canvas>
        </div>

        <form method="POST" action="{{ route('emargement.store') }}" id="signature-form">
            @csrf
            <input type="hidden" name="signature" id="signature-input">

            <div class="actions">
                <button type="button" class="btn btn-clear" id="clear-btn">Effacer</button>
                <button type="submit" class="btn btn-submit">Valider la signature</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4/dist/signature_pad.umd.min.js"></script>
    <script>
        const canvas = document.getElementById('signature-pad');
        const signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)'
        });

        function resizeCanvas() {
            const ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext('2d').scale(ratio, ratio);
            signaturePad.clear();
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        document.getElementById('clear-btn').addEventListener('click', function () {
            signaturePad.clear();
        });

        document.getElementById('signature-form').addEventListener('submit', function (e) {
            if (signaturePad.isEmpty()) {
                e.preventDefault();
                document.getElementById('error-msg').style.display = 'block';
                return;
            }
            document.getElementById('signature-input').value = signaturePad.toDataURL();
        });
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de QR Code</title>
</head>
<style>
    body {
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    h1 {
        margin-top: 120px;
    }
    input {
        width: 220px;
        height: 15px;
    }
    button {
        border: 1px solid black;
        border-radius: 5px;
        width: 130px;
        height: 20px;
        margin-left: 15px;
        font-size: 15px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        transform-origin: center;
    }
    button:hover {
        background-color: #575757;
        cursor: pointer;
        color: white;
        transform: scale(1.2);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
</style>
<body>
    <h1>Bem-vindo ao Gerador de QR Code</h1>
    <form method="post" action="gerar_qrcode.php">
        <label for="texto">Texto ou URL: </label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Gerar QR Code</button>
    </form>
</body>
</html>
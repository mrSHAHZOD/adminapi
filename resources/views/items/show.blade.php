<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lebenslauf - Sodiqjon Sattarov</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            display: flex;
            max-width: 1600px;
            margin: 10px auto;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            background: #154c79;
            color: #fff;
            padding: 20px;
            width: 30%;
            box-sizing: border-box;
        }

        .main-content {
            padding: 20px;
            width: 70%;
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 150px;
            height: 150px;
            border-radius: 10px;
        }

        .personal-info p, .contact-info p, .languages p {
            margin-bottom: 10px;
        }

        .experience h3, .main-content h1, .main-content h2 {
            margin-bottom: 10px;
            color: #154c79;
        }

        .experience ul {
            list-style: none;
            padding: 0;
        }

        .experience ul li {
            margin-bottom: 15px;
        }

        .profile-phot {
            width: 80%;
            height: auto;
            margin-left: 85px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <img src="{{ public_path('images/' . $item->img) }}" alt="Sodiqjon Sattarov">
            </div>
            <div class="personal-info">
                <p><strong>Name:</strong> {{ $item->name }}</p>
                <p><strong>Nachname:</strong> {{ $item->surname }}</p>
                <p><strong>Name des Vaters:</strong> {{ $item->patronymic }}</p>
            </div>
            <div class="contact-info">
                <h3>KONTAKT</h3>
                <p><strong>Telefon:</strong> +998(99)995-50-36</p>
                <p><strong>E-Mail:</strong> admin@technoconsult.uz</p>
                <p><strong>Adresse:</strong> {{ $item->Address }}</p>
            </div>
            <div class="languages">
                <p>Deutsch: {{ $item->level }}</p>
                <p>Zusätzliche Sprachkenntnisse: {{ $item->level2 }}</p>
            </div>
        </div>
        <div class="main-content">
            <h1>Spezialität</h1>
            <h2>{{ $mappedTask }}</h2>
            <div class="experience">
                <h3>Berufserfahrung</h3>
                <ul>
                    {!! $item->html_code !!}
                </ul>
            </div>
            <div>
                <img src="{{ public_path('images/' . $item->imge) }}" class="profile-phot">
            </div>
        </div>
    </div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pdff.css">
    <title>Invoice</title>

</head>
<body>

    <table class="w-full">
        <tr>
            <td class="w-left">
                <img src="{{ public_path('images/' . $item->img) }}" alt="laravel daily" class="profile-photo" />

                <br>
                <h3>KONTAKT</h3>
                <br>
                <p><strong>Telefon:</strong> +998 777 77 77</p>
                <p><strong>E-Mail:</strong> example@example.com</p>
                <p><strong>Adresse:</strong> {{ $item->Address }} </p>
                <br>
                <br>
                <div>
                    <h3>
                        Age : {{ $item->age }}
                    </h3>
                    <h3>
                        Staatsbürgerschaft : {{ $item->nationality }}
                    </h3>
                </div>

                <p>Deutsch: {{ $item->level }}</p>
                <p>Zusätzliche Sprachkenntnisse: {{ $item->level2 }}</p>
            </td>
            <td class="w-right">
                <h2>Name: {{ $item->name }}</h2>
                <h2>Nachname: {{ $item->surname }}</h2>
                <h2>Name des Vaters: {{ $item->patronymic }}</h2>
                <br>
                <h1>Spezialität</h1>
                <h2>{{ $mappedTask }}</h2>
                <div class="experience">
                    <h1>Berufserfahrung</h1>
                    <h4>
                        {!! $item->html_code !!}
                    </h4>
                </div>
                <div>
                    <img src="{{ public_path('images/' . $item->imge) }}" class="profile-phot">
                </div>
            </td>
        </tr>
    </table>
</body>
</html>

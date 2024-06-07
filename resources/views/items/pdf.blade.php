<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .resume {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-picture {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 2em;
            margin-left: 40px;
            color: #333;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }



        section {
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #eaeaea;
            padding-bottom: 5px;
            text-align: center;
        }

        .job {
            margin-bottom: 15px;
        }

        .job h3 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }


        ul {
            list-style-type: disc;
            margin: 10px 0 10px 20px;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
        }

        p {
            margin-left: 100px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="resume">
        <div class="profile-picture">
            <img style="width: 150px; height: 150px; object-fit: cover; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px; text-align: center;"
                src="{{ public_path('images/' . $item->img) }}" alt="Profile Picture">
        </div>
        <header>
            <h1>Ismi: <span
                    style="margin-left: 40px; font-weight: 400; color: rgb(95, 99, 99);">{{ $item->name }}</span></h1>
            <h1 style="margin-top: -30px;">Familiyasi: <span
                    style="margin-left: 40px; font-weight: 400; color: rgb(95, 99, 99);">{{ $item->surname }}</span>
            </h1>
            <h1 style="margin-top: -30px;">Otasining ismi: <span
                    style="margin-left: 40px; font-weight: 400; color: rgb(95, 99, 99);">{{ $item->patronymic }}</span>
            </h1>
            <h1 style="margin-top: 0px;">Til Bilish Darajasi: <span
                    style="margin-left: 40px;font_size: 23px; font-weight: 400; color: rgb(95, 99, 99);">{{ $item->level }}</span></h1>
            <h1 style="margin-top: -30px;">Mutaxassislik: <span
                    style="margin-left: 40px;font_size: 23px; font-weight: 400; color: rgb(95, 99, 99);">{{ $item->task }}</span></h1>
        </header>
        <section class="experience" style="margin-top: 100px;">
            <h2 style="text-align: center;">Bizga aloqaga chiqing</h2>
            <div class="job">
                <p style="margin-left: 160px;">+998(99)995-50-36 | +998(99)534-43-44</p>
                <p style="margin-left: 160px;">admin@technoconsult.uz</p>

            </div>
        </section>
    </div>
</body>

</html>


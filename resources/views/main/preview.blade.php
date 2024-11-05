<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survei Gedung POLNEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
</head>
<body>
    <div class="survey-container">
        <div class="survey-card">
            <div class="image-section">
                <img src="{{asset('image/gedung-polnep.jpeg')}}" alt="Gedung POLNEP">
            </div>
            <div class="content-section">
                <a href="{{ route('landingpage') }}" class="close-button">✖</a>
                <h2>Survei Gedung POLNEP</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <form>
                    <input type="text" placeholder="">
                    <input type="text" placeholder="">
                    <input type="text" placeholder="">
                    <input type="text" placeholder="">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

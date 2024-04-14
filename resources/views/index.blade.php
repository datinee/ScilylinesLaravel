<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scilylines</title>

    <!-- Inclure les liens vers les fichiers CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center" style="color: green">Scilylines</h1>
<br>
    <!-- Carrousel Bootstrap -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset ('photos/flashDiapo01.jpg')}}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset ('photos/flashDiapo02.jpg')}}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset ('photos/flashDiapo03.jpg')}}" class="d-block w-100" alt="Image 2">
            </div>
    </div>
<br>
    <!-- Bouton pour mener vers une autre page -->
    <a href="{{ route('ferry.index') }}" class="btn btn-outline-success">Voir les bateaux</a>

</div>
</div>
<!-- Inclure les liens vers les fichiers JavaScript de Bootstrap (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
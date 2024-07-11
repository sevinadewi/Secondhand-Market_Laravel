<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to right, #FFFFFF, #CCBA5A); /* Gradasi kuning */
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center mt-5" style=>
        <div class="card mb-3" style="max-width: 800px; max-height:500px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('assets/images2/meja1.jpeg') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Meja Belajar - Kondisi Prima</h5>
                  <h2>Rp150.000</h2><br>
                  <p><strong>Detail</strong></p>
                  <p class="card-text">Kondisi: Bekas pakai, namun terawat dengan sangat baik. Tidak ada goresan besar atau kerusakan struktural. Semua laci berfungsi dengan baik.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <button type="button" class="btn btn-primary" disabled>Buy</button>
                <button type="button" class="btn btn-outline-primary" disabled>Cancel</button>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
</html>
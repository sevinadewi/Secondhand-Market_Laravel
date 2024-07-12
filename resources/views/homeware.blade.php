@extends('layout.master')
@section('content')
    <article>

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Products</h2>

          <ul class="product-list">

            @foreach($barang as $br)
            <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="{{url($br->picture)}}" width="312" height="350" loading="lazy"
                    alt="Running Sneaker Shoes" class="image-contain">

                </figure>

                <div class="card-content">


                  <h3 class="h3 card-title">
                    <a href="{{route('detail', ['id' => $br->id])}}">{{$br->nama}}</a>
                  </h3>

                  <data class="card-price" value="{{$br->harga}}">{{$br->harga}}</data>

                </div>

              </div>
            </li>
            @endforeach

           

          </ul>

        </div>
      </section>

    </article>
@endsection
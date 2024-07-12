@extends('layout.master')
@section('content')
    <article>

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Buy Product</h2>

              <div class="d-flex justify-content-center mt-5" style=>
                  <div class="card mb-3" style="max-width: 800px; max-height:500px">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{ url($barang->picture) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">{{$barang->nama}}</h5>
                            <h2>{{$barang->harga}}</h2><br>
                            <p><strong>Detail</strong></p>
                            <p class="card-text">{{$barang->deskripsi}}</p>
                            @auth
                            <a href="{{route('buy',['id_barang' => $barang->id])}}" type="button" class="btn btn-primary" style="max-width: 100px">Buy</a>
                            @endauth
                            @guest
                            <button type="button" class="btn btn-secondary" disabled>Buy</button>
                            @endguest
                          <button type="button" class="btn btn-outline-primary" disabled>Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>

          

        </div>
      </section>

    </article>
@endsection


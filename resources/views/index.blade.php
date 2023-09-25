@extends('welcome')
@section('content')
    <!--banner-->
    <div class="px-4 mb-4">
        <img src="{{ asset('assets/banner.jpeg') }}" class="w-100 rounded-3" />
    </div>

    <!--catalogue-->
    <h3 class="text-center" id="Collections">Our Collections</h3>
    <div class="text-center w-50 mx-auto fw-light">Kami menawarkan banyak varian aroma parfume. Dan setiap Parfume
        berisi bahan 3 in 1 yaitu parfume, body mist dan deodorant.
    </div>

    <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
        <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset('assets/parfume1.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text"> FLORAL ELEGANCE 45 ML</p>
                </div>
                <div class="d-none deskripsi">
                    <p>[PARFUME WANITA] Mawar segar jasmin yang mempesona, dan peony yang anggun mengisi udara
                        romantisme yang tak tertandingi</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
                    <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp.40,000,00</span>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset('assets/parfume2.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text ">VERDANT ESSENCE 45 ML</p>
                </div>
                <div class="d-none deskripsi">
                    <p>[PARFUME WANITA] Aroma daun yang menenangkan, sepertu berjalan di tengah pepohonan yang
                        rimbun. Aroma ini membawa anda dalam suasana damai dan alami</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
                    <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp.40,000,00</span>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset('assets/parfume3.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text"> LIVELY CITRUS SPARK 45 ML</p>
                </div>
                <div class="d-none deskripsi">
                    <p>[PARFUME WANITA] Dengan sentuhan jeruk ceria dan aroma lemon yang menyegarkan, ini adalah
                        aroma yang memancarkan energi dan keceriaan</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
                    <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp.40,000,00</span>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset('assets/parfume4.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text"> OPHELIE 45 ML</p>
                </div>
                <div class="d-none deskripsi">
                    <p>[PARFUME PRIA] Aroma dengan perpaduan Kopi,Bunga &Floral</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
                    <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp.40,000,00</span>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset('assets/parfume5.jpeg') }}"class="card-img-top">
                <div class="card-body">
                    <p class="card-text">GODFREY 45 </p>
                </div>
                <div class="d-none deskripsi">
                    <p>[PARFUME PRIA] Aroma dengan perpaduan Ambergris dan Cedar Wood</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
                    <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp.40,000,00</span>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset('assets/parfume6.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">ZOE 45 ML</p>
                </div>
                <div class="d-none deskripsi">
                    <p>[PARFUME PRIA] Aroma dengan kesegaran floral woody musk</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">detail</a>
                    <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp.40,000,00</span>
                </div>
            </div>
        </div>
    </div>
@endsection

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VASYL PARFUME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body class="bg-secondary">
    <div class="container p-0  mb-4 mt-4 rounded-3 shadow bg-white">
        <!--menu-->
        <nav class="d-md-flex p-4">
            <div>
                <h1><a href="/">VASYL PARFUME</a></h1>
            </div>
            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-md-3"><a href="/product"
                            class="text-decoration-none text-dark fw-bold">Our Product</a></li>
                    <li class="list-inline-item mx-md-3"><a href="/about"
                            class="text-decoration-none text-dark fw-bold">About Us</a></li>
                    <li class="list-inline-item mx-md-3"><a href="/order"
                            class="text-decoration-none text-dark fw-bold">How To Order</a></li>
                </ul>
            </div>
        </nav>
        @yield('content');


        <!--about us-->
        <div id="tentang" class="px=4 py-4 bg-secondary text-center">
            <div class="mx-auto w-75">
                <h3 class="text-white">About Us</h3>
                <p class="text-center text-white"><img src="{{ asset('assets/about-us.jpeg') }}" align="left"
                        style="width: 100px;height:auto" class="me-3 mb-3" />Vasyl Parfume adalah suatu brand yang
                    dibentuk V Team. Usaha kami mencakup penjualan Product Parfume 3 in 1. Brand menawarkan beberapa
                    varian aroma parfume yang berbeda dari parfume lainnya karena memiliki ciri khas aroma tersendiri.
                </p>
            </div>
        </div>
        <!--how to order-->
        <div id="order" class="px=4 py-4 bg-light text-center">
            <div class="mx-auto w-75">
                <h3 class="text-black">How To Order</h3>
                <p class="text-center text-black"><img src="{{ asset('assets/order.png') }}" align="right"
                        style="width: 100px;height:auto" class="ms-3 mb-3" /> Parfume kami bisa di order langsung
                    dengan klik detail dan beli produk ini. Atau dengan menghubungi kami di Instagram :@vasylparfume dan
                    whatsapp: 0882015043348.</p>
            </div>
        </div>


        <!--copyright-->
        <div class="text-center p-4 border-top">&copy; 2023 V Team - Vasyl Parfume</div>
    </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-none btnModal" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 modalTitle" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="modalImage col-md-6 col-12"></div>
                    <div class=" col-md-6 col-12"></div>
                    <div class="modalDeskripsi"></div>
                    <div class=" d-md-flex">
                        <a href="" target='blank' class="btn btn-sm btn-warning d-block btnBeli">Beli Produk
                            Ini</a>
                        <span class="ms-auto text-danger fw-bold d-block text-center modalHarga"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="javascript/main.js"></script>
</body>

</html>

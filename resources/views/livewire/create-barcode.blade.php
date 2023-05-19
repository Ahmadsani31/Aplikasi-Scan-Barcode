<div>
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Buat Barcode</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Buat Barcode</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="position-relative text-center">
                <img src="" class="img-thumbnail" alt="">
            </div>
            <div class="row justify-content-between gy-4 mt-4">
                <input type="text" class="form-control mt-2">
                <button type="button" class="btn btn-info btn-sm mt-2 btn-block">Buat Qr Code</button>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
    @push('contentJS')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        window.addEventListener("DOMContentLoaded", (event) => {
            Echo.channel('notif-channel')
                .listen('NotifEvent', (e) => {
                    console.log(e);
                    alert('asdsa');
                });

        });

        const image = document.querySelector("img"),
            input = document.querySelector("input"),
            button = document.querySelector("button"),
            api1 = ' https://api.qrserver.com/v1/',
            api2 = 'create-qr-code/?size=350x350&data=';
        image.src = '{{ asset("img/image.png") }}';
        button.addEventListener("click", () => {
            if (input.value !== '') {
                image.src = `${api1}${api2}${input.value}`;

            } else {
                alert('inputan kosong');
            }
        });
    </script>
    @endpush
</div>
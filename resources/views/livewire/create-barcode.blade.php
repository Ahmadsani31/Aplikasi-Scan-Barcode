<div>
    <div>
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Buat Barcode Wisuda</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="container">
                    <!-- Contact Section Form-->
                    <div class="row justify-content-center">
                        <div class="divider-custom">
                            <img src="" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-lg-8 col-xl-7">
                            <input type="text" class="form-control mt-2">
                            <button type="button" class="btn btn-info btn-sm mt-2 btn-block">Buat Qr Code</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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

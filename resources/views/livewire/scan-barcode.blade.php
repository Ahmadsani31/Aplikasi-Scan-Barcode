<div>

    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Scan Barcode</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Scan Barcode</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="position-relative text-center">
                <div style="max-width: 800px;display: block;margin: auto;">
                    <div id="reader"></div>
                </div>
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

        $('#reader').html(`<img src="{{ asset('img/image.png') }}" alt="Poker Card">`);

        const config = {
            fps: 10,
            qrbox: {
                width: 350,
                height: 350
            }
        };
        const html5QrCode = new Html5Qrcode( /* element id */ "reader");

        Html5Qrcode.getCameras().then(devices => {
            /**
             * devices would be an array of objects of type:
             * { id: "id", label: "label" }
             */
            console.log(devices.length);

            if (devices && devices.length) {
                var cameraId = devices[0].id;
                // .. use this to start scanning.
                html5QrCode.start({
                    deviceId: {
                        exact: cameraId
                    }
                }, config, qrCodeSuccessCallback);
            } else {

            }
        }).catch(err => {
            // handle err
            Swal.fire({
                icon: 'warning',
                title: 'Perhatian!',
                text: 'Perangkat kamera tidak ditemukan!',
                showConfirmButton: false,
                timer: 1500
            })
        });

        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            /* handle success */
            console.log(decodedText);
            console.log(decodedResult);
            Livewire.emit('updateWisudawan', decodedText)
            html5QrCode.stop();
            window.addEventListener('alert-show', event => {
                Swal.fire({
                    icon: 'success',
                    title: event.detail.Nama,
                    text: 'Happy Graduation',
                    showConfirmButton: false,
                    timer: 1500
                })
            })

            setTimeout(
                function() {
                    //do something special
                    html5QrCode.start({
                        facingMode: "user"
                    }, config, qrCodeSuccessCallback);

                }, 2000);
        };
    </script>
    @endpush
</div>
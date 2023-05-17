<div>
    <div>
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Scan Barcode Wisuda</h2>
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
                        <div class="col-lg-8 col-xl-7">
                            <div id="reader"></div>
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
                    // alert('asdsa');
                });

        });
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
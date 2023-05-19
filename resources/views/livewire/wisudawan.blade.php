<div>

    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Data Wisudawan</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Data Wisudawan</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="d-flex flex-wrap">
            <div class="cards-list">
                @php
                $no =1;
                @endphp
                @foreach ($mhsw as $mh)
                <div class="card 1">
                    <div class="card_image">

                        @if($mh->Status == 'Y')
                        @if($mh->Kelamin == 'L')
                        <img src="{{asset('img/man.png')}}" />
                        @else
                        <img src="{{asset('img/avatar.png')}}" />
                        @endif
                        @else
                        <img src="{{asset('img/user.png')}}" />
                        @endif
                    </div>
                    <div class="card_title title-white bg-info {{ $mh->MhswID }}" id="{{ $mh->MhswID }}">
                        <p class="m-0">{{ $mh->MhswID }}</p>
                        <p class="m-0" style="font-size: 10px;">{{ $mh->Nama }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

    @push('contentJS')
    <script>
        function kirimPesan() {
            // alert('asd');
            Livewire.emit('postRefresh');
        }

        // window.addEventListener('name-updated', event => {
        //     alert('Name updated to: ' + event.detail.newName);
        // })
        window.addEventListener("DOMContentLoaded", (event) => {
            Echo.channel('notif-channel')
                .listen('NotifEvent', (e) => {
                    console.log(e);
                    alert('ada');
                    Livewire.emit('postRefresh');
                });

        });
    </script>
    @endpush
</div>
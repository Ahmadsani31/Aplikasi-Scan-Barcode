<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <section class="page-section portfolio" id="portfolio">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mahasiswa Sidang 20222</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
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
    </section>
    <!-- About Section-->
    <!-- Contact Section-->
</div>
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
                // alert('ada');
                Livewire.emit('postRefresh');
            });

    });
</script>
@endpush
<div class="section" id="catalog">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-lg-6 mt-4">
                <div class="justify-content-center h-100">
                    <div class="card-catalog bg-catalog p-5 d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <h3 class="text-white py-4">Коллекция осень 2020</h3>
                            <button class="btn-catalog text-white"  data-toggle="modal" data-target="#submit">Получить каталог</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 overlay mt-4">
                <div class="d-flex justify-content-center">
                    <img data-toggle="modal" data-target="#product" src="{{ asset('image/1.png') }}" class="w-100" style="cursor: pointer"
                         alt="photo">
                    {{--<div class="mask flex-center rgba-black-strong">--}}
                        {{--<p class="white-text p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
                            {{--eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-lg-3 col-12 overlay mt-4">
                <div class="d-flex justify-content-center">
                    <img data-toggle="modal" data-target="#product1"  src="{{ asset('image/5.png') }}" class="w-100 " style="cursor: pointer"
                         alt="photo">
                    {{--<div class="mask flex-center rgba-black-strong">--}}
                        {{--<p class="white-text p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
                            {{--eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-lg-3 col-12 view overlay mt-4">
                <div class="d-flex justify-content-center">
                    <img data-toggle="modal" data-target="#product"  src="{{ asset('image/1.png') }}" class="w-100" style="cursor: pointer"
                         alt="photo">
                    {{--<div class="mask flex-center rgba-black-strong">--}}
                        {{--<p class="white-text p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
                            {{--eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-lg-3 col-12 view overlay mt-4">
                <div class="d-flex justify-content-center">
                    <img data-toggle="modal" data-target="#product2"   src="{{ asset('image/2.png') }}" class="w-100  " style="cursor: pointer"
                         alt="photo">
                    {{--<div class="mask flex-center rgba-black-strong">--}}
                        {{--<p class="white-text p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
                            {{--eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-lg-3 col-12 view overlay mt-4">
                <div class="d-flex justify-content-center">
                    <img data-toggle="modal" data-target="#product3"  src="{{ asset('image/3.png') }}" class="w-100  " style="cursor: pointer"
                         alt="photo">
                    {{--<div class="mask flex-center rgba-black-strong">--}}
                        {{--<p class="white-text p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
                            {{--eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-lg-3 col-12 view overlay mt-4">
                <div class="d-flex justify-content-center">
                    <img data-toggle="modal" data-target="#product4"  src="{{ asset('image/4.png') }}" class="w-100  " style="cursor: pointer"
                         alt="photo">
                    {{--<div class="mask flex-center rgba-black-strong">--}}
                        {{--<p class="white-text p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
                            {{--eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.take-info').click( function () {
            $('#product').modal('hide');
            $('#product1').modal('hide');
            $('#product2').modal('hide');
            $('#product3').modal('hide');
            $('#product4').modal('hide');
            setTimeout(function () {
                $('#submit').modal('show');
            },100)
        })
    </script>
@endpush

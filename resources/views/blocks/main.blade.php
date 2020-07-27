<section class="bg-gray" id="main">
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 pt-5">
            <p class="main-text">Женская одежда больших размеров от производителей</p>
            <p class="py-3">Актуальные женские одежды больших размеров от производителя
                с минимальной суммой от 5000 рублей и бесплатной доставкой!</p>
            <div class="py-5 ">
                <button class="btn-main"  data-toggle="modal" data-target="#submit" style="filter: drop-shadow(0px 2px 27px rgba(0, 0, 0, 0.1));">Получить каталог</button>
                <div class="py-5 social">
                    <a href="https://api.whatsapp.com/send?phone=996507900300" class="text-decoration-none"><img src="{{ asset('icons/whatsapp.svg') }}" alt="whatsapp"></a>
                    <a href="https://t.me/Jizzele" class="text-decoration-none"><img src="{{ asset('icons/telegram.svg') }}" alt="telegram"></a>
                    <a href="https://www.instagram.com/jizelle.world/" class="text-decoration-none"><img src="{{ asset('icons/instagram.svg') }}" alt="instagram"></a>
{{--                    <a href="" class="text-decoration-none"><img src="{{ asset('icons/facebook.svg') }}" alt="facebook"></a>--}}
                    <a href="https://vk.com/jizzelle" class="text-decoration-none"><img src="{{ asset('icons/vk.svg') }}" alt="vk"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 pb-5 px-5">
            <div class="owl-one owl-carousel text-center">
                <div class="item">
                    <img class="img-fluid" src="{{ asset('image/1.png') }}"   alt="catalog">
                </div>
                <div class="item">
                    <img class="img-fluid" src="{{ asset('image/2.png') }}"   alt="catalog">
                </div>
                <div class="item">
                    <img class="img-fluid" src="{{ asset('image/3.png') }}"   alt="catalog">
                </div>
                <div class="item">
                    <img class="img-fluid" src="{{ asset('image/4.png') }}"   alt="catalog">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
{{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header text-center">--}}
                {{--<h5 class="modal-title text-center w-100 font-weight-bold py-2" >Заявка</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body" style="padding: 60px;">--}}
                {{--<div class="form-label-group">--}}
                    {{--<label for="inputName1">Имя</label>--}}
                    {{--<input type="text" id="inputName1" class="form-control" placeholder="Введите имя" required="" autofocus="">--}}
                {{--</div>--}}
                {{--<div class="form-label-group pt-4">--}}
                    {{--<label for="telephone1">Номер телефона</label>--}}
                    {{--<input type="text" id="telephone1" class="form-control" placeholder="Введите номер телефона" required="" autofocus="">--}}
                {{--</div>--}}
                {{--<div class="pt-4 text-center">--}}
                    {{--<button type="button" class="btn-modal">Отправить</button>--}}
                {{--</div>--}}


            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@push('scripts')

@endpush


<div class="section bg-submit">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 col-lg-6 justify-content-lg-start justify-content-center">
                <h2 class="font-weight-bold ">
                    Нужна консультация?
                </h2>
                <p class="text-submit">Оставьте свои данные, в течении 15 минут мы Вам перезвоним</p>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <button class="text-white btn-submit" data-toggle="modal" data-target="#submit">Оставить заявку</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title text-center w-100 font-weight-bold py-2" >Заявка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 40px;">
                <div class="form-label-group">
                    <label for="inputName">Имя</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Введите имя" required="" autofocus="">
                </div>
                <div class="form-label-group pt-4">
                    <label for="telephone">Номер телефона</label>
                    <input type="text" id="telephone" class="form-control" placeholder="Введите номер телефона" required="" autofocus="">
                </div>
                <div class="pt-4 text-center">
                    <button type="button" class="btn-modal">Отправить</button>
                </div>
                <div class="custom-control custom-checkbox pt-3">
                    <input type="checkbox" class="custom-control-input" id="myCheck" onclick="myFunction()">
                    <label class="custom-control-label" for="myCheck">Принять пользовательское соглашение</label>
                </div>
                <div class="pt-2 text-center">
                    <button id="accept" type="button" class="btn btn-success" style="display:none">Принимаю</button>
                    <button id="reject" type="button" class="btn btn-danger" style="display:none">Не принимаю</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="col-12 ">

</div>
@push('scripts')
    <script type="text/javascript">
        function myFunction() {
            let checkBox = document.getElementById("myCheck");
            let accept = document.getElementById("accept");
            let reject = document.getElementById("reject");
            if (checkBox.checked == true){
                accept.style.display = "block";
                reject.style.display = "block";
            } else {
                accept.style.display = "none";
                reject.style.display = "none";
            }
        }
    </script>

@endpush

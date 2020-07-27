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

<div class="col-12 ">

</div>
@push('scripts')
    <script type="text/javascript">
        function myFunction() {
            let checkBox = document.getElementById("myCheck");
            let checkBox2 = document.getElementById("myCheck2");
            if (checkBox.checked == true){
                $('#accept').prop('disabled', false);
            } else if(checkBox.checked != true) {
                $('#accept').prop('disabled', true);
            }

            if (checkBox2.checked == true){
                $('#accept2').prop('disabled', false);
            } else if(checkBox.checked != true) {
                $('#accept2').prop('disabled', true);
            }
        }
    </script>

@endpush

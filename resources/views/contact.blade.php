@extends('layouts.app')
@section('content')

    <div class="py-5 bg-light">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Форма обратной связи</h1>
                <p>Ждем ваших вопросов</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <form action="{{url('addmessage')}}" method="POST">
                        {{csrf_field()}}
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Имя..." required />
                            <label for="name">Имя</label>
                            <div class="invalid-feedback">Поле Имя обязательное</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Э-майл адрес</label>
                            <div class="invalid-feedback">Поле Э-майл обязательное</div>
                            <div class="invalid-feedback">Неправильный Э-майл адрес</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone">Номер телефона</label>
                            <div class="invalid-feedback">Поле Номер телефона обязательное</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="question" type="text" placeholder="Ваш вопрос..." style="height: 10rem"></textarea>
                            <label for="question">Ваш вопрос</label>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Сообщение успешно отправлено!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Ошибка при отправке сообщения!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-warning btn-lg disabled" id="submitButton" type="submit">Отправить</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

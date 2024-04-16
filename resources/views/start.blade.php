@extends('layouts.app')
@section('content')

    <!-- Header-->
    <header class="bg-purple-500 py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Duis eu augue vel dui dapibus porttitor</h1>
                        <p class="lead fw-normal text-white-50 mb-4">In in est ante. Nam quis ultricies mi, a scelerisque quam. Donec nec dapibus massa. Vivamus sed sagittis augue, ac ultricies turpis!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-warning btn-lg px-4 me-sm-3" href="#">Зарегистрироваться</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="event">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Подробнее о мероприятии</h2>
                    <hr>
                    <p>Duis eu augue vel dui dapibus porttitor sed in massa. In in est ante. Nam quis ultricies mi, a scelerisque quam. Donec nec dapibus massa. Vivamus sed sagittis augue, ac ultricies turpis. Quisque sed ex risus. Nullam leo leo, convallis vel interdum quis, cursus vel arcu.</p>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-purple-500 bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-alt"></i></div>
                            <h2 class="h5">Локация</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-purple-500 bg-gradient text-white rounded-3 mb-3"><i class="bi bi-clock"></i></div>
                            <h2 class="h5">Время</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-purple-500 bg-gradient text-white rounded-3 mb-3"><i class="bi bi-map"></i></div>
                            <h2 class="h5">Программма</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-purple-500 bg-gradient text-white rounded-3 mb-3"><i class="bi bi-mic"></i></div>
                            <h2 class="h5">Спикеры</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form-->
    <div class="py-5 bg-light" id="registrationForm">
        <!-- Registration form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Зарегестрируйте группу на мероприятие!</h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <form action="{{url('adduser')}}" method="POST">
                        {{csrf_field()}}
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="group_name" type="text" placeholder="Имя вашей группы..." required />
                            <label for="group_name">Название группы</label>
                            <div class="invalid-feedback">Поле Название обязательное</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="participants" type="text" placeholder="Количество участников..." required />
                            <label for="participants">Количество участников</label>
                            <div class="invalid-feedback">Поле Участников обязательное</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="contact_person" type="text" placeholder="Контактное лицо..." required />
                            <label for="contact_person">Контактное лицо</label>
                            <div class="invalid-feedback">Поле Контактного лица обязательное</div>
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
                            <textarea class="form-control" id="comment" type="text" placeholder="Ваш комментарий..." style="height: 10rem"></textarea>
                            <label for="comment">Комментарий</label>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Регистрация успешна!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Ошибка при отправке формы!</div></div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-warning btn-lg disabled" id="submitButton" type="submit">Отправить</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

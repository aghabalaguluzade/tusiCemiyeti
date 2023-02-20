@extends('layouts.master')
@section('title', 'Əlaqə')
@section('content')
     <section class="contact-page">
                <h2>Bizimlə Əlaqə</h2>
                <div class="container">
                    <div class="contact-info">
                        <div class="card">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit, amet consectetur adip</p>
                        </div>
                        <div class="card">
                            <i class="fa-solid fa-phone"></i>
                            <p>+994 50 111 22 33</p>
                        </div>
                        <div class="card">
                            <i class="fa-solid fa-envelope"></i>
                            <p>email.com</p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Ad</label>
                                        <input id="name" class="form-control" type="text" placeholder="Adınız">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="surname">Soyad</label>
                                        <input id="surname" class="form-control" type="text" placeholder="Soyadınız">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Mail ünvanı</label>
                                        <input id="email" class="form-control" type="email" placeholder="mail@gmail.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Telefon nömrəsi</label>
                                        <input id="phone" class="form-control" type="number" placeholder="+994 xx xxx xx xx">
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <textarea placeholder="Mesaj yaz..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button>Göndər</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
@endsection
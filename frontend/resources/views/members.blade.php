@extends('layouts.master')
@section('title', 'Üzv ol')
@section('content')
     <section class="contact-page">
                <h2>Üzv ol</h2>
                <div class="container">
                    <div class="contact-form">
                        @include('layouts.errors')
                        <form action="{{ route('membersPost') }}" method="POST">
                            @csrf
                            <div class="row">
                                <h2> Formu doldurun və üzv olun </h2>
                                <span> Qeyd: Tələb olunan məlumatlar qorunur. </span>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Ad Soyad</label>
                                        <input id="name" class="form-control" type="text" placeholder="Adınız" required name="name" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-poçt ünvanı</label>
                                        <input id="email" class="form-control" type="email" placeholder="test@gmail.com" name="email" required />
                                    </div>
                                </div>
                                <div class="col-sm-8 offset-2">
                                    <div class="form-group">
                                        <label for="phone">Telefon nömrəsi</label>
                                        <input id="phone" class="form-control" type="number" placeholder="+994 xx xxx xx xx" name="phone" required />
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <textarea placeholder="Mesaj yaz..." name="message"></textarea>
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

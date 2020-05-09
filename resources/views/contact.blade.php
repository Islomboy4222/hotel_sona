@extends('layouts/app', ['title' => 'Contact'])

@section('content')
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>856 Cordia Extension Apt. 356, Lake, US</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>(12) 345 67890</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>info.colorlib@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Fax:</td>
                                    <td>+(12) 345 67890</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                        @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{session()->get('success')}}
                                </div>
                            @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form method="POST" action="{{route('contact.store')}}" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Ism" value="{{old('name')}}" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" type="text" placeholder="Email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Xabar" value="{{old('message')}}"></textarea>
                                </div>
                                <button type="submit">Yuborish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection
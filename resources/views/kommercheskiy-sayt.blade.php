@extends('template')
@section('title') {{$page->metaTitle}} @endsection
@section('keywords') {{$page->metaKeywords}}  @endsection
@section('description') {{$page->metaDescription}}  @endsection
@section('canonical') {{$page->metaCanonical}}  @endsection
@section('content')
    <div class="header-links-jump_back-body alert">

        <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
        <p>/</p>
        <a href="{{route("services")}}"><span class="header-links-jump_back-title">@lang('messages.services')</span></a>
        <p>/</p>
        <span class="header-links-jump_back-title">{{$page->name}}</span>

    </div>


    <section class="section-text">
            <div class="section-text-wrapper">
                        <div class="section-text-content section-text-bl">
                            {!! $page->content !!}
                    </div>
            </div>
    </section>
    @include('blocks.word-for-you')
    {!! $commonQuestion->content !!}
    @include('blocks.comments')
    <section class="section-form_call search-advertising-form_call2">
            <div class="section-form_call-wrapper">
                    <div class="section-form_call-body search-advertising-form-call-body">
                        <div class="section-form_call-title-body">
                                <div class="section-form_call-title-body">
                                        <h2 class="section-form_call-title top-h2-title">@lang('messages.makeClaim')</h2>
                                        <div class="section-text-title-image-body">
                                            <span class="section-text-title-image-line section-form_call-title-image-line"></span>
                                            <div class="section-text-title-image2 section-form_call-text-title-image"></div>
                                            <span class="section-text-title-image-line section-form_call-title-image-line"></span>
                                        </div>
                                        <span class="section-form_call-title-double">@lang('messages.makeClaimSecond')</span>
                                    </div>
                            
    <form class="input-body" id="saveRequest" action="{{route("request")}}" method="get">
           
            <input class="section-form_call-name" id="name" type="text" name="name" placeholder=" "  required="required">
            <span class="popup_user_data_name">@lang("messages.whoAreYou") <span style="color:red;">*</span></span>
            <input id="email" type="email" name="email" placeholder=" " class="section-form_call-name" required="required">
            <span class="popup_user_data_email">E-mail <span style="color:red;">*</span></span>
            <div class="section-form_call-content">
                    <input id="form_call-phone" class="section-form_call-phone" type="tel" name="phone" placeholder=" "  required="required">
                    <span class="section-form_call-phone-title desktop-call-phone">@lang('messages.phoneNumber')</span>
                </div>
                <select class="select-popup" id="services" name="services">
                        <option id="services" selected="selected">@lang('messages.chooseService')</option>
                        @foreach($menuHead as $key=>$value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
            
                    </select>
        
            <textarea id="message" name="message" placeholder=" " class="popup_user-message" required="required"></textarea>
            <span class="popup_user_data_message">@lang("messages.message") <span style="color:red;">*</span></span>
            <span class="small-text"> <span style="color:white;">*</span> (@lang('messages.required'))</span>
            <div class="form_call-submit-body">
            <input type="submit" id="button" class="popup_send" value="Отправить заявку">
            </div>
        </form>
                        </div>
                    </div>
            </div>
    </section>
    

    {!! $services->content !!}

@endsection

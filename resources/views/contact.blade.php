@extends('layout')

@section('content')
<div id="shopify-section-page-contact-template" class="shopify-section"><div class="page-width page-width--narrow page-content page-content--with-blocks">
    <header class="section-header">
              <h1 class="section-header__title">Contactez-nous</h1>
            </header><div class="rte text-spacing">
            <p style="text-align: center;"><strong>Pour toutes questions, utilisez le formulaire ci-dessous.</strong></p>
          </div></div>
    <div class="page-blocks"><div class="page-block page-block-page-contact-template-0"><div class="index-section">
      <div class="page-width page-width--narrow"><div class="form-vertical">
        
    <form method="post" action="/contact"  accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">
            @csrf
            <div class="form-mention text-left">
              @if(Session::has('success'))
<div class="alert alert-success">
  <span class="color-error">{{ Session::get('success') }}</span>
</div>
@endif
              <span class="color-error">*</span> champs requis
            </div>
            <hr class="hr--clear hr--small">
    
            <div class="grid grid--small">
              <div class="grid__item medium-up--one-half">
                <label for="ContactFormName-page-contact-template-0">Nom <span class="color-error">* <span class="visually-hidden">champs requis</span></span></label>
                <input type="text" id="ContactFormName-page-contact-template-0" class="input-full" name="name" autocapitalize="words" value="" required="">
              </div>
            </div>
            
            <div class="grid grid--small">
              <div class="grid__item medium-up--one-half">
                <label for="ContactFormEmail-page-contact-template-0">Email <span class="color-error">* <span class="visually-hidden">champs requis</span></span></label>
                <input type="email" id="ContactFormEmail-page-contact-template-0" class="input-full" name="email" autocorrect="off" autocapitalize="off" value="" required="">
              </div><div class="grid__item medium-up--one-half">
                  <label for="ContactFormPhone-page-contact-template-0">Téléphone</label>
                  <input type="tel" id="ContactFormPhone-page-contact-template-0" class="input-full" name="phone_number" pattern="[0-9\-]*" value="">
                </div></div><label for="ContactFormSubject-page-contact-template-0">Objet du message <span class="color-error">* <span class="visually-hidden">champs requis</span></span></label>
              <input type='text' name="subject" class="input-full"  required="">
                <label for="ContactFormMessage-page-contact-template-0">Message <span class="color-error">* <span class="visually-hidden">champs requis</span></span></label>
            <textarea rows="5" id="ContactFormMessage-page-contact-template-0" class="input-full" name="message" required=""></textarea>
            <button type="submit" class="btn">
              Envoyer
            </button>
    
          </form></div>
      </div>
    </div>
    </div></div>
    
    </div>

@endsection
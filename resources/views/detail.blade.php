@extends('layout')
@section('content')
  
<style>.like-button {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .like-button.animated {
    -webkit-animation: pop 0.9s both;
    animation: pop 0.9s both;
  }
  .like-button svg {
    opacity: 1;
  }
  .like-button svg path {
    fill: #333;
    transition: fill .4s ease-out;
  }
  .like-button.active svg path {   
    fill: #f32172;
   }
  
  @-webkit-keyframes pop {
    0% {
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
    }
    30% {
      -webkit-transform: scale3d(1.25, 0.75, 1);
      transform: scale3d(1.25, 0.75, 1);
    }
    40% {
      -webkit-transform: scale3d(0.75, 1.25, 1);
      transform: scale3d(0.75, 1.25, 1);
    }
    50% {
      -webkit-transform: scale3d(1.15, 0.85, 1);
      transform: scale3d(1.15, 0.85, 1);
    }
    65% {
      -webkit-transform: scale3d(0.95, 1.05, 1);
      transform: scale3d(0.95, 1.05, 1);
    }
    75% {
      -webkit-transform: scale3d(1.05, 0.95, 1);
      transform: scale3d(1.05, 0.95, 1);
    }
    100% {
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
    }
  }
  
  @keyframes pop {
    0% {
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
    }
    30% {
      -webkit-transform: scale3d(1.25, 0.75, 1);
      transform: scale3d(1.25, 0.75, 1);
    }
    40% {
      -webkit-transform: scale3d(0.75, 1.25, 1);
      transform: scale3d(0.75, 1.25, 1);
    }
    50% {
      -webkit-transform: scale3d(1.15, 0.85, 1);
      transform: scale3d(1.15, 0.85, 1);
    }
    65% {
      -webkit-transform: scale3d(0.95, 1.05, 1);
      transform: scale3d(0.95, 1.05, 1);
    }
    75% {
      -webkit-transform: scale3d(1.05, 0.95, 1);
      transform: scale3d(1.05, 0.95, 1);
    }
    100% {
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
    }
  } </style>
    <div id="shopify-section-article-template" class="shopify-section"><div class="collection-hero">
        <img class="collection-hero__image image-fit lazyautosizes lazyloaded" src="{{asset('/imgs/'.$posts->full_img)}}" data-aspectratio="1.7777777777777777" data-sizes="auto" alt="Image full" >
<noscript>
  <img class="collection-hero__image image-fit"
    src="{{asset('/imgs/'.$posts->full_img)}}"
    alt="Image full">
</noscript>

<div class="collection-hero__content">
  <div class="page-width">
    <header class="section-header section-header--hero">
      <div class="section-header__shadow">
<div class="article__date">
                <a href="#">{{$posts->tags}}</a>
</div><h1 class="section-header__title">
    {{$posts->title}}
        </h1></div>
    </header>
  </div>
</div>
</div><div class="page-width page-width--narrow page-content">
<article class="article"><div class="article__body rte">
<h2><b>{{$posts->title}}</b></h2>
<p><span style="font-weight: 400;">{{$posts->detail}}</span></p>


</div>


<div>
    @if(Session::has("success"))
    <h3 class="h4 text-success">{{session('success')}}</h3>
    @endif
    @auth
      <a href="/like/{{$posts->id}}" class="like-button">
        <?xml version="1.0" encoding="utf-8"?>
        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
        </a>
    @endif
    
</div>
<hr class="hr--large">
<div class="social-sharing"><a target="_blank" rel="noopener noreferrer" href="//www.facebook.com/sharer.php?u=" class="social-sharing__link" title="Partager sur Facebook">
  <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 32 32"><path fill="#444" fill-rule="evenodd" d="M16 0C7.164 0 0 7.162 0 16c0 8.833 7.164 15.998 16 15.998 8.835 0 16-7.165 16-15.998 0-8.838-7.165-16-16-16m4.237 9.758c-.533-.009-1.063-.005-1.596-.004-.706.002-1.13.367-1.173 1.066-.036.562-.009 1.125-.024 1.688-.003.2.116.185.249.185.805 0 1.614.008 2.42-.005.238-.005.315.05.287.301-.1.938-.189 1.878-.268 2.82-.02.213-.114.253-.307.25-.636-.01-1.271-.007-1.908-.004-.46.004-.414-.067-.414.4l.005 8.792c.002.309-.076.386-.383.381a85.42 85.42 0 00-3.282 0c-.308.007-.358-.097-.355-.375.01-1.474.005-2.948.005-4.426 0-1.497-.005-2.994.005-4.49.002-.255-.069-.332-.322-.322-.466.019-.933-.003-1.403.009-.188.005-.257-.05-.255-.25.01-.932.008-1.867.002-2.802-.002-.18.052-.239.233-.234.478.01.957-.015 1.433.01.277.012.333-.084.328-.342-.016-.71-.016-1.421 0-2.132.018-.87.252-1.68.77-2.387.652-.895 1.585-1.302 2.657-1.35 1.103-.05 2.208-.022 3.312-.034.153-.002.199.054.199.202-.004.944-.005 1.891 0 2.836.002.168-.052.218-.215.217"></path></svg>
  <span class="social-sharing__title" aria-hidden="true">Partager</span>
  <span class="visually-hidden">Partager sur Facebook</span>
</a><a target="_blank" rel="noopener noreferrer" href="//twitter.com/share?text={{$posts->title}}" class="social-sharing__link" title="Tweeter sur Twitter">
  <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 32 32"><path fill="#444" fill-rule="nonzero" d="M16 0C7.165 0 0 7.165 0 16s7.165 16 16 16 16-7.165 16-16S24.835 0 16 0zm7.305 12.475c.008.158.01.316.01.475 0 4.852-3.693 10.448-10.448 10.449-2.074 0-4.004-.608-5.63-1.65.288.034.58.05.877.05 1.72 0 3.304-.586 4.561-1.571a3.677 3.677 0 01-3.43-2.551 3.655 3.655 0 001.658-.063 3.673 3.673 0 01-2.946-3.6v-.047c.495.275 1.06.441 1.663.46a3.669 3.669 0 01-1.634-3.057c0-.673.182-1.304.497-1.846a10.427 10.427 0 007.57 3.837 3.673 3.673 0 016.258-3.35 7.366 7.366 0 002.332-.89 3.687 3.687 0 01-1.615 2.03 7.324 7.324 0 002.11-.578 7.463 7.463 0 01-1.833 1.902z"></path></svg>
  <span class="social-sharing__title" aria-hidden="true">Tweeter</span>
  <span class="visually-hidden">Tweeter sur Twitter</span>
</a><a target="_blank" rel="noopener noreferrer" href="/" class="social-sharing__link" title="Épingler sur Pinterest">
  <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 256 256"><path d="M0 128.002c0 52.414 31.518 97.442 76.619 117.239-.36-8.938-.064-19.668 2.228-29.393 2.461-10.391 16.47-69.748 16.47-69.748s-4.089-8.173-4.089-20.252c0-18.969 10.994-33.136 24.686-33.136 11.643 0 17.268 8.745 17.268 19.217 0 11.704-7.465 29.211-11.304 45.426-3.207 13.578 6.808 24.653 20.203 24.653 24.252 0 40.586-31.149 40.586-68.055 0-28.054-18.895-49.052-53.262-49.052-38.828 0-63.017 28.956-63.017 61.3 0 11.152 3.288 19.016 8.438 25.106 2.368 2.797 2.697 3.922 1.84 7.134-.614 2.355-2.024 8.025-2.608 10.272-.852 3.242-3.479 4.401-6.409 3.204-17.884-7.301-26.213-26.886-26.213-48.902 0-36.361 30.666-79.961 91.482-79.961 48.87 0 81.035 35.364 81.035 73.325 0 50.213-27.916 87.726-69.066 87.726-13.819 0-26.818-7.47-31.271-15.955 0 0-7.431 29.492-9.005 35.187-2.714 9.869-8.026 19.733-12.883 27.421a127.897 127.897 0 0 0 36.277 5.249c70.684 0 127.996-57.309 127.996-128.005C256.001 57.309 198.689 0 128.005 0 57.314 0 0 57.309 0 128.002z"></path></svg>
  <span class="social-sharing__title" aria-hidden="true">Épingler</span>
  <span class="visually-hidden">Épingler sur Pinterest</span>
</a></div>
@auth
<div class="card my-5">
  
    <h5 class="card-header">Ajouter Commentaire</h5>
    <div class="card-body">
      <form method="POST" action="{{url('save-comment/'.$posts->id)}}"> 
        @csrf
        <textarea class="form-control" name="comment"></textarea>
        <input type="submit" class="btn btn return-link"  /></form>
    </div>
@endif
</div>
<div class="card my-4">
    <h5 class="card-header">Commentaires <span class='bade badge-danger'>{{count($posts->comments)}}</span></h5>
    <div class="card-body">
        @if($posts->comments)
        @foreach($posts->comments as $comment)
       <blockquote class="blockquote">
        <p class="mb-0">{{$comment->comment}}</p>
        @if($comment->user_id==0)
        <footer class="blockquote-footer">Admin<cite title="{{$comment->created_at->toDateTimeString()}}">{{$comment->created_at->toDateTimeString()}}</cite></footer>
        @else
          @if($comment->user_id== auth()->user()->id )

        <footer class="blockquote-footer">{{$comment->user->name}} <cite title="{{$comment->created_at->toDateTimeString()}}">{{$comment->created_at->toDateTimeString()}}</cite>
        <a href="{{url('detail/'.$posts->id.'/delete-comment/'.$comment->id)}}">Modifier</a><a href="{{url('detail/'.$posts->id.'/delete-comment/'.$comment->id)}}"> Supprimer</a>
        </footer>
       @endif
       @endif
      </blockquote>
        
        @endforeach
                @endif
    </div>

</div>
<hr class="hr--large">

</article>
<div class="text-center">
<a href="/" class="btn return-link"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-left" viewBox="0 0 50 15"><path d="M50 5.38v4.25H15V15L0 7.5 15 0v5.38z"></path></svg> Retour à Le journal d'une curly</a>
</div>
</div>

<script type="text/javascript">
let button = document.querySelector(".like-button");

    button.addEventListener("click", function(e) {
      this.classList.toggle("active");
      this.classList.add("animated");
      generateClones(this);
    });
    
    
    function generateClones(button) {
      let clones = randomInt(2, 4);
      for (let it = 1; it <= clones; it++) {
        let clone = button.querySelector("svg").cloneNode(true),
          size = randomInt(5, 16);
        button.appendChild(clone);
        clone.setAttribute("width", size);
        clone.setAttribute("height", size);
        clone.style.position = "absolute";
        clone.style.transition =
          "transform 0.5s cubic-bezier(0.12, 0.74, 0.58, 0.99) 0.3s, opacity 1s ease-out .5s";
        let animTimeout = setTimeout(function() {
          clearTimeout(animTimeout);
          clone.style.transform =
            "translate3d(" +
            (plusOrMinus() * randomInt(10, 25)) +
            "px," +
            (plusOrMinus() * randomInt(10, 25)) +
            "px,0)";
          clone.style.opacity = 0;
        }, 1);
        let removeNodeTimeout = setTimeout(function() {
          clone.parentNode.removeChild(clone);
          clearTimeout(removeNodeTimeout);
        }, 900);
        let removeClassTimeout = setTimeout( function() {
          button.classList.remove("animated")
        }, 600);
      }
    }
    
    
    function plusOrMinus() {
      return Math.random() < 0.5 ? -1 : 1;
    }
    
    function randomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }
    </script>       


</div>

@endsection

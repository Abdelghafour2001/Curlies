@extends('layout')

@section('content')
<div class="page-width page-content">
    <header class="section-header">
      <h1 class="section-header__title">Mon compte</h1>
      <a href="{{url('logout')}}" class="btn  btn--small section-header__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-logout" viewBox="0 0 64 64"><path stroke-linecap="round" d="M13.764 45.58c.271-.392.45-.65.45-1.254 0-.605-.179-.864-.45-1.256-.34-.49-.763-1.102-.763-2.25 0-1.15.423-1.76.763-2.251.271-.391.45-.65.45-1.254 0-.605-.179-.864-.45-1.256-.34-.491-.763-1.102-.763-2.252 0-1.149.422-1.76.762-2.252.272-.392.451-.652.451-1.257 0-.606-.179-.865-.45-1.258-.34-.491-.763-1.103-.763-2.252 0-1.168.566-2.198 1.067-3.107.314-.57.61-1.11.74-1.615.14-.542.143-1.176.146-1.846.005-1.066.01-2.168.558-3.153.564-1.014 1.57-1.65 2.455-2.212.562-.356 1.091-.691 1.465-1.08.38-.394.693-.933 1.025-1.505.547-.94 1.113-1.914 2.113-2.516 1.003-.603 2.152-.655 3.263-.705.669-.03 1.3-.06 1.836-.208.505-.14 1.04-.433 1.607-.744C30.216 7.583 31.28 7 32.5 7c1.22 0 2.285.583 3.224 1.097.566.31 1.102.604 1.608.744.534.149 1.166.178 1.835.208 1.112.05 2.26.102 3.263.706 1 .601 1.566 1.574 2.113 2.515.332.572.646 1.111 1.025 1.505.374.389.904.725 1.465 1.08.886.561 1.89 1.198 2.455 2.212.548.985.553 2.087.558 3.153.003.67.006 1.304.145 1.846.13.505.427 1.044.74 1.614.501.91 1.068 1.94 1.068 3.108 0 1.148-.423 1.76-.763 2.25-.27.392-.45.651-.45 1.255 0 .605.18.864.45 1.256.34.49.763 1.102.763 2.25 0 1.149-.423 1.76-.763 2.25-.272.392-.45.651-.45 1.255 0 .605.18.864.45 1.256.34.491.763 1.103.763 2.251 0 1.15-.423 1.76-.763 2.253-.27.392-.45.652-.45 1.257 0 .605.18.865.45 1.257.34.492.763 1.103.763 2.253a.9.9 0 01-.91.889"></path><path stroke-linecap="round" d="M12 57c1.926-6.186 5.622-11.273 10.408-14.325a1.547 1.547 0 011.668.013c.019.012.039.022.057.035 5.146 3.101 11.994 2.73 16.757.013l.059-.035a1.55 1.55 0 011.667-.011C47.39 45.744 51.078 50.827 53 57"></path><path d="M29.876 22.497c2.357 2.664 6.932 5.514 15.86 6.794-.753 4.472-3.846 8.154-7.958 9.884-.422.178-.854.337-1.297.472-.679.207-1.38.359-2.099.458-.61.084-1.23.142-1.862.142-.637 0-1.261-.06-1.877-.145-.72-.101-1.424-.25-2.104-.46a13.468 13.468 0 01-1.293-.475 13.547 13.547 0 01-5.65-4.469 12.77 12.77 0 01-2.411-6.254c6.225-1.326 9.227-3.836 10.691-5.947z"></path></svg>
        <span>Log out</span>
</a>
          <form id='logout-form' action="{{route('logout')}}" method='POST' class="d-none">@csrf</form>
    </header>
  
    <div class="grid">
      <div class="grid__item medium-up--two-thirds">
        <h2>Vos posts favoris</h2><p><a href="/favoris" class="text-link">Voir Favoris</a></p></div>
      <div class="grid__item medium-up--one-third">
        <h3>Détails du compte</h3>
  
        <p class="h5">Votre Nom Complet</p>
  
        <p>{{auth()->user()->name}}<br></p>
  
        
      </div>
  
    </div></div>
    @endsection
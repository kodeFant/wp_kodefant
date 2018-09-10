@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @if (!have_posts())
    <div class="nf404">
      <div class="nf404-content">
        <blockquote>{{ __('Jeg er fortapt! hvisker jeg for mig selv: mine damer og herrer, jeg er fortapt!') }}<cite><q>Sult</q> av Knut Hamsun</cite></blockquote>
        <h1>404</h1>
        <div class="nf404-text">
          {{ __('Siden du prøver å finne eksisterer ikke her.', 'sage') }}
          {!! get_search_form(false) !!}
        </div>
      </div>
      <img class="nf404-image" src="@asset('images/404.png')">
    </div>

  @endif
@endsection

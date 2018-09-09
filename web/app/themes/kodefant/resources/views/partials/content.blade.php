<article @php post_class() @endphp>
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">@php echo get_the_title() @endphp</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php the_content( __('Read more') , true ); @endphp
    </div>
  </article>

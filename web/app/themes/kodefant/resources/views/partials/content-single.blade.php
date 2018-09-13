<article @php post_class() @endphp>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    <div class="tags">
  @include('partials/entry-tags')
    </div>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>

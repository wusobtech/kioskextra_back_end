@extends('layout.master')

@push('plugin-styles')
  {!! Html::style('/assets/plugins/prismjs/prism.css') !!}
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
    <h1 class="page-title">Pagination</h1>
    <p class="lead">To indicate a series of related content exists across multiple pages. Read the <a href="https://getbootstrap.com/docs/4.3/components/pagination/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Basic example</h4>
    <p class="mb-3">Pagination is built with list HTML elements so screen readers can announce the number of available links.</p>
    <div class="example">
      <nav aria-label="Page navigation example">
        <ul class="pagination mb-0">
          <li class="page-item"><a class="page-link" href="#"><i data-feather="chevron-left"></i></a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#"><i data-feather="chevron-right"></i></a></li>
        </ul>
      </nav>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#"><i data-feather="chevron-left"></i></a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#"><i data-feather="chevron-right"></i></a></li>
  </ul>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>

    <h4 id="sizing">Sizing</h4>
    <p class="mb-3">Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
    <div class="example">
      <ul class="pagination mb-0 pagination-lg">
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            1
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
    </div>
    <figure class="highlight" id="Sizing">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="pagination pagination-lg">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Sizing"><i data-feather="copy"></i></button>
    </figure>
    <div class="example">
      <ul class="pagination mb-0 pagination-sm">
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            1
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
    </div>
    <figure class="highlight" id="sizingSm">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="pagination pagination-sm">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#sizingSm"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>

    <h4 id="alignment">Alignment</h4>
    <p class="mb-3">Change the alignment of pagination components with flexbox utilities.</p>
    <div class="example">
      <nav aria-label="Page navigation example">
        <ul class="pagination mb-0 justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <figure class="highlight" id="Alignment">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="pagination justify-content-center">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Alignment"><i data-feather="copy"></i></button>
    </figure>
    <div class="example">
      <ul class="pagination mb-0 justify-content-end">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="alignmentEnd">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="pagination justify-content-end">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#alignmentEnd"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>

    <h4 id="seperated">Sperated</h4>
    <p class="mb-3">Add calss <code>.pagination-separated</code>.</p>
    <div class="example">
      <nav aria-label="Page navigation example">
        <ul class="pagination mb-0 pagination-separated">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <figure class="highlight" id="Seperated">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="pagination pagination-separated">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Seperated"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>

    <h4 id="rounded">Rounded</h4>
    <p class="mb-3">Add calss <code>.pagination-rounded</code>.</p>
    <div class="example">
      <nav aria-label="Page navigation example">
        <ul class="pagination mb-0 pagination-rounded">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <figure class="highlight" id="Rounded">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="pagination pagination-rounded">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Rounded"><i data-feather="copy"></i></button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#sizing" class="nav-link">Sizing</a>
      </li>
      <li class="nav-item">
        <a href="#alignment" class="nav-link">Alignment</a>
      </li>
      <li class="nav-item">
        <a href="#seperated" class="nav-link">Seperated</a>
      </li>
      <li class="nav-item">
        <a href="#rounded" class="nav-link">Rounded</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/prismjs/prism.js') !!}
  {!! Html::script('/assets/plugins/clipboard/clipboard.min.js') !!}
@endpush
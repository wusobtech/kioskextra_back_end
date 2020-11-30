@extends('layout.master')

@push('plugin-styles')
  {!! Html::style('/assets/plugins/prismjs/prism.css') !!}
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
    <h1 class="page-title">Spinner</h1>
    <p class="df-lead">Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript. Read the <a href="https://getbootstrap.com/docs/4.3/components/spinners/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Border Spinner</h4>
    <p class="mb-3">Use the border spinners for a lightweight loading indicator.</p>
    <div class="example">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="colors">Colors</h4>
    <p class="mb-3">The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with text color utilities. You can use any of our text color utilities on the standard spinner.</p>
    <div class="example">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-secondary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-success" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-danger" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-warning" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-info" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-light" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-border text-dark" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <figure class="highlight" id="Colors">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="spinner-border text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-light" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-dark" role="status">
  <span class="sr-only">Loading...</span>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Colors"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="growing">Growing spinner</h4>
    <p class="mb-3">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
    <div class="example">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-secondary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-success" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-danger" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-warning" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-info" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-light" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <figure class="highlight" id="Growing">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="spinner-grow text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Growing"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="alignment">Alignment</h4>
    <p class="mb-3">Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>
    <div class="example">
      <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Alignment">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Alignment"><i data-feather="copy"></i></button>
    </figure>
    
    <div class="example">
      <div class="d-flex align-items-center">
        <strong>Loading...</strong>
        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
      </div>
    </div>
    <figure class="highlight" id="alignmentFlex">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-center">
  <strong>Loading...</strong>
  <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#alignmentFlex"><i data-feather="copy"></i></button>
    </figure>
    
    <div class="example">
      <div class="clearfix">
        <div class="spinner-border float-right" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <figure class="highlight" id="alignmentFlot">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="clearfix">
  <div class="spinner-border float-right" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#alignmentFlot"><i data-feather="copy"></i></button>
    </figure>
    
    <div class="example">
      <div class="text-center">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <figure class="highlight" id="alignmentTextCenter">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="text-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#alignmentTextCenter"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="size">Size</h4>
    <p class="mb-3">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
    <div class="example">
      <div class="spinner-border spinner-border-sm" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow spinner-grow-sm" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <figure class="highlight" id="Size">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="spinner-border spinner-border-sm" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm" role="status">
  <span class="sr-only">Loading...</span>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Size"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>

    <h4 id="buttons">Buttons</h4>
    <p class="mb-3">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>
    <div class="example">
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        <span class="sr-only">Loading...</span>
      </button>
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>
    </div>
    <figure class="highlight" id="Buttons">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Buttons"><i data-feather="copy"></i></button>
    </figure>

    <div class="example">
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <span class="sr-only">Loading...</span>
      </button>
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>
    </div>
    <figure class="highlight" id="buttonsB">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  <span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonsB"><i data-feather="copy"></i></button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Border spinner</a>
      </li>
      <li class="nav-item">
        <a href="#colors" class="nav-link">Colors</a>
      </li>
      <li class="nav-item">
        <a href="#growing" class="nav-link">Growing spinner</a>
      </li>
      <li class="nav-item">
        <a href="#alignment" class="nav-link">Alignment</a>
      </li>
      <li class="nav-item">
        <a href="#size" class="nav-link">Size</a>
      </li>
      <li class="nav-item">
        <a href="#buttons" class="nav-link">Buttons</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/prismjs/prism.js') !!}
  {!! Html::script('/assets/plugins/clipboard/clipboard.min.js') !!}
@endpush
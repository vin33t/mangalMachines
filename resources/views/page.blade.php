@extends('layouts/app')

@section('title')
    {{ $page->pageName }}
@endsection
@section('content')
    <div class="w-separator size_custom" style="height:120px"></div>

    <main id="page-content" class="l-main" itemprop="mainContentOfPage" style="padding-left: 8%; padding-right: 8%">
            {!! $page->pageContent!!}
    </main>

@endsection

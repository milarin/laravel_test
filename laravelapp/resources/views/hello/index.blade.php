@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>本文</p>
  <p>aaaaaaaaaaaa</p>
  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    メッセージ
    @endslot
  @endcomponent
  @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです'])

@endsection

@section('footer')
  footer
@endsection
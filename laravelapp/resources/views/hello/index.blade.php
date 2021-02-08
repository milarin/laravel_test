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

  <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item -> name }}</td>
        <td>{{ $item -> mail }}</td>
        <td>{{ $item -> age }}</td>
      </tr>
    @endforeach
  </table>

@endsection

@section('footer')
  footer
@endsection
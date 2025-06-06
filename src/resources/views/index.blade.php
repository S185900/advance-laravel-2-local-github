
<!-- 2-1: -->
@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }

  svg.w-5.h-5 {
    /*3-4:paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }


</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>
      {{$author->getDetail()}}
    </td>
  </tr>
  @endforeach
</table>
<!-- 3-4 ページネーション-->
{{ $authors->links() }}
@endsection




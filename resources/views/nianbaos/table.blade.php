@extends('layouts.default')
@section('title', '企业列表')
@section('content')
<div id="app">

</div>
@foreach($corps as $corp)
    <br />
    {{ strval($corp->regnum)}} <br />
    {{ $corp->corpname }} <br />
    {{ $corp->rep_person }} <br />
    <br />
@endforeach
{{ $corps->links() }}
@stop

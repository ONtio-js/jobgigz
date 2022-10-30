@extends('layouts.auth')

@section('content')
    <div class="my-5">

<form action="{{ route('reverify',session()->get('details.companyId')) }}" method="post">
    @csrf
    <button type="submit"> verify</button>
</form>

    </div>
@endsection

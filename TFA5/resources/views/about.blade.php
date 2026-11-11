@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="card">
    <h1>About This Application</h1>

    <p>
        This Laravel application was created for TFA5.
        It demonstrates the basic Model-View-Controller architecture
        of the Laravel framework. Names used here are real but some details are fictional. This application is for academic purposes only and is not a production-ready application.
    </p>

    <p>
        The customer and user pages currently use static PHP arrays
        as temporary data sources.
    </p>
</div>
@endsection
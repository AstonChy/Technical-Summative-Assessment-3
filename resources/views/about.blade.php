@extends('layouts.app')

@section('title', 'About | Tasks for Today')

@section('content')
<section class="page-heading"><p class="eyebrow">About the project</p><h1>A Laravel task manager built for everyday focus.</h1><p class="lead">Tasks for Today is a database-backed Laravel application developed by Ashton Chy for IT0049 Web System Technologies.</p></section>
<section class="content-panel"><h2>Application structure</h2><div class="about-list"><div><span>01</span><p><strong>Migrations</strong><br>The tasks and users tables are defined as version-controlled Laravel migrations.</p></div><div><span>02</span><p><strong>Eloquent</strong><br>Models retrieve tasks and the developer profile from the database.</p></div><div><span>03</span><p><strong>Blade views</strong><br>Each page receives data from the controllers and renders it through reusable templates.</p></div></div></section>
@endsection

@extends('layouts.app')

@section('title', 'Profile | Tasks for Today')

@section('content')
<section class="page-heading"><p class="eyebrow">Account information</p><h1>Developer profile</h1><p class="lead">The single user record stored in the application database.</p></section>
<section class="content-panel profile-panel"><div class="profile-avatar">{{ strtoupper(substr($user->full_name, 0, 1)) }}</div><p class="eyebrow">Username</p><h2>{{ $user->username }}</h2><div class="profile-details"><p><span>Full name</span>{{ $user->full_name }}</p><p><span>Email</span>{{ $user->email }}</p></div></section>
@endsection

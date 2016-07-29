@extends('layouts.site.header')

<br><br>
<h1 class="subheadingnews">Biology</h1>

<ul>
    @foreach($bio as $bios)
    <li><a href="{{'/biology/'}}{{$bios->id}}">{{$bios->year}} {{$bios->title}}</li></a>
    @endforeach
</ul>
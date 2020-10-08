@extends('errors.minimal')

@section('title', __('Tempo de resposta excedido'))
@section('code', '504')
@section('message', __('O servidor demorou a responder.'))

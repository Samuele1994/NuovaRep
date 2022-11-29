@extends('layouts.app')

@section('title','Contatti')

@section('content')

    <div class="container mt-5">
        <h1 class="mb-5">{{$titolo}}</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <form action="">
                        <div class="row">
                            <div class="col">
                                <label for="nome">Nome</label>
                                <input class="form-control" type="text" name="nome" id="nome">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection

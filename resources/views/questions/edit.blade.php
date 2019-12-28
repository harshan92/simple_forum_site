@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h3>Update Question</h3>
                    <div class="ml-auto">
                      <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all questions</a>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <form class="form" action="{{route('questions.update',$question->id)}}" method="post">
                    {{method_field('PUT')}}
                    @include('questions._form',['buttonText'=>'Update question'])
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

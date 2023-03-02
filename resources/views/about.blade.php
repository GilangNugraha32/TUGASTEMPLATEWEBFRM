@extends('layout.app')

@section('title', 'about')

@section('content')

<div class="card" style="width: 30rem;">
    <p class=" text-center">About Me</p>
    <img src="img/{{ $gambar }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
        <p class="card-text">{{ $email }}</p>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
            $(function() {
                $('#myModal').modal('show')
            });
        </script>

    </div>
</div>



@endsection
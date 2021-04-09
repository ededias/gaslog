<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

<div class="modal" data-modal="remove" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">Tem certeza que deseja excluir?</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
           <form id="form" method="post">
                <input class="btn btn-danger" type="submit" value="Delete"  />
                @method('delete')
                @csrf
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $("#excluir").click(function(){
        console.log(this);
        const data = this;
        const id = (data.getAttribute('data-id'));
        const form = document.getElementById('form');
        form.setAttribute('action', `{{route('delete')}}?id=${id}`);
        $(".modal").modal();
    });
</script>
</html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand-lg  border float-right">

    

        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    
    
</nav>

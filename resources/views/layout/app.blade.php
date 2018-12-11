<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PhoneCurry</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <style>
     .price-indicator {
      background-color: #f9f9f9;
    padding: 0px 30px;
    border-radius: 2px;
     }
     .autocomplete-suggestions {
    border: 1px solid #f8f9fa;
    background: #f8fafc;
    overflow: auto;
    border-radius: 0px;
    margin-top: 1px;
    color: #4a4a4a;
    box-shadow: 0 4px 30px 0 rgba(0,0,0,.13);
}
      </style>
    <script>
      $(document).ready(function(){

        $('#phone').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('search.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#result').fadeIn();  
                    $('#result').html(data);
          }
         });

        }
    });

    $(document).on('click', 'li', function(){  
        $('#result').fadeOut();  
    });  

  });

    </script>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PhoneCurry</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                <input class="form-control mr-sm-4" id="phone" type="text" placeholder="Search for phone.." name="phone">
              {{ csrf_field() }}
            </div>
            
          </nav>
          <div id="result" style="position: absolute; max-height: 330px; z-index: 9999; width: 280px; top: 42px; left: 142px; display: none;"></div>
<br>
            @yield('content')
    </body>
</html>
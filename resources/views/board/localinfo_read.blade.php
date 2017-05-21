<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <style type="text/css">
    .table-hover{
        width:800px;
        border: 0px;
    }
    .content{
        width: 800px;
    }
    </style>
</head>
<body>
     <center>
        
        
        <div class="jumbotron">
            <h1>{{$info->title}}</h1>
            <div class="content">
                <p>{{$info->content}}</p>
            </div>
        </div>
        
    
        
        <form action="{{route('delete',$info->id)}}" method="post" >
            <input type="hidden" name="_method" value="delete">
            {{csrf_field()}}
            <a class="btn btn-default" href="{{$info->id}}/edit" role="button">글수정</a>
            <a class="btn btn-default" href="{{route('list')}}" role="button">글목록</a>
            <button class="btn btn-default" type="submit">삭제</button>
        </form>
           
         
        
    </center>
   
</body>
</html>
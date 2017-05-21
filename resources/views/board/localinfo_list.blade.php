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
    .table{
        width: 550px;
        border: 0;
    }
    
    </style>
</head>
<body>
    <center>
        <font size=5>지역정보 알림 게시판</font>
        <br>
        <br>
        <table class="table">
            <tr>
                <td>번호</td>
                <td>제목</td>
                <td>날짜</td>
                <!--<td>조회수</td>-->
            </tr>
            @foreach ($info as $value)
            <tr>
                <!-- 번호 -->
                <td><a href="{{route('show',$value->id)}}">{{$value->id}}</a></td>
                <!-- 제목 -->
                <td><a href="{{route('show',$value->id)}}">{{$value->title}}</a></td>
                <!-- 날짜 -->
                <td><a href="{{route('show',$value->id)}}">{{$value->created_at}}</a></td>
                <!-- 조회수 -->
                <!--<td><a href="{{route('show',$value->id)}}}">{{$value->view }}</a></td>-->
            </tr>
             @endforeach
        </table>
                 <a class="btn btn-default" href="write" role="button">글쓰기</a>

    </center>
        <!--페이지 표시하는 테이블-->
        <center>
        <!--<nav>-->
        <!--      <ul class="pagination">-->
        <!--        <li class="disabled">-->
                    <!-- 이전-->
        <!--          <a href="#" aria-label="Previous">-->
        <!--            <span aria-hidden="true">이전</span>-->
        <!--          </a>-->
        <!--        </li>-->
        <!--        <li class="active"><a href="#">1</a></li>-->
        <!--        <li>-->
                <!-- 다음-->
        <!--          <a href="#" aria-label="Next">-->
        <!--            <span aria-hidden="true">다음</span>-->
        <!--          </a>-->
        <!--        </li>-->
        <!--      </ul>-->
        <!--</nav>-->
        </center>
    
   
   
</body>
</html>
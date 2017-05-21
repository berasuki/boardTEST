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
    </style>
</head>
<body>
    <center>
        <table class="table table-hover">
             <tr>
                 @foreach($info as $i)
               <td height=20 colspan=4 align=center>
                 <font><b>{{$i->title }}</b></font>
               </td>
             </tr>
             <tr>
               <td width=50 height=20 align=center bgcolor=#EEEEEE>{{$i->$id}}</td>
               <td width=300 bgcolor=white>운영자</td>
               <td width=50 height=20 align=cetner bgcolor=#EEEEEE>
                 날&nbsp;&nbsp;&nbsp;짜</td>
               <td width=50 bgcolor=white>{{$i->created_at }}</td>
               
             </tr>
            
             <tr>
               <td bgcolor=white colspan=4>
                   <content>{{$i->content }}</content>
               </td>
             </tr>
             @endforeach
             <!--기타 버튼 틀 -->
             <tr>
               <td width=50 height=20 colspan=4 align=left  bgcolor=white>
                 이전
               </td>
             </tr>
             <tr>
               <td height=20 colspan=4 align=left  bgcolor=white>
                 <font><b>다음</b></b></font>
               </td>
             </tr>
             <tr>
               <td colspan=4 bgcolor=#999999>
                 <table width=100%>
                   <tr>
                     <td width=200 align=left height=20>
                       <!--<button>-->
                       <!--     <a href=list.php?no=>-->
                       <!--      <b>수정</b>-->
                       <!--     </a>-->
                       <!--</button>-->
                       <a class="btn btn-default" href="#" role="button">수정</a>
                       <!--<button>-->
                       <!--     <a href=list.php?no=>-->
                       <!--      <b>삭제</b>-->
                       <!--     </a>-->
                       <!--</button>-->
                       <a class="btn btn-default" href="#" role="button">삭제</a>
                     </td>
                     <td width=200 align=right height=20>
                       <!--   <button align=right>-->
                       <!--     <a href=list.php?no=>-->
                       <!--      <b>목록</b>-->
                       <!--     </a>-->
                       <!--</button>-->
                       <a class="btn btn-default" href="#" role="button">목록</a>
                     </td>
                     <!--기타버튼 끝-->
                     <!-- 이전 다음 표시 -->
                   
                   </tr>
        </table>
    </center>
</body>
</html>
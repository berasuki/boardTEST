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
    .table {
      width: 580px;
      border: 0px;
    }
    </style>
</head>
<body topmargin=0 leftmargin=0 test=#464646>
  <center>
    <h1>ssss</h1>
      <br>
      <!--입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다 -->
        <table class="table table-bordered">
          <thead>
              <caption> 도서관알림 글 수정 </caption>
          </thead>
          <tbody>
              <form action="{{route('update',$info->id)}}" method="post" >
                <input type="hidden" name="_method" value="PUT"> 
                {{csrf_field()}}
                  <tr>
                      <th>제목: </th>
                      <td><input type="text" value="{{$info->title}}" name="title" class="form-control"/></td>
                  </tr>
                  <tr>
                    <th>첨부파일: </th>
                    <td><input type="file" placeholder="파일을 선택하세요." name="filename" class="form-control"/></td>
                     
                  </tr>
                  <tr>
                      <th>내용: </th>
                      <td><textarea cols="10" value="{{$info->content}}" name="content" class="form-control"></textarea></td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <button type="submit">수정</button>
                          <input type="button" value="reset" class="pull-left"/>
                          <input type="button" value="글 목록 " class="pull-right" onclick="history.go(-1)"/>
                          
                      </td>
                  </tr>
              </form>
          </tbody>
        </table>
  </center>
  
</body>
</html>
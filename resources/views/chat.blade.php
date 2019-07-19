<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta content="{{csrf_token()}}" name="csrf-token" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style media="screen">
      .list-group{
        overflow-y: scroll;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row" id="app">
        <div class="offset-4 col-4">
          <li class="list-group-item  active">chat box</li>
        <ul class="list-group">


          <message
        v-for="value in chat.message":key=value.index
        color='info'
          >
        @{{ value }}</message>
        </ul>
        <input type="text" class="form-control" placeholder="Write your massage......" v-model="message"@keyup.enter="send()">
      </div>
      </div>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </body>
</html>

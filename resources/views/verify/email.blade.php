<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<h2>Welcome to the site </h2>
<br/>
Your registered email-id is  , Please click on the below link to verify your email account
<br/>
<a  class="btn btn-info"href="{{route('verifylink',['email'=>$sub->email,'verifytoken'=>$sub->verifytoken])}}">Verify Email</a>
</body>

</html>

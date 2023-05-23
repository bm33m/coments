<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CommentsApp</title>
    </head>
    <body>

<hr>
<div class="dvregister">
  <form class="frmreg" action="/pcomments" method="post">
    @csrf
    <input type="hidden" name="_token1" value="{{ csrf_token() }}">
    <input type="text" name="_token2" value="{{ csrf_token() }}">
    <div class="dvreg">
        <label>Username:</label><br>
        <input class="cinpt" type="text" id="username" name="username" placeholder="username" value="" maxlength="30" required/>
    </div>
    <div class="dvreg">
        <label>Email:</label><br>
        <input class="cinpt" type="email" id="email" name="email" placeholder="email" value="" maxlength="30" required />
    </div>
    <div class="dvreg">
        <label>Topic:</label><br>
        <input class="cinpt" type="text" id="topic" name="topic" placeholder="topic" value="" maxlength="255"/>
    </div>
    <div class="dvreg">
        <label>Comment:</label><br>
        <textarea id="comment" name="comment" placeholder="comment." value="" required></textarea>
    </div>
    <p><input type="submit" value="OK"/></p>
  </form>
</div>
<hr>

    </body>
</html>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo登録画面（POST）</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
  <form action="todo_post_confirm.php" method="POST"> 
    <fieldset>
      <legend>todo登録画面（POST）</legend>
      <div>
        todo: <input name="todo"type="text">
      </div>
      <div>
        deadline: <input  name="deadline" type="date">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>

</html>
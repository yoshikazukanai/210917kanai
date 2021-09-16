<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（入力画面）</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST"> 
    <fieldset>
      <legend>textファイル書き込み型todoリスト（入力画面）</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        名前: <input name="todo"type="text">
      </div>
      <div>
        deadline: <input  name="deadline" type="date">
      </div>
      <div>
        email: <input  name="email" type="email">
      </div>
      <div>
        <button>cvs</button>
      </div>
    </fieldset>
  </form>

</body>

</html>
<?php
header ("Content-Type: text/html; charset=utf-8");

include_once 'config.php';

 $sql = "SELECT * FROM books";
if (isset($post['isbn']) || isset($post['name']) || isset($post['author'])) {
	$isbn = $post['isbn'];
	$name = $post['name'];
	$author = $post['author'];
	$sql = ("select * from books where isbn LIKE '%{$post['isbn']}%' and name LIKE '%{$post['name']}%' and author LIKE '%{$post['author']}%'");
} else {
	$sql = ("select * from books");
	}
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Книги</title>
		<style media="screen">
        form {
        	margin-bottom: 50px;
        }
		    table {
		        border-spacing: 0;
		        border-collapse: collapse;
		    }
		    table td, table th {
		        border: 1px solid #ccc;
		        padding: 5px;
		    }
		    table th {
		        background: #eee;
		    }
		</style>
	</head>
	<body>
		<h1>Библиотека успешного человека</h1>

    <form method="POST">
      <input type="text" name="isbn" placeholder="ISBN" value="">
      <input type="text" name="name" placeholder="Название книги" value="">
      <input type="text" name="author" placeholder="Автор книги" value="">
      <input type="submit" value="Поиск">
    </form>

    <table>
      <thead>
				<tr>
          <th>Название</th>
          <th>Автор</th>
          <th>Год выпуска</th>
          <th>Жанр</th>
          <th>ISBN</th>
        </tr>
      </thead>

			<tbody>
		    <?php foreach ($db->query($sql) as $row) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['author']; ?></td>
          <td><?php echo $row['year']; ?></td>
          <td><?php echo $row['genre']; ?></td>
          <td><?php echo $row['isbn']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

	</body>
</html>
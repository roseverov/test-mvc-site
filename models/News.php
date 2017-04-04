<?php

	class News{
		
		public static function getNewsList() {//возвращает список новостей
			
			$db = Db::getConection();
			
			$result = $db->query('SELECT * FROM news ORDER BY date DESC LIMIT 10');
			
			$i = 0;
			while ($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['title'] = $row['title'];
				$newsList[$i]['date'] = $row['date'];
				$newsList[$i]['short_content'] = $row['short_content'];
				$newsList[$i]['authorname'] = $row['authorname'];
				$i++;
			}
			
			return $newsList;
			
		}
		
		public static function getNewsItemById($id) { //возвращает новость по id
			
			$id = intval($id);
			if ($id) {
				#$host = '127.0.0.1';
				#$dbname = 'php_base';
				#$user = 'root';
				#$password = '';
				
				#$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
				$db = Db::getConection();
				
				$result = $db->query('SELECT * FROM news WHERE id='.$id);
				
				//$result->setFetchMode(PDO::FETCH_NUM); //эл-ты под индексом
				$result->setFetchMode(PDO::FETCH_ASSOC);//эл-ты под ключом
				
				$newsItem = $result->fetch();//выводится нужная строка по id в виде массива, где значение каждого столбца нах-ся как под индексом, так и под ключом
				
				return $newsItem;
			}
			
		}
		
	}

?>
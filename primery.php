<?php ## Использование статических членов класса   
class Counter   {     // Скрытый статический член класса - общий для всех объектов     
	private static $count = 0;     // Конструктор увеличивает счетчик на 1. Обратите внимание     // на синтаксис доступа к статическим переменным класса!     
	public function __construct() { self::$count++; }     // Деструктор же уменьшает     
	public function __destruct() { self::$count--; }     // Статическая функция, возвращает счетчик объектов     
	public static function getCount() { return self::$count; }     // Как видите, установить счетчик в произвольное значение     // извне нельзя, можно только получить его значение. Вот он,     // модификатор private "в действии"   }   // Создаем 6 объектов   
	for ($objs = [], $i = 0; $i < 6; $i++)     
		$objs[] = new Counter();   // Статические функции можно вызывать точно так же, как будто   // бы это обычный метод объекта. При этом $this все равно   // не передается, он просто игнорируется.   
	echo "Сейчас существует {$objs[0]->getCount()} объектов.<br />";   // Удаляем один объект  
	 $objs[5] = null;   // Счетчик объектов уменьшится!   
	 echo "А теперь - {$objs[0]->getCount()} объектов.<br />";   // Удаляем все объекты   
	 $objs = [];   // Другой способ вызова статического метода - с указанием класса.   // Это очень похоже на вызов функции из библиотеки.   
	 echo "Под конец осталось - ".Counter::getCount()." объектов.<br />"; ?>
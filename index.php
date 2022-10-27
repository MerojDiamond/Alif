<?
require_once "List.php";
while (True) {
    $file=readline("Путь к файлу:");
    $action=readline("Действие:");
    $content=new List_($file);
    switch ($action) {
        case 'Добавить в список':
            $content->add();
            break;
        case 'Изменить запись в списке':
            $content->update();
            break;
        case 'Удалить из списка':
            $content->delete();
            break;
        case 'Вывести общую сумму':
            $content->summ();
            echo $content->getSumm();
            break;
        default:
            echo "Нет такой дейтсвии";
            break;
    }
    echo PHP_EOL;
}
?>

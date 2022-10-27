<?
class List_{
    private $content;
    private $file;
    private $summ;
    public function __construct($file){
        $this->file=$file;
        $content=file_get_contents("list.txt");
        $content=explode(PHP_EOL,$content,);
        foreach ($content as $value) {
            if(!$value)continue;
            $line=explode('-',$value);
            $this->content[trim($line[0])]=intval(trim($line[1]));
        }
    }
    public function add(){
        $content=file_get_contents($this->file);
        $content=explode(PHP_EOL,$content,);
        foreach ($content as $value) {
            if(!$value)continue;
            $line=explode('-',$value);
            $this->content[trim($line[0])]=intval(trim($line[1]));
        }
        $this->updateFile();
    }
    public function update(){
        $content=file_get_contents($this->file);
        $content=explode(PHP_EOL,$content,);
        foreach ($content as $value) {
            if(!$value)continue;
            $line=explode('-',$value);
            $this->content[trim($line[0])]=intval(trim($line[1]));
        }
        $this->updateFile();
    }
    public function delete(){
        $content=file_get_contents($this->file);
        $content=explode(PHP_EOL,$content,);
        foreach ($content as $value) {
            if(!$value)continue;
            $line=$value;
            try{
                $line=explode('-',$value)[0];
            }catch(\Exception $e){}
            unset($this->content[trim($line)]);
        }
        $this->updateFile();
    }
    public function summ(){
        $content=file_get_contents($this->file);
        $content=explode(PHP_EOL,$content,);
        foreach ($content as $value) {
            if(!$value)continue;
            $line=explode('-',$value);
            $this->summ+=intval(trim($line[1]));
        }
    }
    public function getList(){
        return $this->content;
    }
    public function getSumm(){
        return $this->summ;
    }
    public function updateFile(){
        $content="";
        foreach ($this->content as $key => $value) {
            $content.=$key.'-'.$value.PHP_EOL;
        }
        file_put_contents("list.txt",$content);
    }
}
?>

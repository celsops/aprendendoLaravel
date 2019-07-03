<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model{
    
    private $title;
    public $content;
    public $timestamps = false;
    protected $fillable = ['title_note','content_note','email_fk'];
    // public function __construct(String $InformedTitle){
    //     $this->title = $InformedTitle;
    // }

    public function get_content(){
        return $this->content;
    }

    public function get_title(){
        return $this->title;
    }

    public function set_content(string $new_content){
        $this->content = $new_content;
    }

    /**
     *  Aplicando dados em massa a esse Modal
     * 
     *  protected $fillable = ['campo1', 'campo2'];
     */
    
}

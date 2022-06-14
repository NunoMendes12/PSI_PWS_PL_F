<?php

class ChapterController
{
    public function index($id){
        $book = Book::find([$id]);
        $this->renderView('chapter', 'index', ['book' =>
            $book]);
    }

    public function store()
    {
        $chapter = new Chapter($_POST);
        if($chapter->is_valid()){
            $chapter->save();
            $this->redirectToRoute('chapter','index',['id'=>$chapter->book_id]);
        } else {
            $this->renderView('chapter', 'create', ['chapter'=>$chapter]);
        }
    }

}
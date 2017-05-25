<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class BookReviewsController extends Controller
{
    public function actionIndex()
    {
        $data['booksList'] = $this->getBooksList();
        return $this->render('index', $data);
    }

    public function actionView($id)
    {
        $data['id'] = $id;
        $booksList = $this->getBooksList();

        foreach($booksList as $book)
        {
            if($id == $book['id'])
            {
                $data['book_title'] = $book['book_title'];
                $data['author'] = $book['author'];
                $data['amazon_url'] = $book['amazon_url'];
            }
        }

        return $this->render('view', $data);
    }



    //Temporary Stuff
    private function getBooksList()
    {
        $booksList = [
            ['id' => 1, 'book_title' => 'A Canticle for Leibowitz', 'author' => 'Walter M. Miller Jr.', 'amazon_url' => 'http://www.amazon.com'],
            ['id' => 2, 'book_title' => 'Atlas Shrugged', 'author' => 'Ayn Rand', 'amazon_url' => 'http://www.amazon.com'],
            ['id' => 7, 'book_title' => 'The Demolished Man', 'author' => 'Alfred Bester', 'amazon_url' => 'http://www.amazon.com']
        ];

        return $booksList;
    }

/*
    public function actionIndex()
    {
        $data['name'] = "David";
        $data['age'] = "21";
        $data['city'] = "sunny Uman";

        return $this->render('hello', $data);
    }

    public function actionAnotherPage()
    {
        $this->layout = "alt_layout";

        $data['name'] = "David";
        $data['age'] = "21";
        $data['city'] = "sunny Uman";

        return $this->render('hello', $data);
    }
*/
}

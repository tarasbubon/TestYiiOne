<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_reviews".
 *
 * @property integer $id
 * @property string $book_title
 * @property string $author
 * @property string $amazon_url
 * @property string $review
 */
class BookReviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_title', 'author', 'amazon_url', 'review'], 'required'],
            [['review'], 'string'],
            [['book_title', 'author', 'amazon_url'], 'string', 'max' => 255],
            ['book_title', 'unique'],
            ['book_title', 'validateTitle', 'params' => ['author' => 'author', 'amazon_url' => 'amazon_url', 'review' => 'review']]
        ];
    }

    public function validateTitle($attribute, $params)
    {
        $book_title = $this->$attribute;
        $author = $this->$params['author'];
        $amazon_url = $this->$params['amazon_url'];
        $review = $this->$params['review'];

        if($book_title == "Jimi" && $author == "Hendrix" && $amazon_url == "guitar" && $review == "player")
        {
            $this->addError($attribute, "You are not allowed to see Jimi Hendrix guitar player");
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_title' => 'Book Title',
            'author' => 'Author',
            'amazon_url' => 'Amazon Url',
            'review' => 'Your Review',
        ];
    }
}

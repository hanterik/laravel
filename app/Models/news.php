<?php


namespace App\Models;


class news
{
    private static $news = [
        [
            'id' => 1,
            'category_id' => 1,
            'title' => 'Новость 1',
            'text' => 'Хорошая новость',
        ],
        [
            'id' => 2,
            'category_id' => 2,
            'title' => 'Новость 2',
            'text' => 'не очень Хорошая новость',
        ],
        [
            'id' => 3,
            'category_id' => 2,
            'title' => 'Новость 3',
            'text' => 'не очень Хорошая новость',
        ],
        [
            'id' => 4,
            'category_id' => 2,
            'title' => 'Новость 4',
            'text' => 'не очень Хорошая новость',
        ],
        [
            'id' => 5,
            'category_id' => 1,
            'title' => 'Новость 5',
            'text' => 'Хорошая новость',
        ],
        [
            'id' => 6,
            'category_id' => 1,
            'title' => 'Новость 6',
            'text' => 'Хорошая новость',
        ],
    ];
    private static $category = [
        [
            'id' => 1,
            'name' => 'Хорошие новости',
        ],
        [
            'id' => 2,
            'name' => 'не очень Хорошие новости',
        ],
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return null;
    }


    public static function getCategorys()
    {
        return static::$category;
    }


    public static function getCategoryNews($id)
    {
        foreach (static::getNews() as $categoryNews){
            if ($categoryNews['category_id'] == $id){
                $news[] =  $categoryNews;
            }
        }
        return $news;
    }
}


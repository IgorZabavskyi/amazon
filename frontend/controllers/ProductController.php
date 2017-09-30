<?php

namespace frontend\controllers;

use frontend\models\Product;
use Yii;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page_size = 5;
        $query = Product::find()
            ->select('*')
            ->limit($page_size)
            ->orderBy('id DESC');

        $pages = new \yii\data\Pagination(
            [
                'totalCount' => $query->count(),
                'pageSize' => $page_size,
                'pageSizeParam' => false,
                'forcePageParam' => false
            ]
        );

        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', [
                'myquery' => $query,
                'posts' => $posts,
                'pages' => $pages
            ]
        );

    }

}

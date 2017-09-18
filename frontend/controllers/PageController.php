<?php

namespace frontend\controllers;
use common\models\Book;
use Yii;
use common\models\Page;
use common\models\PageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * PageController implements the CRUD actions for Page model.
 */
class PageController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Page models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionZs()
//    {
//        return $this->render('zs', [
//        ]);
//    }
{
    $model = new Book();
    $model->status=1;

if ($model->load(Yii::$app->request->post()) && $model->save()) {
    Yii::$app->getSession()->setFlash('success', '您已留言成功，请保持电话畅通我们客服会尽快联系您！');
    return $this->redirect(['site/index']);
} else {
    return $this->render('zs', [
        'model' => $model,
    ]);
}
}


 //   public function actionLxwm()
//    {      $lxwm=\common\models\Page::findOne(['id'=>2]);
//
//        return $this->render('lxwm', [
//			 'model'=>$lxwm,
//        ]);
//    }



	    public function actionLxwm()
//    {
//        return $this->render('zs', [
//        ]);
//    }
{
$model = new Book();
$model->status=1;
  $lxwm=\common\models\Page::findOne(['id'=>2]);

if ($model->load(Yii::$app->request->post()) && $model->save()) {
      Yii::$app->getSession()->setFlash('success', '您已留言成功，请保持电话畅通我们客服会尽快联系您！');
    return $this->redirect(['page/app']);

} else {
    return $this->render('lxwm', [
        'model' => $model,
        'lxwm' => $lxwm,
    ]);
}
}

    public function actionApp()
    {
        return $this->render('app', [
        ]);
    }
    public function actionGywm()
    {
        return $this->render('gywm', [
        ]);
    }
    /**
     * Displays a single Page model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Page model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Page();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Page model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Page model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Page model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Page the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Page::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

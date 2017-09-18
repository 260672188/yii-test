<?php

namespace frontend\controllers;

use Yii;
use common\models\Book;
use common\models\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
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
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public   function  actionPwd()
{
    $pw='12345678';
    $pwe='123456789';
    $hash = Yii::$app->getSecurity()->generatePasswordHash($pw);
    if( Yii::$app->getSecurity()->validatePassword($pw, $hash))
        {

            echo  ' <b>密码</b><hr/> ' .$pw."<br><b>Hash </b> <br>" . $hash. '<br><br>解密</b><br>';
            echo ' OK  pw is true';
        }
     else {
         echo '错误密码！';
     }

}



/*
 * 导出Excel
 */
    public function actionDo()
    {
        $aexcel = new \PHPExcel();
        $model = new BookSearch();
        $dataProvider = $model->search(Yii::$app->request->queryParams);
        $dataProvider->setPagination(false);
        $data = $dataProvider->getModels();

        $page_size = 52;
        $count = $dataProvider->getTotalCount();
        $page_count = (int)($count / $page_size) + 1;
        $current_page = 0;
        $n = 0;


        // var_dump($data);
        foreach ($data as $person) {
            if ( $n % $page_size === 0 )
            {
                $current_page = $current_page +1;

                //报表头的输出
                $aexcel->getActiveSheet()->mergeCells('B1:G1');
                $aexcel->getActiveSheet()->setCellValue('B1','电话留言');

                $aexcel->setActiveSheetIndex(0)->setCellValue('B2','电话留言');
                $aexcel->setActiveSheetIndex(0)->setCellValue('B2','电话留言');
                $aexcel->setActiveSheetIndex(0)->getStyle('B1')->getFont()->setSize(24);
                $aexcel->setActiveSheetIndex(0)->getStyle('B1')
                    ->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

                $aexcel->setActiveSheetIndex(0)->setCellValue('B2','日期：'.date("Y年m月j日"));
                $aexcel->setActiveSheetIndex(0)->setCellValue('G2','第'.$current_page.'/'.$page_count.'页');
                $aexcel->setActiveSheetIndex(0)->getStyle('G2')
                    ->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                //表格头的输出
                $aexcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
                $aexcel->setActiveSheetIndex(0)->setCellValue('B3','编号');
                $aexcel->getActiveSheet()->getColumnDimension('B')->setWidth(6.5);
                $aexcel->setActiveSheetIndex(0)->setCellValue('C3','姓名');
                $aexcel->getActiveSheet()->getColumnDimension('C')->setWidth(17);
                $aexcel->setActiveSheetIndex(0)->setCellValue('D3','电话');
                $aexcel->getActiveSheet()->getColumnDimension('D')->setWidth(22);
                $aexcel->setActiveSheetIndex(0)->setCellValue('E3','城市');
                $aexcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
                $aexcel->setActiveSheetIndex(0)->setCellValue('F3','创建时间');
                $aexcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
                $aexcel->setActiveSheetIndex(0)->setCellValue('G3','在库数');
                $aexcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);

                //设置居中
                $aexcel->getActiveSheet()->getStyle('B3:G3')
                    ->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

                //设置边框
                $aexcel->getActiveSheet()->getStyle('B3:G3' )
                    ->getBorders()->getTop()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
                $aexcel->getActiveSheet()->getStyle('B3:G3' )
                    ->getBorders()->getLeft()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
                $aexcel->getActiveSheet()->getStyle('B3:G3' )
                    ->getBorders()->getRight()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
                $aexcel->getActiveSheet()->getStyle('B3:G3' )
                    ->getBorders()->getBottom()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
                $aexcel->getActiveSheet()->getStyle('B3:G3' )
                    ->getBorders()->getVertical()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);

                //设置颜色
                $aexcel->getActiveSheet()->getStyle('B3:G3')->getFill()
                    ->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('DEDEDEDE');

            }
            $aexcel->getActiveSheet()->setCellValue('b' . ($n +4 ), $person->id);
            $aexcel->getActiveSheet()->setCellValue('c' . ($n + 4), $person->name);
            $aexcel->getActiveSheet()->setCellValue('d' . ($n + 4), $person->tel);
            $aexcel->getActiveSheet()->setCellValue('e' . ($n + 4), $person->city);
            $aexcel->getActiveSheet()->setCellValue('f' . ($n + 4), Yii::$app->formatter->asDate($person->created_at, 'yyyy-MM-dd') );
            $n = $n + 1;
        }
        $aexcel->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);
        $aexcel->getActiveSheet()->getPageSetup()->setVerticalCentered(false);

        ob_end_clean();
        ob_start();

        header('Content-Type : application/vnd.ms-excel');
        header('Content-Disposition:attachment;filename="' . '电话留言-' . date("Y年m月j日") . '.xls"');
        $aexcel = \PHPExcel_IOFactory::createWriter($aexcel, 'Excel5');
        $aexcel->save('php://output');
    }
    /**
     * Displays a single Book model.
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
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['site/index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionLxwm()
    {
        $model = new Book();
          $model->status=1;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['site/index']);
        } else {
            return $this->render('lxwm', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Book model.
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
     * Deletes an existing Book model.
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
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

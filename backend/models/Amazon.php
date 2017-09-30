<?php
/**
 * Created by PhpStorm.
 * User: igorzabavskyi
 * Date: 9/26/17
 * Time: 6:30 PM
 */

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $asin
 * @property string $title
 * @property string $price
 * @property string $picture
 * @property string $ean
 * @property string $brand
 */
class Amazon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['asin', 'title', 'picture', 'ean', 'brand'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'asin' => 'ASIN',
        ];
    }

    public function beforeSave()
    {
        // Pleace replace this variables
        $region = "de";
        $public_key = "your_key";
        $private_key = "your_key";
        $associate_tag = "your_tag";

        $warning = false;

        $params = [
            "Operation"=>"ItemLookup",
            "ItemId"=>$this->asin,
            "ResponseGroup"=>"Large"
        ];

        $request =  aws_signed_request($region, $params, $public_key, $private_key, $associate_tag);
        $response = @file_get_contents($request);
        if ($response === FALSE) {
            echo "Request failed.\n";
        } else {
            // parse XML
            $pxml = simplexml_load_string($response);
            if ($pxml === FALSE) {
                echo "Response could not be parsed.\n";
                die();
            } else {
                if (isset($pxml->Items->Item->ItemAttributes->Title)) {
                    $this->title = $pxml->Items->Item->ItemAttributes->Title;

                    $this->brand = $pxml->Items->Item->ItemAttributes->Brand;

                    $this->price = $pxml->Items->Item->ItemAttributes->ListPrice->Amount/100;
                    if ($this->price == 0.0) {
                        $warning = true;
                        Yii::$app->session->setFlash('warning', ' <b>Price</b> do not present in the Amazon API. Request for checking:<br><hr>'. $request);
                    }

                    $this->picture = $pxml->Items->Item->SmallImage->URL;
                    if (isset($pxml->Items->Item->ItemAttributes->EAN)) {
                        $this->ean = $pxml->Items->Item->ItemAttributes->EAN;
                    } else {
                        $warning = true;
                        Yii::$app->session->setFlash('warning', ' <b>EAN</b> do not present in this data. Request for checking:<br><hr>'. $request);
                    }
                    if (!$warning) {
                        Yii::$app->session->setFlash('success', ' Product <b>'.$this->asin.'</b> was successfully saved to database');
                    }
                    return true;

                } else {
                    if (isset($pxml->Items->Request->Errors->Error->Message)){
                        Yii::$app->session->setFlash('error', $pxml->Items->Request->Errors->Error->Message.' Request for checking:<br><hr>'.$request);
                        return false;
                    }
                }
            }
        }
    }
}
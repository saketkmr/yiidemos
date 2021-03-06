<?php
require_once(dirname(__FILE__).'/../extensions/runactions/components/ERunActions.php');
require_once(dirname(__FILE__).'/../extensions/facebook/fb-php-sdk/facebook.php');
/* SendGiftController is used to send gifts*/

class GangnamController extends AuthController
{

 public function actionChoosePic()
 {
   $this->layout="receiver";
   $session=new CHttpSession;
   $session->open();
   
    $facebook = new Facebook(array(
			'appId'  => Yii::app()->params["facebook_appId"],
			'secret' => Yii::app()->params["facebook_appSecret"],
			'cookie' => true,
			));
			
  // $albums=$facebook->api('/me/albums');	
   
   $albums=$facebook->api(array(
    'method'    => 'fql.query',
    'query'     => 'SELECT src_big FROM photo WHERE aid IN (SELECT aid FROM album WHERE owner=me())'
));
   
   /*echo "<pre>";
   print_r($albums);
   echo "</pre>";
   exit;
   */
   $this->render("choosepic",array('albums'=>$albums));
 }


}
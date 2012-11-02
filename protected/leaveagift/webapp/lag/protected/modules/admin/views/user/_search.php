<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-user-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php //echo $form->textFieldRow($model,'id_user',array('class'=>'span5','maxlength'=>64)); ?>

	<?php //echo $form->textFieldRow($model,'id_customer',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'facebook_userid',array('class'=>'span5','maxlength'=>32)); ?>

	<?php //echo $form->textFieldRow($model,'facebook_oauthid',array('class'=>'span5','maxlength'=>512)); ?>

	<?php //echo $form->textFieldRow($model,'facebook_email',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php //echo $form->textFieldRow($model,'date_add',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'date_upd',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Search')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


<?php $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>	
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-user-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>


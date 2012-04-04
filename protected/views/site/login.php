<?php
$this->pageTitle=Yii::app()->name . ' - Login';?>
<div class="row">
		<div class="span5 offset5">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,			
			),
			'htmlOptions'=>array('class'=>'well')
		)); ?>
			<fieldset>
				<legend>会员登录</legend>
				<div class="control-group">
					<?php echo $form->labelEx($model,'username',array('class'=>'control-label'));?>
					<div class="controls">
						<?php echo $form->textField($model,'username',array('class'=>'input-xlarge span4','required'=>'required')); ?> 
						<?php echo $form->error($model,'username',array('style'=>'color:FA8791')); ?>
					</div>
					<?php echo $form->labelEx($model,'password',array('class'=>'control-label'));?>
					<div class="controls">
						<?php echo $form->passwordField($model,'password',array('class'=>'input-xlarge span4','required'=>'required')); ?> 
						<?php echo $form->error($model,'password',array('style'=>'color:FA8791')); ?>
					</div>
					<label class="checkbox">
					        <?php echo $form->checkBox($model,'rememberMe'); ?>
					                记住我
					</label>					      
				</div>
				<?php echo CHtml::submitButton('会员登录',array('class'=>'btn btn-warning')); ?>				
				<a href="register.html" class="btn btn-success" rel="tooltip" title="还不是会员？">
					<i class="icon-leaf"></i>免费注册
				</a>		
			</fieldset>
			<?php $this->endWidget(); ?>
		</div><!-- form -->
</div>

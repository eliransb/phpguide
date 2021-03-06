<h2>שחזור סיסמה</h2>
<?php
echo CHtml::beginForm('', 'post', array('onsubmit' => 'return false;'));
?>
<div class="alert-message warning hidden" id="result"></div>

<fieldset>
	<div class="clearfix">
		<label>	שם משתמש:</label>
		<input type='text' id='login' name='login' placeholder='שם משתמש' />
	</div>
	
	<div class="clearfix">
		<label>	אימייל: </label>
		<input type="email" id='email' name='email' placeholder='email' dir="ltr" />
	</div>
</fieldset>

<?php

/** @var PHPGController $this */

echo CHtml::ajaxSubmitButton
(
    'שלח לי קישור לשחזור סיסמה למייל',
    $this->createUrl('PwRecovery/ajaxRecoverSubmit') ,
    [
        'id' => 'recoverBtn',
        'beforeSend' => 'login.recoverySubmitted',
        'success' => 'login.recoverySuccess'
    ],
    ['class' => 'btn primary']
);

echo CHtml::endForm();


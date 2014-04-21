<?php
/**
 * @var $this AccountUserController
 * @var $accountUser AccountUser
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-account-module
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-account-module/master/LICENSE
 *
 * @package yii-account-module
 */
$this->pageTitle = Yii::t('account', 'My Account');

/** @var AccountModule $account */
$account = Yii::app()->getModule('account');
$attributes = array();
if ($account->firstNameField)
    $attributes[] = $account->firstNameField;
if ($account->lastNameField)
    $attributes[] = $account->lastNameField;
$attributes[] = $account->emailField;
if ($account->usernameField)
    $attributes[] = $account->usernameField;

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $accountUser,
    'attributes' => $attributes,
    'htmlOptions' => array('class' => 'table table-condensed'),
));

echo CHtml::tag('div', array('class' => 'form-actions'), implode(' ', array(
    TbHtml::link(Yii::t('app', 'Update Account'), array('user/update'), array('class' => 'btn btn-primary')),
    TbHtml::link(Yii::t('app', 'Change Password'), array('user/changePassword'), array('class' => 'btn')),
    TbHtml::link(Yii::t('app', 'Logout'), array('user/logout'), array('class' => 'btn')),
)));
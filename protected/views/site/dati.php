<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
Importante: questa pagina è pubblica. E' necessario renderla privata ed inserirla nel meccanismo di autenticazione/ruoli.
<br/><br/>
<ul>
	<li>Utenti: <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=user">user</a></li>
        <li>Path: <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=path">path</a></li>
        <li>Dots: <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=dots">dots</a></li>
</ul>


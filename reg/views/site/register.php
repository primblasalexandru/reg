<?php
use app\modules\Register\models\User;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>



<div class="text-center">
<h1 > регистрация</h1>
<br>
    <div>
        <a href="<?=Url::to(['/site/reg','type'=>User::Fizic])?>"><h3>Физическое лицо</h3></a>
        <a href="<?=Url::to(['/site/reg','type'=>User::Juridic])?>"><h3>Юридическое лицо</h3></a>
    </div>

</div>





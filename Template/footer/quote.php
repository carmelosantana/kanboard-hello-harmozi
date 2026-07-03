<?php use Kanboard\Plugin\HelloHarmozi\Model\Quotes; ?>
<div class="hello-harmozi" role="note">
    <span class="hello-harmozi__quote"><?= $this->text->e(Quotes::random()) ?></span>
    <span class="hello-harmozi__attr">— Alex Hormozi</span>
</div>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Rita->pageTitle('اپلیکیشن ریتا'); ?>
    <?= $this->Rita->pageDescription('سیستم تولید محتوای ریتا'); ?>
    <?= $this->Rita->pageKeywords(); ?>    
    <?= $this->Html->meta('icon') ?>

	<?= $this->Rita->loadingCSS() ?>
    <?= $this->Rita->loadingJS() ?>
        
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
    </header>
        <div id="<?= $this->getLayoutID(); ?>" class="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
         <span>تمامی محتوای این وب سایت متعلق  است به</span>
        	<img  src="/img/logo.svg"/>
            <a href="http://ritaco.ir" target="_blank" title="طراحی و پیاده‌سازی توسط  توسعه پرداز ریتا " id="ritaco-logo">
                <?= $this->Html->image('Rita/Core.rita-logo-w.png',['alt' => 'ریتاکو']); ?>
            </a>  	
        </footer>
    </div>
</body>
</html>

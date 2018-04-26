<?php global $themePlusConfig; ?>

<?php if ($themePlusConfig['theme'] != ''): ?>
<link rel="stylesheet" type="text/css" href="<?= $this->url->dir(); ?>plugins/Themeplus/Assets/css/<?= $themePlusConfig['theme'] ?>.css" media="all" />
<?php endif; ?>

<?php if (isset($themePlusConfig['css']) && $themePlusConfig['css'] != ''): ?>
<link rel="stylesheet" type="text/css" href="<?= $this->url->dir(); ?>plugins/Themeplus/Assets/css/<?= $themePlusConfig['css'] ?>" media="all" />
<?php endif; ?>

<?php if (isset($themePlusConfig['libicons']) && $themePlusConfig['libicons'] != ''): ?>
<link rel="stylesheet" type="text/css" href="<?= $this->url->dir(); ?>plugins/Themeplus/Assets/css/<?= $themePlusConfig['libicons'] ?>" media="all" />
<?php endif; ?>

<?php if (isset($themePlusConfig['js']) && $themePlusConfig['js'] != ''): ?>
<script type="text/javascript" src="<?= $this->url->dir(); ?>plugins/Themeplus/Assets/js/<?= $themePlusConfig['js'] ?>"></script>
<?php endif; ?>

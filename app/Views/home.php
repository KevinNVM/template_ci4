<?= $this->extend('template/head') ?>

<?= $this->section('head') ?>
<style>
body {
    background-color: var(--background);
    color: var(--primary);
    font-family: var(--font-def);
}

.navbar-brand {
    transition: all .2s;
}

.navbar-brand:hover {
    transform: scale(1.2);
}

.nav-item>.nav-link {
    transition: all .2s;
}

.nav-item>.nav-link:hover {
    transform: scale(1.1);
}
</style>
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>

<div class="container mt-4">
    <h2>Welcome to my website</h2>
</div>

<?= $this->endSection() ?>
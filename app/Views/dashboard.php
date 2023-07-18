<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 class="sub-title">INPUT</h2>
    <div class="option">
        <div class="opt-box">
            <a href="" class="opt-link">
                <img src="/img/debit-opt.png" alt="Debit" class="img-opt">
                <h2 class="box-title">DEBIT</h2>
            </a>
        </div>
        <div class="opt-box">
            <a href="" class="opt-link">
                <img src="/img/kredit-opt.png" alt="Kredit" class="img-opt">
                <h2 class="box-title">KREDIT</h2>
            </a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
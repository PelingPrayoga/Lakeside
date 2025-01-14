<!-- Header Template -->
<?= $this->extend('layout/template'); ?>

<!-- Main Start -->
<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">INPUT KREDIT</h2>
    <div class="input-container">
        <form action="SaveKredit" method="post" class="form-container" enctype="multipart/form-data">
            <label class="form-label">Jumlah</label>
            <input name="Jumlah" type="number" class="input-sum" placeholder="10.000" id="Jumlah">
            <label class="form-label">Tanggal</label>
            <input name="date" class="input-date" type="text" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" cols="30" rows="5" placeholder="Masukkan Nama Pesanan"></textarea>
            <label class="form-label">Penanggung Jawab</label>
            <select name="PJ" id="pj">
                <option value="default">--PILIH--</option>
                <option value="barista">Barista</option>
                <option value="kasir">Kasir</option>
            </select>
            <label class="form-label">Upload Bukti</label>
            <label for="proof" class="file-container">
                <input type="file" name="bukti" class="proof-input" id="proof">
                <img src="/img/upload-icon.png" alt="Upload Icon" class="up-icon">
                <p class="label-text">Upload Your Image</p>
            </label>
            <input type="submit" value="INPUT DATA" class="submit-button">
        </form>
        <img src="/img/kredit-sketch.png" alt="Sketch Debit" class="sketch-img">
    </div>
</main>
<!-- Main End -->

<!-- Footer Template Start -->
<?= $this->include('layout/footer'); ?>

<!-- Succes Alert Message -->
<?php if (session()->getFlashdata('Pesan')) : ?>
    <div class="alert-modal" onclick="closeAlert()" style="display: flex;">
        <div class="alert-box">
            <img class="check" src="/img/check.png" alt="alert">
            <p><?= session()->getFlashdata('Pesan') ?></p>
        </div>
    </div>
<?php endif ?>

<!-- JS Script -->
<script src="/js/date.js"></script>
<script src="/js/input.js"></script>
<script src="/js/success.js"></script>
<?= $this->endSection(); ?>
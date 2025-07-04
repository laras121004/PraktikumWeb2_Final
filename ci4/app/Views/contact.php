<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div style="background-color: #fefefe; padding: 3px; margin-top: 2px; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">

    <h1 style="font-size: 30px; color: #333;">📬 Kontak Kami</h1>

    <p style="font-size: 20px; color: #555;">
        Jika Anda memiliki pertanyaan, kritik, atau saran, silakan kirimkan pesan kepada kami melalui formulir di bawah ini.
    </p>

    <form action="#" method="post" style="margin-top: 20px;">
        <div style="margin-bottom: 15px;">
            <label for="nama" style="display: block; font-weight: bold;">Nama</label>
            <input type="text" id="nama" name="nama" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold;">Email</label>
            <input type="email" id="email" name="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="pesan" style="display: block; font-weight: bold;">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px;"></textarea>
        </div>

        <button type="submit" style="background-color: #d63384; color: #fff; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer;">
            Kirim Pesan
        </button>
    </form>

</div>

<?= $this->endSection() ?>

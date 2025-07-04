<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

    <div style="background-color: #f9f9ff; padding: 5px; margin-top: 0px; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">


    <h1 style="font-size: 30px; color: #333; display: flex; align-items: center; gap: 10px;">
        🏠 <?= esc($title) ?>
    </h1>

    <p style="font-size: 20px; color: #555; margin-top: 20px;">
        <?= esc('Selamat datang di website kami! 🎉 Di sini Anda bisa menemukan ') ?>
        <span style="color:#d63384; font-weight: 500;">informasi terbaru</span>,
        <span style="color:#d63384; font-weight: 500;">artikel menarik</span>, dan berbagai fitur lainnya ✨
    </p>

</div>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="flex: 1; background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
            <h3 style="color: #d63384;">📚 Artikel Informatif</h3>
            <p>Kami menyajikan berbagai artikel seputar teknologi, tutorial, dan tips menarik lainnya.</p>
        </div>
        <div style="flex: 1; background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
            <h3 style="color: #d63384;">📰 Update Terbaru</h3>
            <p>Dapatkan update terbaru seputar perkembangan situs, fitur baru, dan konten unggulan.</p>
        </div>
        <div style="flex: 1; background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
            <h3 style="color: #d63384;">💬 Interaktif</h3>
            <p>Anda dapat berkomentar dan berdiskusi pada setiap artikel yang tersedia di situs ini.</p>
        </div>
    </div>

    <div style="margin-top: 40px; text-align: center;">
        <a href="/artikel" style="background-color: #d63384; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none;">
            Lihat Semua Artikel
        </a>
    </div>

<?= $this->endSection() ?>

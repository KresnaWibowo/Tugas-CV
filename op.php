<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .cv-container { display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        img { max-width: 150px; border-radius: 10px; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>CV Anda</h2>
    <div class="cv-container">
        <p><strong>Nama:</strong> <?= htmlspecialchars($cv['nama']) ?></p>
        <p><strong>Tempat, Tanggal Lahir:</strong> <?= htmlspecialchars($cv['ttl']) ?></p>
        <p><strong>Riwayat Pendidikan:</strong> <?= nl2br(htmlspecialchars($cv['pendidikan'])) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <?php if (isset($cv['foto'])): ?>
            <img src="<?= htmlspecialchars($cv['foto']) ?>" alt="Foto CV">
        <?php endif; ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Kresna Wibowo Patebong</title>
    <link rel="stylesheet" href="style1.css">
    <script>
        function addField(section) {
            const container = document.getElementById(section);
            const input = document.createElement('textarea');
            input.name = section + '[]';
            input.placeholder = `Masukkan ${section}...`;
            container.appendChild(input);
        }

        function removeField(section) {
            const container = document.getElementById(section);
            const fields = container.querySelectorAll('textarea');
            if (fields.length > 1) {
                container.removeChild(fields[fields.length - 1]);
            }
        }
    </script>
</head>
<body>
    <h2>CV Maker</h2>
    <form action="cv.php" method="POST" enctype="multipart/form-data">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" required>

        <label for="born">Tempat, Tanggal Lahir</label>
        <input type="text" id="born" name="born" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">No. Telp</label>
        <input type="text" name="phone" id="phone" required>

        <label for="summary">Tentang Saya</label>
        <textarea name="summary" id="summary" placeholder="Tulis secara singkat tentang diri Anda.." required></textarea>

        <label for="education">Edukasi</label>
        <div id="education">
            <textarea name="education[]" placeholder="Cantumkan edukasi Anda..." required></textarea>
        </div>
        <button type="button" onclick="addField('education')">Tambah Edukasi</button>
        <button type="button" onclick="removeField('education')">Hapus Edukasi</button>

        <label for="experience">Pengalaman</label>
        <div id="experience">
            <textarea name="experience[]" placeholder="Deskripsikan pengalaman Anda..." required></textarea>
        </div>
        <button type="button" onclick="addField('experience')">Tambah Pengalaman</button>
        <button type="button" onclick="removeField('experience')">Hapus Pengalaman</button>

        <label for="skills">Skills</label>
        <div id="skills">
            <textarea name="skills[]" placeholder="Cantumkan kemampuan Anda..." required></textarea>
        </div>
        <button type="button" onclick="addField('skills')">Tambah Skills</button>
        <button type="button" onclick="removeField('skills')">Hapus Skills</button>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
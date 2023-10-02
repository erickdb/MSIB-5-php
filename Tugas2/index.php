<html>
<head>
    <title>Input Nilai Siswa</title>
</head>
<body>
    <h1>Input Nilai Siwa</h1>
    <form method="POST" action="siswa.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="matpel">Mata Pelajaran:</label>
        <select name="matpel" required>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
            <option value="Matematika">Matematika</option>
            <option value="Fisika">Fisika</option>
        </select><br><br>

        <label for="nilai">Nilai : </label>
        <input type="number" name="nilai" min="0" max="100" required>
        <br>
        <br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>
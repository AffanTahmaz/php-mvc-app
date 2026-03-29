<!DOCTYPE html>
<html lang="bs">
<head>
    <meta charset="UTF-8">
    <title>Uredi korisnika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Uredi korisnika</h2>

    <form method="POST" action="index.php?action=update">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <div class="mb-3">
            <label>Ime</label>
            <input type="text" name="ime" class="form-control" value="<?= $user['ime'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Prezime</label>
            <input type="text" name="prezime" class="form-control" value="<?= $user['prezime'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Uloga</label>
            <select name="role_id" class="form-select">
                <?php while($r = $roles->fetch_assoc()): ?>
                    <option value="<?= $r['id'] ?>" <?= $r['id'] == $user['role_id'] ? 'selected' : '' ?>>
                        <?= $r['naziv'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>

        <button class="btn btn-success">Sačuvaj</button>
        <a href="index.php" class="btn btn-secondary">Odustani</a>
    </form>
</div>

</body>
</html>
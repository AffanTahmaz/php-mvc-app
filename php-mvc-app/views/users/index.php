<!DOCTYPE html>
<html lang="bs">
<head>
    <meta charset="UTF-8">
    <title>Korisnici</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function confirmDelete() {
            return confirm("Jesi li siguran da želiš obrisati korisnika?");
        }

        function searchTable() {
            var input = document.getElementById("pretraga").value.toLowerCase();
            var rows = document.querySelectorAll("tbody tr");
            rows.forEach(function(row) {
                var text = row.innerText.toLowerCase();
                row.style.display = text.includes(input) ? "" : "none";
            });
        }
    </script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Lista korisnika</h2>

    <form method="POST" action="index.php?action=store" class="row g-2 mb-4">
        <div class="col"><input type="text" name="ime" class="form-control" placeholder="Ime" required></div>
        <div class="col"><input type="text" name="prezime" class="form-control" placeholder="Prezime" required></div>
        <div class="col"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
        <div class="col">
            <select name="role_id" class="form-select">
                <?php while($r = $roles->fetch_assoc()): ?>
                    <option value="<?= $r['id'] ?>"><?= $r['naziv'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="col"><button class="btn btn-primary w-100">Dodaj</button></div>
    </form>

    <input type="text" id="pretraga" class="form-control mb-3" placeholder="Pretraži..." onkeyup="searchTable()">

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Uloga</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $users->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['ime'] ?></td>
                <td><?= $row['prezime'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['naziv'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirmDelete()" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php 
include('./connect.php');
$query = "SELECT * FROM users ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="styles.css">
    <title>shetech || Posts</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Shetech</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">User List</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
<div class="card-body p-0">
    <div class="table-responsive" style="max-width: 90%; margin: auto;">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registered On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php $count = 1; ?>
                    <?php while ($row = $result->fetch_object()): ?>
                        <tr>
                            <th><?= $count ?></th>
                            <td><?= $row->first_name ?></td>
                            <td><?= $row->last_name ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= date("M d, Y", strtotime($row->created_at)) ?></td>
                            <td>
                                <a href="update_user.php?id=<?= $row->id ?>" class="btn btn-sm btn-info">Edit</a>

                            <a href="delete_user.php?id=<?= $row->id ?>" 
                            class="btn btn-sm btn-danger" 
                            onclick="confirmDelete(<?= $row->id ?>); return false;">
                            Delete
                          </a>
                            </td>
                        </tr>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">No data found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
    </main>

    <!-- Bootstrap 5 JS (Make sure this is included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete(userId) {
    Swal.fire({
        title: "Are you sure?",
        text: "Do you really want to delete this user?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "delete_user.php?id=" + userId;
        }
    });
}



document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get("status");

    if (status === "success") {
        Swal.fire({
            title: "Success!",
            text: "Action Performed successfully!",
            icon: "success",
            timer: 2000,
            showConfirmButton: false
        });
    } else if (status === "error") {
        Swal.fire({
            title: "Error!",
            text: "Failed to complete this action!",
            icon: "error",
            confirmButtonText: "OK"
        });
    } else if (status === "missing_id") {
        Swal.fire({
            title: "Warning!",
            text: "Required Data are missing!",
            icon: "warning",
            confirmButtonText: "OK"
        });
    }
});
</script>

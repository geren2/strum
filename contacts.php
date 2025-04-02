<?php
include 'db.php';  // Your connection file

$sql = "SELECT 
            user_id,
            username,
            first_name,
            surname,
            skill_level,
            instrument_played
        FROM users";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>

    <!-- Link to Bootstrap CSS (local file) -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/contacts.css" />
    <script src="js/toggle-menu.js"></script>
  </head>
  <body>
    <!-- Header/Navbar -->
    <header
      class="d-flex justify-content-between align-items-center py-3 px-4 shadow-sm bg-white fixed-top"
    >
      <!-- Left: Logo -->
      <div class="logo">
        <a
          href="index.php"
          onclick="scrollToTop(event)"
          style="text-decoration: none; color: inherit"
        >
          Strum
        </a>
      </div>

      <!-- Center: Nav links -->
      <nav class="d-flex justify-content-center">
        <ul class="list-unstyled d-flex mb-0">
          <li class="mx-3">
            <button class="nav-btn btn" onclick="location.href='discover.php'">
              Discover
            </button>
          </li>
          <li class="mx-3">
            <button class="nav-btn btn" onclick="location.href='events.php'">
              Events & Jams
            </button>
          </li>
          <li class="mx-3">
            <button class="nav-btn btn" onclick="location.href='about_us.php'">
              About Us
            </button>
          </li>
          <li class="mx-3">
            <button
              class="nav-btn btn active"
              onclick="location.href='contacts.html'"
            >
              Contact Us
            </button>
          </li>
        </ul>
      </nav>

      <!-- Right: Login button -->
      <button
        class="login-btn btn btn-outline-dark"
        onclick="location.href='login.php'"
      >
        Login
      </button>
      <button class="menu-toggle d-md-none" onclick="toggleMenu()">☰</button>
    </header>

    <!-- Contact Form Section -->
    <div class="container my-5">
      <h2 class="text-center mb-4 contact-title">Contact Us</h2>
      <div style="height: 40px"></div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="#" method="post">
            <div class="mb-3">
              <label for="name" class="form-label bold-label">Full Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter your name"
                required
              />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label bold-label"
                >Email Address</label
              >
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Enter your email"
                required
              />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label bold-label">Message</label>
              <textarea
                class="form-control"
                id="message"
                rows="4"
                placeholder="Your message"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send</button>
          </form>
        </div>
      </div>
    </div>

    <table border="1">
      <tr>
          <th>ID</th>
          <th>Username</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Skill Level</th>
          <th>Instrument</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <tr>
          <td><?= $row['user_id'] ?></td>
          <td><?= $row['username'] ?></td>
          <td><?= $row['first_name'] ?></td>
          <td><?= $row['surname'] ?></td>
          <td><?= $row['skill_level'] ?></td>
          <td><?= $row['instrument_played'] ?></td>
      </tr>
      <?php endwhile; ?>
    </table>

    <!-- Footer -->
    <footer>
      <p>&copy; 2025 Strum. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS (local) -->
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

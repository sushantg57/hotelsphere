<?php

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HotelSphere</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php if($_SESSION['role_id']==1): // Admin ?>
          <li class="nav-item"><a class="nav-link" href="/admin/dashboard.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/rooms.php">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/menu.php">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/billing.php">Billing</a></li>
        <?php elseif($_SESSION['role_id']==2): // Reception ?>
          <li class="nav-item"><a class="nav-link" href="/reception/dashboard.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="/reception/book_room.php">Book Room</a></li>
          <li class="nav-item"><a class="nav-link" href="/reception/bookings.php">Bookings</a></li>
          <li class="nav-item"><a class="nav-link" href="/reception/food_order.php">Food Order</a></li>
        <?php elseif($_SESSION['role_id']==3): // Kitchen ?>
          <li class="nav-item"><a class="nav-link" href="/kitchen/orders.php">Orders</a></li>
        <?php endif; ?>
        <li class="nav-item"><a class="nav-link" href="/auth/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

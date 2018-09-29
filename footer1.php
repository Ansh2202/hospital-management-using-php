  <div class="container footer">
      <hr>
      <footer>
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="index.php">Home</a>
                  </li>';
                }
        ?>
        </p>
     
      </footer>
    </div>
  </body>
</html>

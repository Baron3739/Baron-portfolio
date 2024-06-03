<?php
include('header.php');
include('connection.php');

function fetchMessages($connection) {
    // Adjust column names as per your database schema
    $sql = "SELECT id, name, email, comment, date FROM messages";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("Database query failed: " . mysqli_error($connection));
    }

    return $result;
}

$messages = fetchMessages($connection);
?>
<!-- ============================================================== -->
<div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <!-- <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0">Dashboard</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Classic Supermarket</a>
                      </li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div>
                </div> -->
              </div>
            </div>
            <!-- end page title -->
            
            <div class="row">
              <div class="col-12" style="font-size: 15px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Messages</h4>

                    <div class="table-responsive">
                      <table
                        class="table table-editable table-nowrap align-middle table-edits"
                      >
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Date</th>
                            <th>Delete</th>               
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = mysqli_fetch_assoc($messages)): ?>
                          <tr data-id="<?php echo $row['id']; ?>">
                            <td data-field="id" style="width: 80px"><?php echo $row['id']; ?></td>
                            <td data-field="name"><?php echo htmlspecialchars($row['name']); ?></td>
                            <td data-field="email"><?php echo htmlspecialchars($row['email']); ?></td>
                            <td data-field="comment"><?php echo htmlspecialchars($row['comment']); ?></td>
                            <td data-field="date"><?php echo htmlspecialchars($row['date']); ?></td>
                            <td style="width: 100px">
                              <a
                                class="btn btn-outline-secondary btn-sm edit"
                                title="delete"
                                href="delete.php?id=<?php echo $row['id']; ?>"
                              >
                                <i class="fas fa-trash-alt" style="color:brown"></i>
                              </a>
                            </td> 
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
                            
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center my-3">
                        <a href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
                    </div>
                </div>
            </div>
            <!-- end row -->

          </div> <!-- container-fluid -->
        </div>
<!-- End Page-content -->
<?php
include('footer.php');
?>

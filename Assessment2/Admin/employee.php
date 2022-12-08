<div class="container">
  <h2>All Employee</h2>
  <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>             -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>F Name</th>
        <th>M Name</th>
        <th>L name</th>
        <th>Mobile no</th>
        <th>city</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($user1 as $f)
      {
      ?>
      <tr>
        <td><?php echo $f->eid;?></td>
        <td><?php echo $f->fname;?></td>
        <td><?php echo $f->mname;?></td>
        <td><?php echo $f->lname;?></td>
        <td><?php echo $f->mobile_no;?></td>
        <td><?php echo $f->city;?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
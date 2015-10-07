<div class="ui inverted green menu admin-menu">
  <div class="menu">
    <a class="item" href="<?php echo base_url() ?>"><i class="home icon"></i>Home</a>
</div>

<div class="ui pointing dropdown link item">
  <span class="text"><i class="users icon"></i>User Management</span>
  <i class="dropdown icon"></i>
  <div class="menu">
    <div class="header">Students</div>
    <div class="item">
      <i class="dropdown icon"></i>
      <span class="text"><i class="add user icon"></i>Add Student</span>
      <div class="menu">
        <a class="item" href="<?php echo base_url('admin/viewAddStudentCSVForm'); ?>"><i class="upload icon"></i>CSV</a>
        <a class="item" href="<?php echo base_url('admin/viewAddStudentForm'); ?>"><i class="write icon"></i>Form</a>
      </div>
    </div>
    <a class="item" href="<?php echo base_url()?>admin/viewAllStudents"><i class="student icon"></i>View Students</a>
    <div class="divider"></div>
    <div class="header">Teachers</div>
    <div class="item">
      <i class="dropdown icon"></i>
      <span class="text"><i class="add user icon"></i>Add Teachers</span>
      <div class="menu">
        <a class="item" href="<?php echo base_url('admin/viewAddTeacherCSVForm'); ?>"><i class="upload icon"></i>CSV</a>
        <a class="item" href="<?php echo base_url('admin/viewAddTeacherForm'); ?>"><i class="write icon"></i>Form</a>
      </div>
    </div>
    <a class="item" href="<?php echo base_url()?>admin/viewAllTeachers"><i class="spy icon"></i>View Teachers</a>
  </div>
</div>


<div class="ui pointing dropdown link item">
    <span class="text">Maintenance</span>
    <i class="dropdown icon"></i>
    <div class="menu">
          <a class="item" href="<?php echo base_url('admin/viewAddSubjectForm'); ?>">Add Course</a>
          <a class="item" href="<?php echo base_url('admin/viewAddProgramForm'); ?>">Add Program</a>
          <a class="item" href="<?php echo base_url('semester/viewAddSemesterForm'); ?>">Add Semester</a>
          <a class="item" href="<?php echo base_url('admin/viewAddAcademicYearForm'); ?>">Add Academic Year</a>
    </div>
</div>

<div class="menu">
  <a class="item" href="<?php echo base_url('consultation/listOfConsultants'); ?>"><i class="archive icon"></i>Consultations</a>
</div>


<div class="right menu">
  <div class="item">
    <div class="ui search">
      <div class="ui icon input">
        <input class="prompt" type="text" placeholder="Search...">
        <i class="search icon"></i>
      </div>
      <div class="results"></div>
    </div>
  </div>

  <div class="item">
    <div class="ui pointing dropdown link item">
      <img class="ui avatar image" src="<?php echo base_url() ?>assets/images/avatar/photo.jpg"><span>Admin</span>
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item"><i class="settings icon"></i>Settings</a>
        <a class="item" href="<?php echo base_url('user/logout'); ?>"><i class="sign out icon"></i>Logout</a>
      </div>
    </div>
  </div>
</div>
</div>
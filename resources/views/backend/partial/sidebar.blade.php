<!-- ======= Sidebar ======= -->


<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ route('dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

   <li class="nav-item">
    <a class="nav-link " href="{{ route('doctor') }}">
    <i class="bi bi-hospital"></i>
      <span>Doctor</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ route('ptninfo.info') }}">
    <i class="bi bi-file-diff"></i>
      <span>Patient</span>
    </a>
  </li>


  <li class="nav-item">
    <a class="nav-link " href="{{ route('appointment.list')}}">
    <i class="bi bi-clipboard2-plus-fill"></i>
      <span>Appoentment</span>
    </a>
  </li>

  <!-- start labtest dropdown -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="">
      <i class="bi bi-journal-text"></i><span>Lab Test</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('testname')}}">
          <i class="bi bi-circle"></i><span>Test Name & Price</span>
        </a>
      </li>
      <li>
        <a href="{{ route('reprot.list')}}">
          <i class="bi bi-circle"></i><span>Report</span>
        </a>
      </li>

    </ul>
  </li>

  <!-- end labtest dropdown -->
 


 <!-- start admit dropdown -->
 <li class="nav-item">
    <a class="nav-link " href="{{ route('admit.create') }}">
      <i class="bi bi-grid"></i>
      <span>Admit</span>
    </a>
  </li>

 <!-- end admit dropdown  -->


   <li class="nav-item">
    <a class="nav-link " href="{{route('admission.list')}}">
    <i class="bi bi-pci-card"></i>
      <span>Admission</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ route('amount') }}">
    <i class="bi bi-check-circle"></i>
      <span>Total Amount</span>
    </a>
  </li>

</ul>

</aside><!-- End Sidebar-->

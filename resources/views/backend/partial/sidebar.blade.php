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
    <a class="nav-link " href="{{ route('patient') }}">
    <i class="bi bi-file-diff"></i>
      <span>Patient</span>
    </a>
  </li>


  <li class="nav-item">
    <a class="nav-link " href="{{ route('prescribe') }}">
    <i class="bi bi-clipboard2-plus-fill"></i>
      <span>Prescribe</span>
    </a>
  </li>

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
        <a href="{{ route('add')}}">
          <i class="bi bi-circle"></i><span>Add material</span>
        </a>
      </li>
      <li>
        <a href="{{ route('stokemetarial')}}">
          <i class="bi bi-circle"></i><span>Stoke material</span>
        </a>
      </li>
      
    </ul>
 








  <li class="nav-item">
    <a class="nav-link " href="{{ route('admit') }}">
    <i class="bi bi-pci-card"></i>
      <span>Admit</span>
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
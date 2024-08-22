<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://themewagon.github.io/material-dashboard-2/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://themewagon.github.io/material-dashboard-2/assets/img/favicon.png">
    <title>
        Beneth Emmanuel
    </title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="https://themewagon.github.io/material-dashboard-2/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://themewagon.github.io/material-dashboard-2/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle"
        href="https://themewagon.github.io/material-dashboard-2/assets/css/material-dashboard.css?v=3.0.0"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="g-sidenav-show bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard"
                target="_blank">
                <img src="https://themewagon.github.io/material-dashboard-2/assets/img/logo-ct.png"
                    class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Beneth Dashboard</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="dashboard.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="modal"
                        data-bs-target="#projectsModal">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Projects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="modal"
                        data-bs-target="#messagesModal">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">message</i>
                        </div>
                        <span class="nav-link-text ms-1">Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="https://themewagon.github.io/material-dashboard-2/assets/img/team-2.jpg"
                                                    class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="https://themewagon.github.io/material-dashboard-2/assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7489143 L43,3.58323214 C43,1.60267857 41.4053571,0 39.4267857,0 L3.57321429,0 C1.59464286,0 0,1.60267857 0,3.58323214 L0,10.7489143 L43,10.7489143 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.2504464 C0,34.2304464 1.59464286,35.833125 3.57321429,35.833125 L39.4267857,35.833125 C41.4053571,35.833125 43,34.2304464 43,32.2504464 L43,16.125 L0,16.125 Z M12.6071429,26.0625 L6.03571429,26.0625 L6.03571429,22.4799107 L12.6071429,22.4799107 L12.6071429,26.0625 Z M26.9642857,26.0625 L20.3928571,26.0625 L20.3928571,22.4799107 L26.9642857,22.4799107 L26.9642857,26.0625 Z M36.9642857,26.0625 L30.3928571,26.0625 L30.3928571,22.4799107 L36.9642857,22.4799107 L36.9642857,26.0625 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">create</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Create Project</p>
                                <h4 class="mb-0">New Project</h4>
                            </div>
                        </div>
                        <div class="card-footer p-3">
                            <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal"
                                data-bs-target="#createProjectModal">Create</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">logout</i>
                          </div>
                          <div class="text-end pt-1">
                              <p class="text-sm mb-0 text-capitalize">Logout</p>
                              <h4 class="mb-0">Sign Out</h4>
                          </div>
                      </div>
                      <div class="card-footer p-3">
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                          </form>
                          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-block">Logout</a>
                      </div>
                  </div>
              </div>
              
            </div>
        </div>
    </main>

    {{-- Modal for project table --}}

    <!-- Projects Modal -->
    <div class="modal fade" id="projectsModal" tabindex="-1" aria-labelledby="projectsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectsModalLabel">My Projects</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Project Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Link</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $proj)
                                <tr>
                                    <td>{{ $proj->projectname }}</td>
                                    <td>
                                        <img src="{{ asset('images/' . $proj->image) }}"
                                            alt="{{ $proj->projectname }}" width="100">
                                    </td>
                                    <td><a href="{{ $proj->projectlink }}" target="_blank">Open Project</a></td>
                                    <td>
                                        <!-- Update Icon -->
                                        <button class="btn btn-warning" onclick="openUpdateModal({{ $proj }})"
                                            data-bs-toggle="modal" data-bs-target="#updateProjectModal">
                                            <i class="material-icons">edit</i>
                                        </button>

                                        <form action="{{ route('projects.destroy', $proj->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this project?');">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Creating Projects -->
    <div class="modal fade" id="createProjectModal" tabindex="-1" role="dialog"
        aria-labelledby="createProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('createproject.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="projectname" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="projectname" name="projectname" required>
                        </div>
                        <div class="mb-3">
                            <label for="projectlink" class="form-label">Project Link</label>
                            <input type="url" class="form-control" id="projectlink" name="projectlink" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Add Image</label>
                            <img src="" alt="" class="img-product" id="file-preview" />
                            <input type="file" id="image" name="image" accept="image/*"
                                onchange="showFile(event)">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Project</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Update Modal --}}


    <div class="modal fade" id="updateProjectModal" tabindex="-1" aria-labelledby="updateProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProjectModalLabel">Update Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateProjectForm" action="{{ route('projects.update', 'project_id') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="project_id" id="project_id" value="">
                        <div class="mb-3">
                            <label for="update_projectname" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="update_projectname" name="projectname"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="update_projectlink" class="form-label">Project Link</label>
                            <input type="url" class="form-control" id="update_projectlink" name="projectlink"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="update_image" class="form-label">Update Image</label>
                            <input type="file" id="update_image" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openUpdateModal(project) {
            document.getElementById('project_id').value = project.id;
            document.getElementById('update_projectname').value = project.projectname;
            // Update the form action URL
            const form = document.getElementById('updateProjectForm');
            form.action = form.action.replace('project_id', project.id);
        }
    </script>

    {{-- end here --}}

    {{-- Message Modal --}}

    <div class="modal fade" id="messagesModal" tabindex="-1" aria-labelledby="messagesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messagesModalLabel">My Projects</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emails as $email)
                                <tr>
                                    <td>{{ $email->name }}</td>
                                    <td>{{ $email->email }}</td>
                                    <td>{{ $email->message }}</td>
                                    <td>{{ $email->contact }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End here --}}
    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
    <!-- JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://themewagon.github.io/material-dashboard-2/assets/js/material-dashboard.min.js"></script>
</body>

</html>

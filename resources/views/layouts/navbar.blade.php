<div class="container-fluid">
   <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="#">Title Website</a>
         <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               {{-- {{ Request::path() == '/' ? ' bg-primary' : '' }} --}}
               <li class="nav-item ">
                  {{-- {{ Request::path() == '/' ? ' active' : '' }} --}}
                  <a class="nav-link " href="#">Menu 1 <span class="sr-only">(current)</span></a>
               </li>
               {{-- {{ Request::path() == '/' ? ' bg-primary' : '' }} --}}
               <li class="nav-item ">
                  {{-- {{ Request::path() == '/' ? ' active' : '' }} --}}
                  <a class="nav-link " href="#">Menu 2 <span class="sr-only">(current)</span></a>
               </li>
               {{-- {{ Request::path() == '/' ? ' bg-primary' : '' }} --}}
               <li class="nav-item ">
                  {{-- {{ Request::path() == '/' ? ' active' : '' }} --}}
                  <a class="nav-link " href="#">Menu 3 <span class="sr-only">(current)</span></a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</div>
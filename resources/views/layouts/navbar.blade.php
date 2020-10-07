<div class="container-fluid">
   <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="#">Info Covid-19</a>
         <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               <li class="nav-item {{ Request::path() == '/' ? ' bg-primary' : '' }}">
                  <a class="nav-link {{ Request::path() == '/' ? ' active' : '' }}" href="{{ route('corona.indonesia') }}">Data Covid 19 Indonesia <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item {{ Request::path() == 'data-tuban' || Request::is('tuban/*') ? ' bg-primary' : '' }}">
                  <a class="nav-link {{ Request::path() == 'data-tuban' || Request::is('tuban/*') ? ' active' : '' }}" href="{{ route('corona.tuban') }}">Data Kabupaten Tuban</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</div>